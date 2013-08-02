/**
 * Class Standpunkt with all its methods.
 * 
 * @author kombi-nat
 */
var PHP_FUNCTION_CALL = "/ajax/getStandpunktById.php";
var STANDPOINT_IMAGE = ".standpoint div div div img";
var STANDPOINT_AUTHOR = ".standpoint span";
var STANDPOINT_TEXT = ".standpoint .quote p";
var NAVIGATION_SELECTED = "#footer .selected";
var NAV_ID_PREFIX = "standortenav";
var FADE_TIME = 500;

var currentId = 1;
// maxId will be set by footer_paging.php. There and only there we know how
// many items we have.
var maxId = 1;

Standpunkt = {};

Standpunkt.toggle = function(/*String*/id) {
    // get textfile
    $.get(PHP_FUNCTION_CALL, {id: id, lang: "de"}, // language is always de at the moment
    function(data) {

        // first preload image
        var imageUrl = "/images/standpunkte/" + id + ".jpg";
        jQuery("<img>").attr("src", imageUrl);

        // split data to get standpoint textes
        var splitter = data.split('\n');

        // load image
        $(STANDPOINT_IMAGE).fadeOut(FADE_TIME);
        // load standpoint-text
        $(STANDPOINT_TEXT).fadeOut(FADE_TIME);

        // load author, fade in all three parts and change navigation point
        $(STANDPOINT_AUTHOR).fadeOut(FADE_TIME,
                function callback() {

                    var img = new Image();
                    img.src = imageUrl;
                    if (img.complete) {
                        setImage(img.src, splitter);
                    } else {
                        img.onload = function() {
                            setImage(img.src, splitter);
                        }
                    }

                    // set navigation point to selected
                    $(NAVIGATION_SELECTED).removeClass('selected');
                    $("#" + NAV_ID_PREFIX + id).addClass('selected');

                    // set currentId
                    currentId = id;
                }
        );
    }
    );
}

function setImage(/*String*/ imageUrl, /*Array*/splitter) {
    $(STANDPOINT_IMAGE).attr({
        src: imageUrl,
        title: splitter[1]
    })
            .fadeIn(FADE_TIME)
            .show()
            .end();
    $(STANDPOINT_AUTHOR).html(splitter[1]).fadeIn(FADE_TIME);
    $(STANDPOINT_TEXT).html(splitter[0]).fadeIn(FADE_TIME);
}

$(document).ready(function() {
    handleNavigationPoints();
    handlePaging();
});

function handleNavigationPoints() {
    $("#footer li").mouseover(function() {
        if (this.className == "") {
            $(this).addClass('selected');
        }
    });
    $("#footer li").mouseout(function() {
        if (parseInt(this.id.replace(NAV_ID_PREFIX, "")) != currentId) {
            $(this).removeClass('selected');
        }
    });
    $("#footer li").click(function() {
        if (this.className != "paging") {
            var filteredId = parseInt(this.id.replace(NAV_ID_PREFIX, ""));
            if (filteredId != currentId) {
                Standpunkt.toggle(filteredId);
            }
        }
    });
}

function handlePaging() {
    $("#footer .prev").click(function() {
        if (parseInt(currentId) > 1) {
            Standpunkt.toggle(parseInt(currentId) - 1);
        }
    });
    $("#footer .next").click(function() {
        if (parseInt(currentId) < maxId) {
            Standpunkt.toggle(parseInt(currentId) + 1);
        }
    });
    $("#footer .prev").mouseover(function() {
        if (parseInt(currentId) > 1) {
            $("#footer .prev").attr("src", "/images/arrow_l_on.png");
        }
    });
    $("#footer .prev").mouseout(function() {
        $("#footer .prev").attr("src", "/images/arrow_l.png");
    });
    $("#footer .next").mouseover(function() {
        if (parseInt(currentId) < maxId) {
            $("#footer .next").attr("src", "/images/arrow_r_on.png");
        }
    });
    $("#footer .next").mouseout(function() {
        $("#footer .next").attr("src", "/images/arrow_r.png");
    });
}
