export default {
  init() {
    // JavaScript to be fired on all pages
    console.log('common');

    // initial horizontal scroll
    jQuery(document).ready(function($) {

    // $('body').addClass('lol')
    $('#h-scroll').slimScroll({
        axis: 'x'
    });
    console.log('listo');

    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};