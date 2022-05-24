<?php include('mini-cart.php'); ?>
<div class="top" id="header">
  <?php
    $arr_browsers = ["Opera", "Edg", "Chrome", "Safari", "Firefox", "MSIE", "Trident"];
    
    $agent = $_SERVER['HTTP_USER_AGENT'];
    
    $user_browser = '';
    foreach ($arr_browsers as $browser) {
        if (strpos($agent, $browser) !== false) {
            $user_browser = $browser;
            break;
        }   
    }
      
    switch ($user_browser) {
        case 'MSIE':
            $user_browser = 'Internet Explorer';
            break;
      
        case 'Trident':
            $user_browser = 'Internet Explorer';
            break;
      
        case 'Edg':
            $user_browser = 'Microsoft Edge';
            break;
    }

    if (($user_browser == 'Firefox') && ($cart_item > 0)) {
      $bloginfo = get_template_directory_uri();
      echo "<section class='alert'>
      <p>Para una mejor experiencia, te recomendamos hacer tu compra mediante Google Chrome <img class='alert_icon' src='{$bloginfo}/img/solar-chrome.svg'></p>
    </section>";
    }
  ?>
  <section class="top-bar">
    <a class="mobile-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/img/solar-logo-text.svg"></a>
    <nav>
      <ul id="top-bar-controls">
        <!-- <li class="my-account"><a href="" title="">Mi cuenta</a></li> -->
        <li id="mini-cart-trigger"><a class="cart" title=""><img src="<?php bloginfo('template_url'); ?>/img/cart-black.svg"></a></li>
        <li id="carrito">
          <?php include('cart.php'); ?>
        </li>
        <li id="mobile-menu-trigger"><a>Menú</a></li>
      </ul>
    </nav>
  </section>
  <style>
      a>.whatsapp-bubble {
        width: 62px;
        height: 62px;
        background-color: #10BA18;
        position: fixed;
        bottom: 40px;
        right: 40px;
        border-radius: 50%;
        color: white;
      }

      a>.whatsapp-bubble>img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        cursor: pointer;
      }

      .whatsapp-bubble .hover-text {
        display: none;
        width: 79px;
        height: 16px;

        /* small */

        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 12px;
        line-height: 16px;
        /* identical to box height, or 133% */
        /* negro */

        color: #232734;

        /* Inside auto layout */
        top: 25px;
        flex: none;
        order: 0;
        flex-grow: 0;
        margin: 25px 0 0 -10px;
        transition: display 1s;
      }

      .whatsapp-bubble>.hover-text>label {
        background: white;
        padding: 10px;
        border-radius: 8px;
        box-shadow: 0px 4px 6px -4px rgb(35 39 52 / 12%), 0px 8px 8px -4px rgb(35 39 52 / 8%);
      }

      .whatsapp-bubble:hover .hover-text {

        display: block;
        transform: translateX(-100px);
        opacity: 1;

      }
    </style>
    <a href="https://api.whatsapp.com/send?phone=5216461412048&text=Buen%20d%C3%ADa%2C%20tengo%20una%20pregunta" target="_blank">
      <div class="whatsapp-bubble">
        <div class="hover-text">
          <label>Contáctanos</label>
        </div>
        <img src="<?php bloginfo('template_url') ?>/img/whatsapp-icon.svg"/>
      </div>
    </a>
</div>