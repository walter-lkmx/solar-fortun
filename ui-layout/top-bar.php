<?php include('mini-cart.php'); ?>
<section class="top-bar" id="header">
  <nav>
    <ul>
      <li><a href="" title="">Mi cuenta</a></li>
      <li id="mini-cart-trigger"><a class="cart" title=""><img src="<?php bloginfo('template_url'); ?>/img/cart-black.svg"></a></li>
      <li id="carrito">
        <?php include('cart.php'); ?>
      </li>
    </ul>
  </nav>
</section>