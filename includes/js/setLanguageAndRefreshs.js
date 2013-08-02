/**
 * Class Refresher.
 * 
 * @author kombi-nat
 */
var PHP_FUNCTION_CALL = "/ajax/setLanguage.php";

Refresher = {};

Refresher.refresh = function(/*String*/langId) {
    // set Session
    $.get(PHP_FUNCTION_CALL, {lang: langId},
    function(data) {
        //window.location.reload();
        //window.location.href = "/index.php";
    }
    );
}

$(document).ready(function() {
    $(".langselector li").click(function() {
        if (this.className != '') {
            // class name could be "de selected", so split it
            var classNames = this.className.split(" ");
            // sessions wont work with strato...
            //Refresher.refresh(classNames[0]);
            window.location.href = "/index.php?lang=" + classNames[0];
        }
    });
});	