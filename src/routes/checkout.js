export default {
  init() {

    // all this only to insert an H1
    var wooContainter = document.getElementById("post-122");
    var h1Title = document.createElement("h1");
    h1Title.innerHTML = 'Finaliza tu compra';
    h1Title.classList.add("section-header");
    wooContainter.appendChild(h1Title);
    wooContainter.insertBefore(h1Title, wooContainter.firstChild);
    
    // all this only to insert a label
    var pInputContainer = document.getElementById("billing_address_2_field");
    var pInputLabel = document.createElement("label");
    pInputLabel.innerHTML = 'Colonia';
    pInputContainer.appendChild(pInputLabel);
    pInputContainer.insertBefore(pInputLabel, pInputContainer.firstChild);    
    
    // all this only to insert a label
    var pShippingInputContainer = document.getElementById("shipping_address_2_field");
    var pShippingInputLabel = document.createElement("label");
    pShippingInputLabel.innerHTML = 'Colonia';
    pShippingInputContainer.appendChild(pShippingInputLabel);
    pShippingInputContainer.insertBefore(pShippingInputLabel, pShippingInputContainer.firstChild);
    
    
    // disabling woocommerce default behaviour
    wooContainter.scrollTop = 0;
    jQuery(document).ready(function($) {
      var emailLabel = "Correo electrónico <abbr class=\"required\" title=\"obligatorio\">*</abbr>";
      var coloniaLabel = "Colonia <abbr class=\"required\" title=\"obligatorio\">*</abbr>";
      
      $( "#billing_email_field > label" ).html(emailLabel);
      $( "#billing_address_2_field > label" ).html(coloniaLabel);
      console.log(changeEmailLabel);
      setTimeout(function() {
        window.scrollTo(0, 0);
      }, 2000);
    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};