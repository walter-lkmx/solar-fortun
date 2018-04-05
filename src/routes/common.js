export default {
  init() {


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
    });



  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};