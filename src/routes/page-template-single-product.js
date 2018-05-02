// import {
//   jarallax,
//   jarallaxElement,
//   jarallaxVideo
// } from 'jarallax';

export default {
  init() {

    console.log("estas en single-product");


    // parallax stuff

    // jarallaxVideo();
    // jarallaxElement();

    // jarallax(document.querySelectorAll('.leaf-8'), {
    //   speed: 0.8,
    // });

    // jarallax(document.querySelectorAll('.leaf-5'), {
    //   speed: 0.6,
    // });

    // jarallax(document.querySelectorAll('.leaf-6'), {
    //   speed: -1.0,
    // });

    // jarallax(document.querySelectorAll('.leaf-7'), {
    //   speed: 0.6,
    // });

    // jarallax(document.querySelectorAll('.baby-tomatoes'), {
    //   speed: 1,
    // });

    // jarallax(document.querySelectorAll('.cheese-slice'), {
    //   speed: 1,
    // });

    // jarallax(document.querySelectorAll('.mushrooms-sliced'), {
    //   speed: 0.5,
    // });

    // jarallax(document.querySelectorAll('.peppermint'), {
    //   speed: 0.7,
    // });

    // jarallax(document.querySelectorAll('.olive-branch'), {
    //   speed: 2,
    // });

    // JavaScript to be fired on all pages
    function setCookie(c_name, value, exdays) {
      var exdate = new Date();
      exdate.setDate(exdate.getDate() + exdays);
      var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
      document.cookie = c_name + "=" + c_value;
    };

    function getCookie(c_name) {
      var i, x, y, ARRcookies = document.cookie.split(";");
      for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
          return unescape(y);
        }
      }
    }

    // get path name
    var newURL = window.location.protocol + "//" + window.location.host + "/" + window.location.pathname;
    var pathArray = window.location.pathname.split('/');
    var storePathName = pathArray[1];
    var productPathName = pathArray[2];

    // get woo object
    var PRODUCTS = {
      'baya-baya': function() {
        return 317;
      },
      'cabernet': function() {
        return 323;
      },
      'confabulario': function() {
        return 320;
      },
      'elixir-cordis': function() {
        return 319;
      },
      'la-vina-en-rosa': function() {
        return 318;
      },
      'mourvedre': function() {
        return 325;
      },
      'noble-cru': function() {
        return 322;
      },
      'o-positivo': function() {
        return 321;
      },
      'petit-verdot': function() {
        return 324;
      },
      'syrah': function() {
        return 326;
      },
      'vino-blanco': function() {
        return 158;
      },
      NOT_FOUND: 404,
      get: function(productName) {
        return PRODUCTS[productPathName] ? PRODUCTS[productPathName]() : PRODUCTS.NOT_FOUND;
      }
    };

    // name animations



    // console.log(newURL);
    // console.log('store:' + storePathName);
    // console.log('product:' + productPathName);

    var productId = PRODUCTS.get(productPathName);
    console.log(productId)

    // resolve if current page is a vinos page =P
    var svgCanvas = document.getElementById("svg-canvas");
    var theBody = document.getElementsByTagName('body')[0];
    if (storePathName === 'vinos') {
      document.onreadystatechange = function() {
        var state = document.readyState
        if (state == 'uninitialized') {
          console.log('loading')
        } else if (state == 'complete') {
          theBody.classList.add("OVERFLOW");
          setTimeout(function() {
            console.log('cargado')
            svgCanvas.classList.add("start");
            setTimeout(function() {
              var svgCanvas = document.getElementById("leave-card");
              svgCanvas.classList.add("fade-out-top");
              setTimeout(function() {
                svgCanvas.remove();
                theBody.classList.remove("OVERFLOW"); 
              }, 700);
            }, 6000);
          }, 500);
        }
      }
      // console.log('awesome! this is a vinos page');
    } else {
      // console.log('not a vinos page =P');
    }

    // if tis wine was previously visited
    if (getCookie('visited') && storePathName === 'vinos') {
      // location.href = "redirecturl";
      console.log('storePathName es VINOS y esta URL ya fue visitada antes');
      setTimeout(function() {
        theBody.classList.remove("OVERFLOW"); 
        var svgCanvas = document.getElementById("leave-card");
        svgCanvas.remove();
      }, 1000);
    } else {
      setCookie('visited', 1, 365);

      console.log('primera vez que se visita esta URL, pero no es página de vinos');
    }




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
        var productQuantity = 1;
        $("#product-quantity").keyup(function() {
          productQuantity = $(this).val();
          // $("p").text(productQuantity); 
          // .keyup();
        });
        $('#add-cart-custom').click(function(event) {
          console.log('Productos añadidos: ' + productQuantity)
          setTimeout(function() {
            $.post('https://' + window.location.host + '/?add-to-cart=' + productId + '&quantity=' + productQuantity, function(data, status) {
              console.log('its done');
              $("#carrito").load(" #carrito");
              setTimeout(function() {
                var clonnedBottle = document.getElementById("featImage");
                var clone = clonnedBottle.cloneNode(true);
                clone.className = "slide-out-fwd-tr";
                clone.id = "to-delete";
                document.getElementById("clone-container").appendChild(clone);
                setTimeout(function() {
                  document.getElementById("to-delete").remove();
                }, 1000);
              }, 500);
            });
          }, 500);
        });
        // Get object first level data
        $.ajax(settings).done(function(response) {
          // console.log(response.description);

          console.log(response);

          $('#price').html(response.price_html + "<small>.00</small>");
          console.log(response.price_html);
          // $('#description').html(response.description);
          $('#product-name').html(response.name);
          $('.presentation-card').addClass(response.slug);
          $('.presentation-title').html(response.name);
          // console.log(response.attributes[0]);
          // console.log(response.attributes[0].options);


          // varietales template
          var a = response.attributes;
          var grapeTemplate = "";
          a.forEach(function(entry) {
            // console.log(entry.name);
            // console.log(entry.options[0]);
            grapeTemplate += "<div class=\"grape\">" + "<div class=\"grape-img " + entry.name + "\"></div>" + "<div class=\"grape-specs\"><h3 class=\"grapeValue\">" + entry.options[0] + "%" + "</h3>" + "<span class=\"grapeName\">" + entry.name + "</span></div>" + "</div>"
          });
          document.getElementById("type-grape").innerHTML = "<h2>Varietal</h2>" + grapeTemplate;

          // var numberGrapes = $("#type-grape > div.grape").length;
          // if (numberGrapes >= 2) {
          //   $('#type-grape').addClass('wide');
          // } else {
          //   $('#type-grape').addClass('narrow');
          // }

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
          var metaData = product['meta_data'][6];
          var featSealImage = metaData.value;
          document.getElementById("featSeal").src += featSealImage;
          // bottle image
          var metaData = product['meta_data'][4];
          var bottleImage = metaData.value;
          document.getElementById("featImage").src += bottleImage;
          // stain image
          var metaData = product['meta_data'][5];
          var featStainImage = metaData.value;
          document.getElementById("featStain").src += featStainImage;
          // dominant flavors
          var metaData = product['meta_data'][1];
          var dominantFlavors = metaData.value;
          var dominantFlavorsSplit = dominantFlavors.split(',');
          var dominantFlavorsJoin = "<ul><li>" + dominantFlavorsSplit.join("</li>,<li>") + "</li></ul>";
          var dominantFlavorsRemoveCommma = dominantFlavorsJoin.replace(/,/g, ' ');
          $('#dominant-flavors').html(dominantFlavorsRemoveCommma);
          // pairing
          // var metaData = product['meta_data'][0];
          // var pairing = metaData.value;
          // var pairingInfoSplit = pairing.split(',');
          // var pairingInfoJoin = "<ul><li>" + pairingInfoSplit.join("</li>,<li>") + "</li></ul>";
          // var pairingInfoRemoveCommma = pairingInfoJoin.replace(/,/g, ' ');
          // $('#pairing').html(pairingInfoRemoveCommma);
          // technical info notes
          var metaData = product['meta_data'][0];
          var technicalInfo = metaData.value;
          var technicalInfoSplit = technicalInfo.split(',');
          var technicalInfoJoin = "<ul><li>" + technicalInfoSplit.join("</li>,<li>") + "</li></ul>";
          var technicalInfoRemoveCommma = technicalInfoJoin.replace(/,/g, ' ');
          $('#technical-info').html(technicalInfoRemoveCommma);


          // document.getElementById('technical-info').append(result);
          // tasting notes
          // var metaData = product['meta_data'][6];
          // var tastingNotes = metaData.value;
          // document.getElementById('tasting-notes').append(tastingNotes);
          // oenologist commments
          var metaData = product['meta_data'][2];
          var oenologistCommments = metaData.value;
          document.getElementById('oenologist-comments').append(oenologistCommments);
          // intensity specs
          var metaData = product['meta_data'][3];
          var intensity = metaData.value;
          document.getElementById('intensityValue').append(intensity + ' ');
          var barLine = document.getElementById('intensityBarLevel'); // line
          barLine.style.width = intensity + '0%'; // value
          // console.log(intensity + '0%');
        });

      });
    }

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};