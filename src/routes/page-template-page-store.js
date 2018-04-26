
export default {
  init() {

    console.log("estas en vinos");


    var getTopTier = {
      "async": true,
      "crossDomain": true,
      "url": "https://" + window.location.host + "/wp-json/wc/v2/products?category=21",
      "method": "GET",
      "headers": {
        "Authorization": "Basic Y2tfNDRlMDYyNmRiMDc3MzdiZTZhYjhlYzkwZGNlNWRhOTJjOGVjODU5MTpjc184ODM1YjdkMTRhZTc1ZmY5NTI4YzRhY2FjY2IwZWQxYjY0YWYzN2Mw",
        "Cache-Control": "no-cache",
        "Postman-Token": "fbdb2959-75c2-42a6-a31f-d27a12973362"
      }
    };

    var getMixtures = {
      "async": true,
      "crossDomain": true,
      "url": "https://" + window.location.host + "/wp-json/wc/v2/products?category=22",
      "method": "GET",
      "headers": {
        "Authorization": "Basic Y2tfNDRlMDYyNmRiMDc3MzdiZTZhYjhlYzkwZGNlNWRhOTJjOGVjODU5MTpjc184ODM1YjdkMTRhZTc1ZmY5NTI4YzRhY2FjY2IwZWQxYjY0YWYzN2Mw",
        "Cache-Control": "no-cache",
        "Postman-Token": "fbdb2959-75c2-42a6-a31f-d27a12973362"
      }
    };
    
    var getYoungWine = {
      "async": true,
      "crossDomain": true,
      "url": "https://" + window.location.host + "/wp-json/wc/v2/products?category=20",
      "method": "GET",
      "headers": {
        "Authorization": "Basic Y2tfNDRlMDYyNmRiMDc3MzdiZTZhYjhlYzkwZGNlNWRhOTJjOGVjODU5MTpjc184ODM1YjdkMTRhZTc1ZmY5NTI4YzRhY2FjY2IwZWQxYjY0YWYzN2Mw",
        "Cache-Control": "no-cache",
        "Postman-Token": "fbdb2959-75c2-42a6-a31f-d27a12973362"
      }
    };
    
    var getMonovarietals = {
      "async": true,
      "crossDomain": true,
      "url": "https://" + window.location.host + "/wp-json/wc/v2/products?category=23",
      "method": "GET",
      "headers": {
        "Authorization": "Basic Y2tfNDRlMDYyNmRiMDc3MzdiZTZhYjhlYzkwZGNlNWRhOTJjOGVjODU5MTpjc184ODM1YjdkMTRhZTc1ZmY5NTI4YzRhY2FjY2IwZWQxYjY0YWYzN2Mw",
        "Cache-Control": "no-cache",
        "Postman-Token": "fbdb2959-75c2-42a6-a31f-d27a12973362"
      }
    };

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
      // top tier
      $.ajax(getTopTier).done(function (response) {
        console.log(response);
        
        var index;
        var a = response;
        var catalogTemplate = "";
        for (index = 0; index < a.length; index++) {
          console.log(a[index].id + ' ' + a[index].name);
          var wineName = a[index].name;
          var wineBottle = a[index].meta_data[4].value;
          var winePrice = a[index].price_html;
          var wineLink = a[index].slug;

          catalogTemplate += "<div class=\"wine " + wineLink + "\">" + "<div class=\"img-container\">" + "<img src=\"" + templateDir + "/" + wineBottle + "\"></div>" + "<div class=\"wine-specs\"><h2 class=\"wine-name\">" + wineName + "</h2>" + "<span class=\"wine-price\">" + winePrice + "</span>" + "<a class=\"wine-details\" href=\"/vinos/" + wineLink + "\">" + "Ver detalles" + "</a>" + "</div>" +  "</div>";
        }
        document.getElementById("topTierCatalog").innerHTML = catalogTemplate;
      });
      // mixtures
      $.ajax(getMixtures).done(function (response) {
        console.log(response);
        
        var index;
        var a = response;
        var catalogTemplate = "";
        for (index = 0; index < a.length; index++) {
          console.log(a[index].id + ' ' + a[index].name);
          var wineName = a[index].name;
          var wineBottle = a[index].meta_data[4].value;
          var winePrice = a[index].price_html;
          var wineLink = a[index].slug;

          catalogTemplate += "<div class=\"wine\">" + "<div class=\"img-container\">" + "<img src=\"" + templateDir + "/" + wineBottle + "\"></div>" + "<div class=\"wine-specs\"><h2 class=\"wine-name\">" + wineName + "</h2>" + "<span class=\"wine-price\">" + winePrice + "</span>" + "<a class=\"wine-details\" href=\"/vinos/" + wineLink + "\">" + "Ver detalles" + "</a>" + "</div>" +  "</div>";
        }
        document.getElementById("mixturesCatalog").innerHTML = catalogTemplate;
      });
      // young wine
      $.ajax(getYoungWine).done(function (response) {
        console.log(response);
        
        var index;
        var a = response;
        var catalogWineTemplate = "";
        for (index = 0; index < a.length; index++) {
          console.log(a[index].id + ' ' + a[index].name);
          var wineName = a[index].name;
          var wineBottle = a[index].meta_data[4].value;
          var winePrice = a[index].price_html;
          var wineLink = a[index].slug;

          catalogWineTemplate += "<div class=\"wine\">" + "<div class=\"img-container\">" + "<img src=\"" + templateDir + "/" + wineBottle + "\"></div>" + "<div class=\"wine-specs\"><h2 class=\"wine-name\">" + wineName + "</h2>" + "<span class=\"wine-price\">" + winePrice + "</span>" + "<a class=\"wine-details\" href=\"/vinos/" + wineLink + "\">" + "Ver detalles" + "</a>" + "</div>" +  "</div>";
        }
        document.getElementById("youngWineCatalog").innerHTML = catalogWineTemplate;
      });

      // monovarietals
      $.ajax(getMonovarietals).done(function (response) {
        console.log(response);
        
        var index;
        var a = response;
        var catalogTemplate = "";
        for (index = 0; index < a.length; index++) {
          console.log(a[index].id + ' ' + a[index].name);
          var wineName = a[index].name;
          var wineBottle = a[index].meta_data[4].value;
          var winePrice = a[index].price_html;
          var wineLink = a[index].slug;

          catalogTemplate += "<div class=\"wine\">" + "<div class=\"img-container\">" + "<img src=\"" + templateDir + "/" + wineBottle + "\"></div>" + "<div class=\"wine-specs\"><h2 class=\"wine-name\">" + wineName + "</h2>" + "<span class=\"wine-price\">" + winePrice + "</span>" + "<a class=\"wine-details\" href=\"/vinos/" + wineLink + "\">" + "Ver detalles" + "</a>" + "</div>" +  "</div>";
        }
        document.getElementById("monovarietalsCatalog").innerHTML = catalogTemplate;
      });
      
    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};