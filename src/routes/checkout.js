export default {
  init() {
    // get path name
    var checkoutURL =
      window.location.protocol +
      "//" +
      window.location.host +
      "/" +
      window.location.pathname;
    var pathArray = window.location.pathname.split("/");
    var checkoutBase = pathArray[1];
    var checkoutThanks = pathArray[2];

    // no "pasar a caja" button
    var disableTopBar = document.getElementById("top-bar-controls");
    disableTopBar.classList.add('disabled');
    
    var disableMiniCartTools = document.getElementById("mini-cart");
    disableMiniCartTools.classList.add('disabled');
    
    var enablingCheckoutMenu = document.getElementById("checkout-menu");
    enablingCheckoutMenu.classList.add('enabled');
    
    // Checkout view
    if (checkoutBase === "checkout" && checkoutThanks == 0) {
      console.log("aun no has pagado");

      var disablePrimaryMenu = document.getElementById("primary-menu");
      disablePrimaryMenu.classList.add('disabled');
      
      // all this only to insert an H1
      var wooContainter = document.getElementById("post-122");
      var h1Title = document.createElement("h1");
      h1Title.innerHTML = "Finaliza tu compra";
      h1Title.classList.add("section-header");
      wooContainter.appendChild(h1Title);
      wooContainter.insertBefore(h1Title, wooContainter.firstChild);

      // all this only to insert a label
      var pInputContainer = document.getElementById("billing_address_2_field");
      var pInputLabel = document.createElement("label");
      pInputLabel.innerHTML = "Colonia";
      pInputContainer.appendChild(pInputLabel);
      pInputContainer.insertBefore(pInputLabel, pInputContainer.firstChild);

      // all this only to insert a label
      var pShippingInputContainer = document.getElementById(
        "shipping_address_2_field"
      );
      var pShippingInputLabel = document.createElement("label");
      pShippingInputLabel.innerHTML = "Colonia";
      pShippingInputContainer.appendChild(pShippingInputLabel);
      pShippingInputContainer.insertBefore(pShippingInputLabel, pShippingInputContainer.firstChild
      );

      // disabling woocommerce default behaviour
      wooContainter.scrollTop = 0;
      jQuery(document).ready(function($) {
        var emailLabel =
          'Correo electrónico <abbr class="required" title="obligatorio">*</abbr>';
        var coloniaLabel =
          'Colonia <abbr class="required" title="obligatorio">*</abbr>';

        $("#billing_email_field > label").html(emailLabel);
        $("#billing_address_2_field > label").html(coloniaLabel);
        setTimeout(function() {
          window.scrollTo(0, 0);
        }, 2000);

        // removing unnecessary fields
        var createAccountCheckbox = document.getElementsByClassName("woocommerce-account-fields");
        var secondShippingAddress = document.getElementsByClassName("woocommerce-shipping-fields");
        $(createAccountCheckbox).remove();
        $(secondShippingAddress).remove();
      });
    } else {
      // Thanks view
      console.log("ya pagaste");
      // all this only to insert an H1
      var wooContainter = document.getElementById("post-122");
      var h1Title = document.createElement("h1");
      h1Title.innerHTML = "Gracias, tu pedido ha sido recibido.";
      h1Title.classList.add("section-header");
      wooContainter.appendChild(h1Title);
      wooContainter.insertBefore(h1Title, wooContainter.firstChild);
      
      
      jQuery(document).ready(function($) {
        var paymentMethod = $(".method > strong").html();
        var paymentClass = document.getElementsByClassName("order_details");
        $(paymentClass).addClass(paymentMethod);
        // svgCanvas.add.classList("fade-out-top");
        console.log(paymentMethod);
          if (paymentMethod === "OXXO Pay") {
            $( ".order_details" ).siblings( "p" ).wrapAll("<section class=\"methodInstructions\"></section>");
          }
      });
    }
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  }
};
