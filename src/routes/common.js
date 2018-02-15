export default {
  init() {
    // JavaScript to be fired on all pages
    console.log('common');

    // initial horizontal scroll
    jQuery(document).ready(function($) {
       $(function() {  
    $("#h-scroll").niceScroll({
      rtlmode: "auto", 
      horizrailenabled: true,
      oneaxismousemode: "auto",
      scrollspeed: 10,
      hwacceleration: true,
      bouncescroll: true,
      enablemousewheel: true,
       smoothscroll: true,
    });
});
    });
    
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};