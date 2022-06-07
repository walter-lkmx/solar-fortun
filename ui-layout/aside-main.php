<aside class="main-menu" id="main-menu">
  <img class="shadow" src="<?php bloginfo('template_url'); ?>/img/shadow-divider.png">
  <!-- <div class="shadow">
    
  </div> -->
  <a id="mobile-menu-close">Cerrar</a>
  <section class="brand">
    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_url'); ?>/img/solar-logo-black.svg"></a>
  </section>
  <style>
    aside.main-menu {
      overflow-y: auto;
    }

    aside.main-menu.sticky+.single-product,
    aside.main-menu.sticky+section.main-container {
      left: 0;
    }

    @media only screen and (min-width:1024px) {
      aside.main-menu {
        transform: none !important;
      }
    }

    @media (min-width: 20em) and (max-width: 63.9375em) {
      aside.main-menu {
        width: 100% !important;
      }
    }

    @media (max-width: 20em) {
      aside.main-menu {
        transform: none !important;
      }
    }
  </style>
  <nav>
    <ul id="checkout-menu">
      <li><a href="/catalogo"><img src="<?php bloginfo('template_url'); ?>/img/icons8-left_4.svg">Regresar</a></li>
    </ul>
    <ul id="primary-menu">
      <li>
        <a href="/catalogo" title="">
          <span>Tienda / Store</span>
          <div class="stain">
            <img src="<?php bloginfo('template_url'); ?>/img/brush.svg">
          </div>
        </a>
      </li>
      <!-- <li>
        <a href="" title="">
          <span class="jarallax" data-jarallax-element="-80">Romance</span>
          <div class="stain">
            <img src="<?php bloginfo('template_url'); ?>/img/brush.svg">
          </div>
        </a>
      </li> -->
      <li>
        <a href="/noticias" title="">
          <span>Noticias / News</span>
          <div class="stain">
            <img src="<?php bloginfo('template_url'); ?>/img/brush.svg">
          </div>
        </a>
      </li>
      <li>
        <a href="/vinicola" title="">
          <span>Vinícola</span>
          <div class="stain">
            <img src="<?php bloginfo('template_url'); ?>/img/brush.svg">
          </div>
        </a>
      </li>
      <li>
        <a href="/restaurante-eventos" title="">
          <span>Restaurante <br> Valle de Guadalupe</span>
          <div class="stain">
            <img src="<?php bloginfo('template_url'); ?>/img/brush.svg">
          </div>
        </a>
      </li>
      <li>
        <a href="/solar-fortun-usa" title="">
          <span>Solar Fortún USA</span>
          <div class="stain">
            <img src="<?php bloginfo('template_url'); ?>/img/brush.svg">
          </div>
        </a>
      </li>
      <li>
        <a href="/nosotros" title="">
          <span>Nuestra Familia /<br>Solar Fortún Family</span>
          <div class="stain">
            <img src="<?php bloginfo('template_url'); ?>/img/brush.svg">
          </div>
        </a>
      </li>
      <li class="spacer">
        <a href="/contacto" title="">
          <span>Contacto</span>
          <div class="stain">
            <img src="<?php bloginfo('template_url'); ?>/img/brush.svg">
          </div>
        </a>
      </li>
      <li>
        <a href="/privacidad" title="">
          <span>Privacidad</span>
          <div class="stain">
            <img src="<?php bloginfo('template_url'); ?>/img/brush.svg">
          </div>
        </a>
      </li>
      <li>
        <a href="http://www.facebook.com/SolarFortun/" class="social" alt="Facebook" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social-media/facebook.svg"></a>
        <a href="http://www.instagram.com/solarfortun/" class="social" alt="Instagram" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social-media/instagram.svg"></a>
        <a href="http://www.youtube.com/user/solarfortun" class="social" alt="YouTube" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social-media/youtube.svg"></a>
        <a href="http://www.twitter.com/solarfortun" class="social" alt="Twitter" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/social-media/twitter.svg"></a>
      </li>
    </ul>
  </nav>
</aside>