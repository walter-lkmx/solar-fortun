import { tween, easing, styler, keyframes } from 'popmotion';
export default {
  init() {

    console.log("estas en single-product");

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
    var presentationCard = document.getElementById("leave-card");
    var theBody = document.getElementsByTagName('body')[0];
    if (storePathName === 'vinos') {
      document.onreadystatechange = function() {
        var state = document.readyState
        if (state == 'uninitialized') {
          console.log('loading')
        } else if (state == 'complete' && !getCookie('visited')) {
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
        } else {
          presentationCard.remove();
        }
      }
      // console.log('awesome! this is a vinos page');
    } else {
      // console.log('not a vinos page =P');
    }

    // if tis wine was previously visited
    setTimeout(function() {
      if (getCookie('visited') && storePathName === 'vinos') {
        console.log('storePathName es VINOS y esta URL ya fue visitada antes');
        theBody.classList.remove("OVERFLOW"); 
      } else {
        setCookie('visited', 1, 365);
  
        console.log('primera vez que se visita esta URL, pero no es página de vinos');
      }
    }, 1000);





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
          // wineName into img (#featImage) class
          var wineName = product.name;
          var featuredImage = document.getElementById("featImage");
          featuredImage.classList.add(productPathName);
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
    jQuery(document).ready(function($){
      const floatingStain = styler(document.querySelector('#featStain'));
        keyframes({
          values: [
            { x: 0, y: 0},
            { x: 25, y: -200},
            { x: -25, y: 100}
          ],
          duration: 100000,
          easings: [easing.easeInOut, easing.easeInOut, easing.easeInOut],
          flip: Infinity
          //times: [0, 0.2, 0.5, 0.6, 1]
        }).start(floatingStain.set);

        // reveal/hidde bottle
        const bottleRevealer = styler(document.querySelector('#featImage'));
        var bottleTrigger = document.getElementById('featImage');
        var specsHideBottle = document.getElementById('v-scroll');
        var featImageContainer = document.getElementById("clone-container");
        var wineSpecsContainer = document.getElementById("v-scroll");
        var toggleBottle = false;
        specsHideBottle.addEventListener("click", function(){
          toggleBottle = false;
        });
        bottleTrigger.addEventListener("click", function(){
          if (toggleBottle === false) {
            featImageContainer.classList.add('superiorLayer');
            wineSpecsContainer.style.opacity = "0.3";
            keyframes({
              values: [
                { x: 0, y: 0},
                { x: 100, y: 0}
              ],
              duration: 500,
              easings: [easing.easeInOut, easing.easeInOut],
              loop: 0
              //times: [0, 0.2, 0.5, 0.6, 1]
            }).start(bottleRevealer.set);
            setTimeout(function() {
              toggleBottle = true;
            }, 500);
          } else if(toggleBottle === true) {
            keyframes({
              values: [
                { x: 100, y: 0},
                { x: 0, y: 0}
              ],
              duration: 500,
              easings: [easing.easeInOut, easing.easeInOut],
              loop: 0
            }).start(bottleRevealer.set);
            setTimeout(function() {
              toggleBottle = false;
              featImageContainer.classList.remove('superiorLayer');
              wineSpecsContainer.style.opacity = "1";
            }, 500);
            // setTimeout(function() {
            // }, 1000);
          }
      });
    });
  },
};