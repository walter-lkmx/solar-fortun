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
</div>