<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="content" id="h-scroll">
    <nav class="products">
      <ul>
        <li class="product">
          <a href="/noble-cru" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/SF_Noble.png">
          </a>
          <section class="title">
            <img src="<?php bloginfo('template_url'); ?>/img/seals/_seal-noble.svg">
            <h1 class="noble-cru">Noble Cru</h1>
            <div class="add-cart">
              <span>Agregar al carrito</span>
              <div class="img-container"><img src="<?php bloginfo('template_url'); ?>/img/cart.svg"></div>
            </div>
          </section>
          <div class="stain">
            <img class="noble-cru" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_NobelCru_fondo.png">
          </div>
        </li>
        <li class="product">
          <a href="/o-positivo" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/SF_OPositivo.png">
          </a>
          <section class="title">
            <h1 class="o-positivo">O Positivo</h1>
            <div class="add-cart">
              <span>Agregar al carrito</span>
              <div class="img-container"><img src="<?php bloginfo('template_url'); ?>/img/cart.svg"></div>
            </div>
          </section>
          <div class="stain">
            <img class="positivo" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_OPositivo_fondo.png">
          </div>
        </li>
        <li class="product">
          <a href="/confabulario" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/SF_Confabulario.png">
          </a>
          <section class="title">
            <h1 class="confabulario">Confa~<br>bulario</h1>
            <div class="add-cart">
              <span>Agregar al carrito</span>
              <div class="img-container"><img src="<?php bloginfo('template_url'); ?>/img/cart.svg"></div>
            </div>
          </section>
          <div class="stain">
            <img class="confabulario" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Confabulario_fondo.png">
          </div>
        </li>        
        <li class="product">
          <a href="/elixir-cordis" title="">
            <img class="slim" src="<?php bloginfo('template_url'); ?>/img/bottles/SF_Elixir.png">
          </a>
          <section class="title">
            <h1 class="elixir-cordis">Elixir Cordis</h1>
            <div class="add-cart">
              <span>Agregar al carrito</span>
              <div class="img-container"><img src="<?php bloginfo('template_url'); ?>/img/cart.svg"></div>
            </div>
          </section>
          <div class="stain">
            <img class="elixir" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Elixir_fondo.png">
          </div>
        </li>
      </ul>
    </nav>
  </section>
</section>
<?php get_footer(); ?>