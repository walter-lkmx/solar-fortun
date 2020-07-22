<?php /* Template Name: Home-SF */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="content" id="h-scroll">
    <nav class="products">
      <ul>
        <!-- viña en rosa -->
        <li class="product">
          <a href="catalogo/la-vina-en-rosa" title="">
            <img class="bottle-vina-rosa" src="<?php bloginfo('template_url'); ?>/img/bottles/vinaenrosa.png">
          </a>
          <img class="seal noble-cru" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-vinarosa.png">
          <a href="catalogo/la-vina-en-rosa">
            <section class="title">
              <h1 class="vina-rosa">La Viña<br> en Rosa</h1>
              <a href="/?add-to-cart=1562">
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
        <!-- mourvedre -->
        <li class="product">
          <a href="catalogo/mourvedre" title="">
            <img class="bottle-mono" src="<?php bloginfo('template_url'); ?>/img/bottles/mourvedre.png">
          </a>
          <img class="seal noble-cru" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-mono.png">
          <a href="catalogo/mourvedre">
            <section class="title">
              <h1 class="mourvedre">Mour~<br>vèdre</h1>
              <a href="/?add-to-cart=1569">
                <div class="add-cart">
                  <span>Añadir a carrito</span>
                  <!-- <div class="img-container"><img src="<?php bloginfo('template_url'); ?>/img/cart.svg"></div> -->
                </div>
              </a>
            </section>
          </a>
          <div class="stain">
            <img class="mono" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Monovarietales_fondo.png">
          </div>
        </li>
         <!-- syrah -->
         <li class="product">
          <a href="catalogo/syrah" title="">
            <img class="bottle-mono" src="<?php bloginfo('template_url'); ?>/img/bottles/syrah.png">
          </a>
          <img class="seal noble-cru" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-mono.png">
          <a href="catalogo/syrah">
            <section class="title">
              <h1 class="syrah">Syrah</h1>
              <a href="/?add-to-cart=1570">
                <div class="add-cart">
                  <span>Añadir a carrito</span>
                  <!-- <div class="img-container"><img src="<?php bloginfo('template_url'); ?>/img/cart.svg"></div> -->
                </div>
              </a>
            </section>
          </a>
          <div class="stain">
            <img class="mono" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Monovarietales_fondo.png">
          </div>
        </li>
         <!-- petit verdot -->
         <li class="product">
          <a href="catalogo/petit-verdot" title="">
            <img class="bottle-mono" src="<?php bloginfo('template_url'); ?>/img/bottles/petitverdot.png">
          </a>
          <img class="seal noble-cru" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-mono.png">
          <a href="catalogo/petit-verdot">
            <section class="title">
              <h1 class="petit-verdot">Petit<br>Verdot</h1>
              <a href="/?add-to-cart=1568">
                <div class="add-cart">
                  <span>Añadir a carrito</span>
                  <!-- <div class="img-container"><img src="<?php bloginfo('template_url'); ?>/img/cart.svg"></div> -->
                </div>
              </a>
            </section>
          </a>
          <div class="stain">
            <img class="mono" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Monovarietales_fondo.png">
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
              <a href="/?add-to-cart=1565">
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
        <!-- elixir cordis -->
        <li class="product">
          <a href="catalogo/elixir-cordis" title="">
            <img class="bottle-elixir-cordis" src="<?php bloginfo('template_url'); ?>/img/bottles/elixircordis.png">
          </a>
          <img class="seal noble-cru" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-elixir.png">
          <a href="catalogo/elixir-cordis">
            <section class="title">
              <h1 class="elixir-cordis">Elixir<br> Cordis</h1>
              <a href="/?add-to-cart=1563">
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