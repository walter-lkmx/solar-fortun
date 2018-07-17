<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="content" id="h-scroll">
    <nav class="products">
      <ul>
        <!-- confabulario -->
        <li class="product">
          <a href="catalogo/confabulario" title="">
            <img class="bottle-mixtures" src="<?php bloginfo('template_url'); ?>/img/bottles/confabulario.png">
          </a>
          <img class="seal noble-cru" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-confabulario.png">
          <a href="catalogo/confabulario">
            <section class="title">
              <h1 class="confabulario">Confa~<br>bulario</h1>
              <a href="/catalogo/?add-to-cart=1564">
                <div class="add-cart">
                  <span>Añadir a carrito</span>
                  <!-- <div class="img-container"><img src="<?php bloginfo('template_url'); ?>/img/cart.svg"></div> -->
                </div>
              </a>
            </section>
          </a>
          <div class="stain">
            <img class="confabulario" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Confabulario_fondo.png">
          </div>
        </li>
        <!-- o positivo -->
        <li class="product">
          <a href="catalogo/o-positivo" title="">
            <img class="bottle-mixtures" src="<?php bloginfo('template_url'); ?>/img/bottles/opositivo.png">
          </a>
          <img class="seal noble-cru" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-opositivo.png">
          <a href="catalogo/o-positivo">
            <section class="title">
              <h1 class="o-positivo">O Positivo</h1>
              <a href="/catalogo/?add-to-cart=1565">
                <div class="add-cart">
                  <span>Añadir a carrito</span>
                  <!-- <div class="img-container"><img src="<?php bloginfo('template_url'); ?>/img/cart.svg"></div> -->
                </div>
              </a>
            </section>
          </a>
          <div class="stain">
            <img class="positivo" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_OPositivo_fondo.png">
          </div>
        </li>
        <!-- noble cru -->
        <li class="product">
          <a href="catalogo/noble-cru" title="">
            <img class="bottle-mixtures" src="<?php bloginfo('template_url'); ?>/img/bottles/noblecru.png">
          </a>
          <img class="seal noble-cru" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-noble.png">
          <a href="catalogo/noble-cru">
            <section class="title">
              <h1 class="noble-cru">Noble Cru</h1>
              <a href="/catalogo/?add-to-cart=1566">
                <div class="add-cart">
                  <span>Añadir a carrito</span>
                  <!-- <div class="img-container"><img src="<?php bloginfo('template_url'); ?>/img/cart.svg"></div> -->
                </div>
              </a>
            </section>
          </a>
          <div class="stain">
            <img class="noble-cru" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_NobelCru_fondo.png">
          </div>
        </li>
        <!-- viña en rosa -->
        <li class="product">
          <a href="catalogo/la-vina-en-rosa" title="">
            <img class="bottle-vina-rosa" src="<?php bloginfo('template_url'); ?>/img/bottles/vinaenrosa.png">
          </a>
          <img class="seal noble-cru" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-vinarosa.png">
          <a href="catalogo/la-vina-en-rosa">
            <section class="title">
              <h1 class="vina-rosa">La Viña<br> en Rosa</h1>
              <a href="/catalogo/?add-to-cart=1562">
                <div class="add-cart">
                  <span>Añadir a carrito</span>
                  <!-- <div class="img-container"><img src="<?php bloginfo('template_url'); ?>/img/cart.svg"></div> -->
                </div>
              </a>
            </section>
          </a>
          <div class="stain">
            <img class="vina-rosa" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_EnRosa_fondo.png">
          </div>
        </li>        
        <!-- elixir cordis -->
        <li class="product">
          <a href="catalogo/elixir-cordis" title="">
            <img class="bottle-elixir-cordis" src="<?php bloginfo('template_url'); ?>/img/bottles/elixircordis.png">
          </a>
          <img class="seal noble-cru" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-elixir.png">
          <a href="catalogo/elixir-cordis">
            <section class="title">
              <h1 class="elixir-cordis">Elixir<br> Cordis</h1>
              <a href="/catalogo/?add-to-cart=1563">
                <div class="add-cart">
                  <span>Añadir a carrito</span>
                  <!-- <div class="img-container"><img src="<?php bloginfo('template_url'); ?>/img/cart.svg"></div> -->
                </div>
              </a>
            </section>
          </a>
          <div class="stain">
            <img class="elixir" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Elixir_fondo.png">
          </div>
        </li>
        <li class="product last">
            <a class="see-more" href="/catalogo">
              Ver todos <br>los vinos
            </a>
        </li>
      </ul>
    </nav>
  </section>
</section>
<?php get_footer(); ?>