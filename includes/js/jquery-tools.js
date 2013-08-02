/**
 small code snippets
 NOT IN USE AT THE MOMENT
 */
jQuery.fn._offset = jQuery.fn.offset;
jQuery.fn.extend({
    offset: function() {
        var a = arguments;
        return (a.length) ? this.animate({top: a[0].top || a[0],
            left: a[0].left || a[1]}, (a[0].top ? a[1] : a[2]) || 1) :
                this._offset();
    }
});