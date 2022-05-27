export default {
  init() {
    
    // console.log('estoy en single post')
    jQuery(document).ready(function($) {
      $("p:has(img)").addClass('paragraph-img');
    });


  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};