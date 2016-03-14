// NAVIGATION TRANISTION
// --------------------------------------------
// Upon scrolling change RCL Navbar from the default postion to fixed
// at the moment it touched the top of the browser. To prevent the page
// from jumping we display an empty spacer that is the same height as
// the navbar.

(function ($) {
    $('#yourButton').click(function() {
        if ($('br').css('height') === "17px"){
            $('br').css({
                'content': 'normal',
                'margin-bottom': '0',
                'border-right': 'none',
                'height': '0',
                'width': '0',
                'margin': '0',
            });
        } else {
            $('br').css({
                'content': '"A"',
                'margin-bottom': '1.5em !important',
                'border-right': '1px dotted #7cbcff',
                'height': '17px',
                'width': '4px',
                'margin': '0 5px',
            });
        }

    });
})(jQuery);