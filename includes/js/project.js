/**
 * Class Project with all its methods.
 * 
 * @author kombi-nat
 */
var PROJECT_IMAGE = ".project .image img";
var NAVIGATION_SELECTED = "#footer .selected";
var NAV_ID_PREFIX = "projectsnav";
var FADE_TIME = 500;

var currentId = 1;
// maxId will be set by footer_projects.php. There and only there we know how
// many items we have.
var maxId = 1;

Project = {};

Project.toggle = function(/*String*/id) {

    // get part and type by path
    var pathItems = $(PROJECT_IMAGE).attr("src").split('/');
    var part = pathItems[pathItems.length - 2];
    var type = pathItems[pathItems.length - 3];

    // first preload image
    var imageUrl = "/images/projekte/" + type + "/" + part + "/" + id + ".jpg";
    $.preloadImages(imageUrl);

    // get textfile
    $.get(PHP_FUNCTION_CALL, {id: id, lang: "de", type: type, part: part}, // language is always de at the moment
    function(data) {

        var imageTitle = getText(data, "imageTitle");
        // fade text only if its different from the actual text

        // change image, text and change navigation point
        $(PROJECT_IMAGE).fadeOut(FADE_TIME,
                function callback() {
                    // set navigation point to selected

                    var img = new Image();
                    //alert(imageUrl);
                    img.src = imageUrl;
                    if (img.complete) {
                        //alert("img.src: " + img.src);
                        setImage(img.src, imageTitle);
                    } else {
                        img.onload = function() {
                            setImage(img.src, imageTitle);
                        }
                    }

                    // set currentId
                    currentId = id;
                }
        );
    }
    );
}

function setImage(/*String*/imageUrl, /*String*/imageTitle) {
    //alert(imageUrl);
    $(PROJECT_IMAGE).attr({
        src: imageUrl,
        alt: imageTitle
    })
            .fadeIn(FADE_TIME)
            .show()
            .end();
}

/**
 * Gets a part of the given whole text. It should be in the following
 * format:
 * "Text Text Text ${placeholder_start}text text text${placeholder_end}
 * If no placeholder exists returns an empty string.
 * @param {Object} wholeText
 * @param {Object} placeholder
 */
function getText(wholeText, placeholder) {
    var returnValue = "";
    var startSearch = "${" + placeholder + "_start}";
    var endSearch = "${" + placeholder + "_end}";
    var startIndex = wholeText.indexOf(startSearch);
    var endIndex = wholeText.indexOf(endSearch);
    if (startIndex > -1 && endIndex > -1) {
        returnValue = wholeText.substring(startIndex + startSearch.length, endIndex);
    }
    return returnValue;
}

$(document).ready(function() {
    handleNavigationPoints();
    handlePaging();
});

function handleNavigationPoints() {
    $("li.thumbs div").mouseover(function() {
        if (this.className == "") {
            jQuery("img", this).addClass('selected');
        }
    });
    $("li.thumbs div").mouseout(function() {
        if (parseInt(this.id.replace(NAV_ID_PREFIX, "")) != currentId) {
            jQuery("img", this).removeClass('selected');
        }
    });
    $("li.thumbs div").click(function() {
        if (this.className != "paging") {
            var filteredId = parseInt(this.id.replace(NAV_ID_PREFIX, ""));
            if (filteredId != currentId) {
                Project.toggle(filteredId);
            }
        }
    });
}

function handlePaging() {
    $("#footer .prev").click(function() {
        if (parseInt(currentId) > 1) {
            Project.toggle(parseInt(currentId) - 1);
        }
    });
    $("#footer .next").click(function() {
        if (parseInt(currentId) < maxId) {
            Project.toggle(parseInt(currentId) + 1);
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
