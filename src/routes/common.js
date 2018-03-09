export default {
  init() {
    // JavaScript to be fired on all pages
    console.log('common');

    // initial horizontal scroll
    jQuery(document).ready(function($) {
      // horizontal scroll
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
          cursordragontouch: true,
          enablekeyboard: true,
        });
      });

      // vertical scroll in single product
      $(function() {
        $("#v-scroll").niceScroll({
          rtlmode: "auto",
          scrollspeed: 5,
          hwacceleration: true,
          bouncescroll: true,
          enablemousewheel: true,
          smoothscroll: true,
          cursordragontouch: true,
          enablekeyboard: true,
        });
      });
      // add/remove class
      $(".product").hover(
        function() {
          $(this).addClass("enter");
          $(this).removeClass("exit");
        },
        function() {
          $(this).addClass("exit");
          $(this).removeClass("enter");
        }
      );
    });

    // get path name
    var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
    var pathArray = window.location.pathname.split('/');
    var storePathName = pathArray[1];
    var productPathName = pathArray[2];

    // get woo object
    var PRODUCTS = {
      'baya-baya': function() {
        return 157;
      },
      'cabernet': function() {
        return 159; 
      },
      'confabulario': function() {
        return 156;
      },
      'elixir-cordis': function() {
        return 153;
      },
      'la-vina-en-rosa': function() {
        return 152;
      },
      'mourvedre': function() {
        return 162;
      },
      'noble-cru': function() {
        return 154;
      },
      'o-positivo': function() {
        return 155;
      },
      'petit-verdot': function() {
        return 161;
      },
      'syrah': function() {
        return 160;
      },
      'vino-blanco': function() {
        return 158;
      },
      NOT_FOUND : 404,
      get: function(productName) {
        return PRODUCTS[productPathName] ? PRODUCTS[productPathName]() : PRODUCTS.NOT_FOUND;
      }
    };

    // name animations



    console.log(newURL);
    console.log('store:' + storePathName);
    console.log('product:' + productPathName);

    var productId = PRODUCTS.get(productPathName);
    console.log(productId)

    // // get product ID from url
    // if (productPathName === 'elixir-cordis') {
    //   productId = 29;
    //   console.log('Product ID: ' + productId);
    // } else {
    //   console.log('non a product page');
    // }




    // Woo API - Single product
  //   var settings = {
  //     "async": true,
  //     "crossDomain": true,
  //     "url": "http://localhost:4000/wp-json/wc/v2/products/" + productId,
  //     "method": "GET",
  //     "headers": {
  //   "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6OTAwOSIsImlhdCI6MTUyMDAzMzg2NCwibmJmIjoxNTIwMDMzODY0LCJleHAiOjE1MjA2Mzg2NjQsImRhdGEiOnsidXNlciI6eyJpZCI6IjEifX19.KUK-Aq0Q5yXyE0P_H-FMes1RI403E-nDff_BE5Zs0aU",
  //   "Cache-Control": "no-cache",
  //   "Postman-Token": "bf2692da-f6a1-c050-71a5-373e55ab93ed"
  // }
  //   }

    var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://" + window.location.host + "/wp-json/wc/v2/products/" + productId,
  "method": "GET",
  "headers": {
    "Authorization": "Basic Y2tfNDRlMDYyNmRiMDc3MzdiZTZhYjhlYzkwZGNlNWRhOTJjOGVjODU5MTpjc184ODM1YjdkMTRhZTc1ZmY5NTI4YzRhY2FjY2IwZWQxYjY0YWYzN2Mw",
    "Cache-Control": "no-cache",
    "Postman-Token": "1ad8d218-20ae-c864-aa0c-d6b3ccce2330"
  }
}





    if (!String.prototype.format) {
      String.prototype.format = function(args) {
        var args = arguments;
        return this.replace(/{(\d+)}/g, function(match, number) {
          return typeof args[number] != 'undefined' ?
            args[number] :
            match;
        });
      }
    }


    // consulting API for product data
    if (productId != PRODUCTS.NOT_FOUND) {

      jQuery(document).ready(function($) {
                // custo add to cart
        $('#add-cart-custom').click(function(event) {
          $("#product-quantity").keyup(function() {
              var productQuantity = $(this).val();
              console.log('Productos añadidos: ' + productQuantity)
              $("p").text(productQuantity);
              setTimeout(function() {
                $.post('https://' + window.location.host + '/?add-to-cart=' + productId + '&quantity=' + productQuantity, function(data, status) {
                  console.log('its done')
                });
                setTimeout(function() {
                   location.reload();
                  // window.location.href = 'http://' + window.location.host + "/carrito";
                }, 2000);
              }, 1000);
            })
            .keyup();
        });
        // Get object first level data
        $.ajax(settings).done(function(response) {
          // console.log(response.description);

          console.log(response);
          
          $('#price').html(response.price_html);
          // $('#description').html(response.description);
          $('#product-name').html(response.name);
          $('.presentation-card').addClass(response.slug);
          $('.presentation-title').html(response.name);
        });
        // Get object deep data
        $.ajax(settings).done(function(product) {
          // image
          var metaData = product.images[0];
          var featImage = metaData.src;
          // document.getElementById('image').append(featImage);
          // document.getElementById("featImage").setAttribute("src", featImage);

          var pathIn = "<?php bloginfo('template_url'); ?>";
          // seal image
          var metaData = product['meta_data'][5];
          var featSealImage = metaData.value;
          document.getElementById("featSeal").src += featSealImage; 
          // bottle image
          var metaData = product['meta_data'][3];
          var bottleImage = metaData.value;
          document.getElementById("featImage").src += bottleImage; 
          // stain image
          var metaData = product['meta_data'][4];
          var featStainImage = metaData.value;
          document.getElementById("featStain").src += featStainImage;
          // pairing
          var metaData = product['meta_data'][0];
          var pairing = metaData.value;
          var pairingInfoSplit = pairing.split(',');
          var pairingInfoJoin = "<ul><li>" + pairingInfoSplit.join("</li>,<li>") + "</li></ul>";
          var pairingInfoRemoveCommma = pairingInfoJoin.replace(/,/g, ' ');
          $('#pairing').html(pairingInfoRemoveCommma);
          // technical info notes
          var metaData = product['meta_data'][1];
          var technicalInfo = metaData.value;
          var technicalInfoSplit = technicalInfo.split(',');
          var technicalInfoJoin = "<ul><li>" + technicalInfoSplit.join("</li>,<li>") + "</li></ul>";
          var technicalInfoRemoveCommma = technicalInfoJoin.replace(/,/g, ' ');
          $('#technical-info').html(technicalInfoRemoveCommma);


          // document.getElementById('technical-info').append(result);
          // tasting notes
          var metaData = product['meta_data'][6];
          var tastingNotes = metaData.value;
          document.getElementById('tasting-notes').append(tastingNotes);
          // oenologist commments
          var metaData = product['meta_data'][2];
          var oenologistCommments = metaData.value;
          document.getElementById('oenologist-comments').append(oenologistCommments);
        });

      });
    }

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};