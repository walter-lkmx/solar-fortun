<section class="top-bar">
  <nav>
    <ul>
      <li><a href="" title="">Mi cuenta</a></li>
      <li><a class="cart" href="/carrito" title=""><img src="<?php bloginfo('template_url'); ?>/img/cart-black.svg"></a></li>
      <li><a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d botella', '%d botellas', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>
      </li>
    </ul>
  </nav>
</section>