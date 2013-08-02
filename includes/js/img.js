/*
 * Class ImageSelect
 * javascript object to handle multiple images to replace
 * big product image
 */

function ImageSelect() {
    this.selectedLastObject = null;
    this.selectedLastIndex = -1;
    this.sel = 'div#progressbar > a';

    /*
     * selIndex
     * returns index  of an object in the small image list
     */
    this.selIndex = function(obj) {
        var all = $(this.sel);
        for (var i = 0; i < all.size(); i++) {
            if (obj == all[i]) {
                return i;
            }
        }
        return undefined;
    }

    /*
     * selClick
     * performs the click-action on a small image
     * @param object obj
     */
    this.selClick = function(obj) {
        // check wether obj is a valid object or not (via index)			
        var i = this.selIndex(obj);
        if (typeof i == 'undefined') {
            throw "selObject has no index!";
        }
        var t = obj.title || obj.name || null;

        //edit + img and .sel are hardencoded here
        var classSel = 'sel';
        var childElement = 'img';

        if (this.selectedLastObject) {
            $(this.selectedLastObject).children(childElement).toggleClass(classSel);
        }

        $(obj).children(childElement).toggleClass(classSel);

        this._selectedLastObject = obj;
        this.selectedLastIndex = i;

        // incarnate modified imageloader
        var url = obj.href;
        var id = 'displayImage';
        var loa = new ImageLoader(id, url);

        loa.loadImage();

        obj.blur();
        return false;
    }

    /*
     * init
     * put prdImgSel functionality into the DOM
     * @return bool false just false
     */
    this.init = function() {
        // decide wether to init or not
        if ($(selectedImage.sel).size() == 0) {
            return false;
        }

        // add click handler to small images
        // edit + reference to global variable
        $(selectedImage.sel).click(function() {
            selectedImage.selClick(this);
            return false;
        });

        // add click handler to left/right buttons
        // edit+ reference to global variable
        $('img.navButton').click(function() {
            var d = 0;
            switch (this.id) {
                case 'navButtonLeft':
                    d = -1;
                    break;
                case 'navButtonRight':
                    d = 1;
                    break;
            }
            var m = $(selectedImage.sel).size();
            var i = selectedImage.selectedLastIndex + d;
            if (i != selectedImage.selectedLastIndex) {
                if (i < 0) {
                    i = m - 1;
                }
                if (i > m - 1) {
                    i = 0;
                }
                var obj = $(selectedImage.sel).get(i);
                selectedImage.selClick(obj);
            }
            this.blur();
            return false;
        });

        var obj = $(selectedImage.sel).get(0);
        selectedImage.selClick(obj);
    }
}

/*
 * ImageLoader
 */
function ImageLoader(id, url) {
    this.i = new Image();
    this.id = id;
    this.url = url;
    this.imageElement = document.getElementById(id);
    this.loadImage = function() {
        // pr�fen ob load notwendig ist
        if (this.imageElement.src == this.url) {
            return false;
        }
        objRef = this;
        this.i.src = this.url
        if (!this.i.complete) {
            $('#waitImage').fadeIn(1);
            objRef.waitForImage();
        } else {
            this.imageElement.src = this.i.src;
        }
    };
    this.waitForImage = function() {
        if (objRef.i.complete) {
            objRef.imageElement.src = objRef.i.src;
            $('#waitImage').fadeOut("slow");
        } else {
            setTimeout('objRef.waitForImage()', 100);
        }
    };
}

var selectedImage = new ImageSelect();
$(document).ready(selectedImage.init);