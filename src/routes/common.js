import { tween, easing, styler, keyframes } from 'popmotion';

export default {
  init() {

    // get path name
    var cartRedirect = window.location.protocol + "//" + window.location.host + "/" + 'carrito';

    // if (cartRedirect) {
    //   window.location.replace("https://98788515.ngrok.io");
    // } else {

    // }

    window.onscroll = function() { headerScroll() };
    var header = document.getElementById("header");
    var mainMenu = document.getElementById("main-menu");
    // Get the offset position of the navbar
    var sticky = header.offsetTop;
    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function headerScroll() {
      if (window.pageYOffset >= sticky + 1) {
        header.classList.add("sticky");
        mainMenu.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
        mainMenu.classList.remove("sticky");
      }
    }

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
      // $(function() {
      //   $("#v-scroll").niceScroll({
      //     rtlmode: "auto",
      //     scrollspeed: 5,
      //     horizrailenabled: false,
      //     hwacceleration: true,
      //     bouncescroll: true,
      //     enablemousewheel: true,
      //     smoothscroll: true,
      //     cursordragontouch: true,
      //     enablekeyboard: true,
      //   });
      // });
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
      
      // controlling cart widget
      var miniCart = document.getElementById("mini-cart");
      var fallback = document.getElementById("clickFallback");
      $("#mini-cart-trigger, #carrito").click(
        function() {
          miniCart.classList.add("fade-in-top");
          fallback.classList.add("fade-in-top");
          miniCart.classList.remove("fade-out-top");
          fallback.classList.remove("fade-out-top");
          fallback.style.display = "block";
          setTimeout(function() {
            miniCart.style.display = "initial";
            fallback.style.display = "initial";
          }, 500);
        }
      );
      $("#clickFallback, #mobile-minicart-close").click(
        function() {
          miniCart.classList.add("fade-out-top");
          fallback.classList.add("fade-out-top");
          setTimeout(function() {
            miniCart.style.display = "none";
            fallback.style.display = "none";
          }, 1000);
        }
      );
      $("li#carrito > a").removeAttr("href");


      // var mobileMenuTrigger = document.getElementsByTagName('mobile-menu-trigger');
      var mobileMenu = document.getElementById('main-menu');
      var theBodyMenu = document.getElementsByTagName('body')[0];
      const menuAnimation = styler(document.querySelector('#main-menu'));
      const bodyAnimation = styler(document.querySelector('body'));
      $("#mobile-menu-trigger").click(
        function() {
          theBodyMenu.classList.add("OVERFLOW");
          theBodyMenu.classList.add("disapear-content");
          keyframes({
            values: [
              { x: 0, y: -1024},
              { x: 0, y: 600},
              { x: 0, y: 0}
            ],
            duration: 500,
            easings: [easing.backOut, easing.backOut, easing.backOut],
            loop: 0,
          }).start(menuAnimation.set);
        }
      );
      $("#mobile-menu-close").click(
        function() {
          theBodyMenu.classList.remove("OVERFLOW");
          mobileMenu.classList.remove("dissapear-content");
          keyframes({
            values: [
              { x: 0, y: 0},
              { x: 0, y: 100},
              { x: 0, y: -1024}
            ],
            duration: 800,
            easings: [easing.backOut, easing.backOut, easing.backOut],
            loop: 0,
            //times: [0, 0.2, 0.5, 0.6, 1]
          }).start(menuAnimation.set);
        }
      );
    });
    

    // var theBody = document.getElementsByTagName('body')[0];
    // theBody.classList.add("OVERFLOW");
    

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    
  },
};