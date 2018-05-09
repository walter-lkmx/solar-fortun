<?php include('mini-cart.php'); ?>
<section class="top-bar" id="header">
  <a class="mobile-brand" href=""><img src="<?php bloginfo('template_url'); ?>/img/solar-logo-text.svg"></a>
  <nav>
    <ul id="top-bar-controls">
      <li class="my-account"><a href="" title="">Mi cuenta</a></li>
      <li id="mini-cart-trigger"><a class="cart" title=""><img src="<?php bloginfo('template_url'); ?>/img/cart-black.svg"></a></li>
      <li id="carrito">
        <?php include('cart.php'); ?>
      </li>
      <li id="mobile-menu-trigger"><img src="<?php bloginfo('template_url'); ?>/img/mobile-menu.svg"></li>
    </ul>
  </nav>
</section>