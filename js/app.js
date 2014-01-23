// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
jQuery(document).foundation();



jQuery(document).ready(function(jQuery) {
	jQuery(window).scroll(function() {
	    var windscroll = jQuery(window).scrollTop();
	    if (windscroll >= 100) {
	        jQuery('.top-bar').addClass('fixed');
	    } else {
	        jQuery('.top-bar').removeClass('fixed');
	    }
	}).scroll();
});


        skrollr.init({
                constants: {
                        //fill the box for a "duration" of 150% of the viewport (pause for 150%)
                        //adjust for shorter/longer pause
                        box: '150p'
                }
        });
