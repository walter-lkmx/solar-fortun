
export default {
  init() {

    console.log("estas en vinos");


    var settings = {
      "async": true,
      "crossDomain": true,
      "url": "https://6e2d186a.ngrok.io/wp-json/wc/v2/products/",
      "method": "GET",
      "headers": {
        "Authorization": "Basic Y2tfNDRlMDYyNmRiMDc3MzdiZTZhYjhlYzkwZGNlNWRhOTJjOGVjODU5MTpjc184ODM1YjdkMTRhZTc1ZmY5NTI4YzRhY2FjY2IwZWQxYjY0YWYzN2Mw",
        "Cache-Control": "no-cache",
        "Postman-Token": "fbdb2959-75c2-42a6-a31f-d27a12973362"
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
    
    jQuery(document).ready(function($) {
      $.ajax(settings).done(function (response) {
        console.log(response);
        var index;
        var a = response;
        for (index = 0; index < a.length; index++) {
          console.log(a[index].id + ' ' + a[index].name);
          var wineName = a[index].id + ' ' + a[index].name;

          var wines = a[index].id + ' ' + a[index].name;
          var wineCatalog = document.getElementById("demo");
          wineCatalog.innerHTML += "<li class='list-group-item' id='listItem'>"+ wines + "</li>" + "<br />";
        }
      });
    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};