export default {
  init() {

    console.log("estas en vinos");


    var getTopTier = {
      "async": true,
      "crossDomain": true,
      "url": "https://" + window.location.host + "/wp-json/wc/v2/products?category=96",
      "method": "GET",
        "headers": {
    "Authorization": "Basic Y2tfYjliODdmZjZjZjQyNGMwNmUwMTdlNzI3MzczZGY5ZGRkMjZhOWUyYTpjc182OTRkMGQ1ZjIxY2VmYmZmODc0NjI1NGQzOWFiM2U1ZjcxMjdlNjkz",
    "Cache-Control": "no-cache",
    "Postman-Token": "7c4e3715-bf17-4b83-95b6-0eb3cef36e37"
  }
    };

    var getMixtures = {
      "async": true,
      "crossDomain": true,
      "url": "https://" + window.location.host + "/wp-json/wc/v2/products?category=94",
      "method": "GET",
        "headers": {
    "Authorization": "Basic Y2tfYjliODdmZjZjZjQyNGMwNmUwMTdlNzI3MzczZGY5ZGRkMjZhOWUyYTpjc182OTRkMGQ1ZjIxY2VmYmZmODc0NjI1NGQzOWFiM2U1ZjcxMjdlNjkz",
    "Cache-Control": "no-cache",
    "Postman-Token": "7c4e3715-bf17-4b83-95b6-0eb3cef36e37"
  }
    };
    
    var getYoungWine = {
      "async": true,
      "crossDomain": true,
      "url": "https://" + window.location.host + "/wp-json/wc/v2/products?category=97",
      "method": "GET",
        "headers": {
    "Authorization": "Basic Y2tfYjliODdmZjZjZjQyNGMwNmUwMTdlNzI3MzczZGY5ZGRkMjZhOWUyYTpjc182OTRkMGQ1ZjIxY2VmYmZmODc0NjI1NGQzOWFiM2U1ZjcxMjdlNjkz",
    "Cache-Control": "no-cache",
    "Postman-Token": "7c4e3715-bf17-4b83-95b6-0eb3cef36e37"
  }
    };
    
    var getMonovarietals = {
      "async": true,
      "crossDomain": true,
      "url": "https://" + window.location.host + "/wp-json/wc/v2/products?category=95",
      "method": "GET",
        "headers": {
    "Authorization": "Basic Y2tfYjliODdmZjZjZjQyNGMwNmUwMTdlNzI3MzczZGY5ZGRkMjZhOWUyYTpjc182OTRkMGQ1ZjIxY2VmYmZmODc0NjI1NGQzOWFiM2U1ZjcxMjdlNjkz",
    "Cache-Control": "no-cache",
    "Postman-Token": "7c4e3715-bf17-4b83-95b6-0eb3cef36e37"
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
          var wineWatercolor = a[index].meta_data[5].value;
          var winePrice = a[index].price_html;
          var wineLink = a[index].slug;

          catalogTemplate += "<div class=\"wine\">" + "<div class=\"img-container\">" + "<img class=\"wineBottle\" src=\"" + templateDir + "/" + wineBottle + "\">" + "<div class=\"imgWatercolor-container\">" + "<img class=\"wineWatercolor " + wineName.toLowerCase() + "\" src=\"" + templateDir + "/" + wineWatercolor + "\"></div></div>" + "<div class=\"wine-specs\"><h2 class=\"wine-name\">" + wineName + "</h2>" + "<span class=\"wine-price\">" + winePrice + "</span>" + "<a class=\"wine-details\" href=\"/vinos/" + wineLink + "\">" + "Ver detalles" + "</a>" + "</div>" +  "</div>";
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
          var wineWatercolor = a[index].meta_data[5].value;
          var winePrice = a[index].price_html;
          var wineLink = a[index].slug;

          catalogTemplate += "<div class=\"wine\">" + "<div class=\"img-container\">" + "<img class=\"wineBottle\" src=\"" + templateDir + "/" + wineBottle + "\">" + "<div class=\"imgWatercolor-container\">" + "<img class=\"wineWatercolor " + wineName.toLowerCase() + "\" src=\"" + templateDir + "/" + wineWatercolor + "\"></div></div>" + "<div class=\"wine-specs\"><h2 class=\"wine-name\">" + wineName + "</h2>" + "<span class=\"wine-price\">" + winePrice + "</span>" + "<a class=\"wine-details\" href=\"/vinos/" + wineLink + "\">" + "Ver detalles" + "</a>" + "</div>" +  "</div>";
        }
        document.getElementById("mixturesCatalog").innerHTML = catalogTemplate;
      });
      // young wine
      $.ajax(getYoungWine).done(function (response) {
        console.log(response);
        
        var index;
        var a = response;
        var catalogTemplate = "";
        for (index = 0; index < a.length; index++) {
          console.log(a[index].id + ' ' + a[index].name);
          var wineName = a[index].name;
          var wineBottle = a[index].meta_data[4].value;
          var wineWatercolor = a[index].meta_data[5].value;
          var winePrice = a[index].price_html;
          var wineLink = a[index].slug;

          catalogTemplate += "<div class=\"wine\">" + "<div class=\"img-container\">" + "<img class=\"wineBottle\" src=\"" + templateDir + "/" + wineBottle + "\">" + "<div class=\"imgWatercolor-container\">" + "<img class=\"wineWatercolor " + wineName.toLowerCase() + "\" src=\"" + templateDir + "/" + wineWatercolor + "\"></div></div>" + "<div class=\"wine-specs\"><h2 class=\"wine-name\">" + wineName + "</h2>" + "<span class=\"wine-price\">" + winePrice + "</span>" + "<a class=\"wine-details\" href=\"/vinos/" + wineLink + "\">" + "Ver detalles" + "</a>" + "</div>" +  "</div>";
        }
        document.getElementById("youngWineCatalog").innerHTML = catalogTemplate;
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
          var wineWatercolor = a[index].meta_data[5].value;
          var winePrice = a[index].price_html;
          var wineLink = a[index].slug;

          catalogTemplate += "<div class=\"wine\">" + "<div class=\"img-container\">" + "<img class=\"wineBottle\" src=\"" + templateDir + "/" + wineBottle + "\">" + "<div class=\"imgWatercolor-container\">" + "<img class=\"wineWatercolor " + wineName.toLowerCase() + "\" src=\"" + templateDir + "/" + wineWatercolor + "\"></div></div>" + "<div class=\"wine-specs\"><h2 class=\"wine-name\">" + wineName + "</h2>" + "<span class=\"wine-price\">" + winePrice + "</span>" + "<a class=\"wine-details\" href=\"/vinos/" + wineLink + "\">" + "Ver detalles" + "</a>" + "</div>" +  "</div>";
        }
        document.getElementById("monovarietalsCatalog").innerHTML = catalogTemplate;
      });
      
    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    // tyler(document.querySelector('body'));
    
  },
};