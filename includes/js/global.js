/** Do some stuff after load of document */
$(document).ready(function() {
    $(function() {
        // this initialises the architecture-scrollcontainer on the page.
        $('#architecture-scrollcontainer').jScrollPane();
        $('#energie-scrollcontainer').jScrollPane();
        $('#references-sc1').jScrollPane();
        $('#references-sc2').jScrollPane();
        $('#impressum-scrollcontainer').jScrollPane();
        $('#project-sc').jScrollPane();
    });
});

jQuery.preloadImages = function() {
    for (var i = 0; i < arguments.length; i++) {
        jQuery("<img>").attr("src", arguments[i]);
    }
}

function isValid() {

    var msg = "";

    if (kontaktFormular.eMail.value.indexOf("@") < 1 || kontaktFormular.eMail.value.indexOf(".") < 1) {
        msg += "- Die E-Mail-Adresse ist syntaktisch nicht korrekt.\n";
    }

    if (kontaktFormular.vorName.value == "") {
        msg += "- Leeres Feld: Vorname:\n";
    }

    if (kontaktFormular.nachName.value == "") {
        msg += "- Leeres Feld: Name:\n";
    }

    if (kontaktFormular.nachricht.value == "") {
        msg += "- Leeres Feld: Ihre Nachricht:\n";
    }

    if (msg == "") {
        return true;
    }
    alert(msg);
    return false;
}

var message = "copyright©ak-architekten.com";
function click(e) {
    if (document.all) {
        if (event.button == 2) {
            alert(message);
            return false;
        }
    } else {
        if (e.which == 3) {
            alert(message);
            return false;
        }
    }
}
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
}
document.oncontextmenu = click;
document.onmousedown = click;
