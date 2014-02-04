// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
jQuery(document).foundation();



jQuery(document).ready(function(jQuery) {


  jQuery(window).load(function() {
    jQuery('.quote-slider').flexslider({
      animation: "slide",
      controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
      directionNav: true,
      prevText: "",           //String: Set the text for the "previous" directionNav item
      nextText: ""
    });
  });




// Sort out accordion
jQuery( ".accordion-title" ).click(function() {
	jQuery(".accordion-title").removeClass('accordion-active');
	jQuery(this).addClass('accordion-active');
});    


//https://maps.google.co.uk/maps?q=gambia&ll=12.656418,-13.771362&spn=4.38852,7.124634&hnear=The+Gambia&gl=uk&t=m&z=8
//https://maps.google.co.uk/maps?q=gambia&ll=13.541871,-15.46051&spn=2.186777,3.562317&hnear=The+Gambia&gl=uk&t=m&z=9


// 	zoom: 2,
//	center: center,
//  mapTypeId: google.maps.MapTypeId.ROADMAP,
//  maxZoom: 10


//Google maps
 var mapOptions = {
    zoom: 9,
  //zoomControl: false,

    center: new google.maps.LatLng(13.541871,-15.46051),
    mapTypeId: google.maps.MapTypeId.HYBRID,
        //scaleControl: false,
       // zoomControl: false,
        scrollwheel: false   
  }
  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);




  // not used
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
