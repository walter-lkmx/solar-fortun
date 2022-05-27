export default {
  init() {

    // console.log("estas en vinosV2");


    

    
    jQuery(document).ready(function($) {
      $("li.type-product").addClass('wine');
      $("img.attachment-woocommerce_thumbnail").wrap("<div class=\"img-container\"></div>");
      $("img.attachment-woocommerce_thumbnail").addClass('wineBottle');

      $('.woocommerce-loop-product__link > .woocommerce-loop-product__title').each(function(){
        $(this).next('.price').andSelf().wrapAll('<div class="wine-specs"/>');
      });
      $(".add_to_cart_button").wrap('.wine-specs2');
      
      $('.img-container').append("<div class=\"imgWatercolor-container\"></div>")
      $('.woocommerce-loop-product__link').each(function(){
        // get product name using href URL, add class to link container
        var href = $(this).attr('href');
        var parts = href.split("/");
        var last_part = parts[parts.length-2];
        $(this).addClass(last_part);
        $('.img-container > .imgWatercolor-container', this).append("<img class=\"wineWatercolor " + "\" src=\"" + templateDir + "/img/watercolors/" + last_part + ".png" + "\">");
      });
      

      var waterColorElixirCordis = $( ".woocommerce-loop-product__link" ).hasClass("elixir-cordis");
      var waterColorNobleCru = $( ".woocommerce-loop-product__link" ).hasClass("noble-cru");

      $('.woocommerce-loop-product__link').each(function(){
        if($(this).hasClass("noble-cru")) {
          
        }
      });

      // if (waterColorElixirCordis) {
      //   $('.imgWatercolor-container').append("<img class=\"wineWatercolor " + "\" src=\"" + templateDir + "/img/watercolors/_SolarFortun_Elixir_fondo.png" + "\">");$
      // } else if (waterColorNobleCru) {
      //   ('.imgWatercolor-container').append("<img class=\"wineWatercolor " + "\" src=\"" + templateDir + "/img/watercolors/_SolarFortun_NobelCru_fondo.png" + "\">");
      // }

      
    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    // tyler(document.querySelector('body'));
    
  },
};