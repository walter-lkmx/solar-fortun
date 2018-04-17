<?php /* Template Name: All Wines */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="wines-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="blog content">
    <h1 class="section-header">Todos los vinos</h1>
    <h3 class="wines-header">Premium</h3>
    <nav class="products">
      <ul>
        <!-- elixir cordis -->
        <li class="all-product">
          <a href="vinos/elixir-cordis" title="">
            <img class="bottle-elixir-cordis" src="<?php bloginfo('template_url'); ?>/img/bottles/elixircordis.png">
          </a>
          <p>Elixir Cordis</p>
          <p>$1,200 MXN</p>
        </li>
      </ul>
    </nav>
    <h3 class="wines-header">Línea Joven</h3>
    <nav class="products">
    <ul>
        <!-- viña en rosa -->
        <li class="all-product">
          <a href="vinos/la-vina-en-rosa" title="">
            <img class="bottle-linea-joven" src="<?php bloginfo('template_url'); ?>/img/bottles/vinaenrosa.png">
          </a>
          <p>La Viña<br>en Rosa</p>
          <p>$260 MXN</p>
        </li>
        <!-- baya baya -->
        <li class="all-product">
          <a href="vinos/baya-baya" title="">
            <img class="bottle-linea-joven" src="<?php bloginfo('template_url'); ?>/img/bottles/bayabaya.png">
          </a>
          <p>Baya Baya</p>
          <p>$240 MXN</p>
        </li>       
      </ul>
    </nav>
    <h3 class="wines-header">Mezclas</h3>
    <nav class="products">
      <ul>
        <!-- confabulario -->
        <li class="all-product">
          <a href="vinos/confabulario" title="">
            <img class="bottle-mixtures" src="<?php bloginfo('template_url'); ?>/img/bottles/confabulario.png">
          </a>
          <p>Confabulario</p>
          <p>$350 MXN</p>
        </li>
        <!-- o positivo -->
        <li class="all-product">
          <a href="vinos/o-positivo" title="">
            <img class="bottle-mixtures" src="<?php bloginfo('template_url'); ?>/img/bottles/opositivo.png">
          </a>
          <p>O Positivo</p>
          <p>$410 MXN</p>
        </li>
        <!-- noble cru -->
        <li class="all-product">
          <a href="vinos/noble-cru" title="">
            <img class="bottle-mixtures" src="<?php bloginfo('template_url'); ?>/img/bottles/noblecru.png">
          </a>
          <p>Noble Cru</p>
          <p>$520 MXN</p>
        </li>
      </ul>
    </nav>
    <h3 class="wines-header">Monovarietales</h3>
    <nav class="products">
      <ul>
        <!-- cabernet -->
        <li class="all-product">
          <a href="vinos/cabernet" title="">
            <img class="bottle-monovarietal" src="<?php bloginfo('template_url'); ?>/img/bottles/cabernet.png">
          </a>
          <p>Cabernet<br>Sauvignon</p>
          <p>$295 MXN</p>
        </li>
        <!-- syrah -->
        <li class="all-product">
          <a href="vinos/syrah" title="">
            <img class="bottle-monovarietal" src="<?php bloginfo('template_url'); ?>/img/bottles/syrah.png">
          </a>
          <p>Syrah</p>
          <p>$295 MXN</p>
        </li>
        <!-- petit verdot -->
        <li class="all-product">
          <a href="vinos/petit-verdot" title="">
            <img class="bottle-monovarietal" src="<?php bloginfo('template_url'); ?>/img/bottles/petitverdot.png">
          </a>
          <p>Petit Verdot</p>
          <p>$295 MXN</p>
        </li>
        <!-- mourvedre -->
        <li class="all-product">
          <a href="vinos/mourvedre" title="">
            <img class="bottle-monovarietal" src="<?php bloginfo('template_url'); ?>/img/bottles/mourvedre.png">
          </a>
          <p>Mourvédre</p>
          <p>$295 MXN</p>
        </li>
      </ul>
    </nav>
  </section>
</section>
<?php get_footer(); ?>