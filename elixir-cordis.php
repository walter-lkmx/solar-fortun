<?php /* Template Name: Elixir Cordis */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="wine-content" id="h-scroll">
    <!--div class="bg-watercolor"-->
      <img class="watercolor elixircordis" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Elixir_fondo.png">
    <!--/div-->
      <img class="bottle slim" src="<?php bloginfo('template_url'); ?>/img/bottles/SF_Elixir.png">
      <img class="seal" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-elixir.svg">
  </section>
  <section class="info-content">
      <h1 class="name">Elixir Cordis</h1>
      <!--p class="price">$349<span> MXN</span></p--><p class="price">Próximamente</p>
      <div class="shop">
        <div class="quant">
          <p>Cant.</p><input type="text" name="">
        </div>
        <div class="buy">
          <button>Añadir al carrito</button>
        </div>
      </div>
      <p class="text">Elixir del corazón, representa nuestra nueva etiqueta de vino Premium. Un vino fiel a sus características de monovarietal que expresa de principio a fin, y con gran elocuencia, todas las características de un Cabernet excelentemente logrado. Un vino que mantiene su elegancia y expresión en todas las etapas de la degustación, balancea su intensidad con una buena acidez y sus taninos firmes.<br>Su final muy largo y sedoso cierra la experiencia de una gran manera.<br>Como su nombre lo dice, tiene virtud para fortalecer el corazón.</p>
  </section>
</section>
<?php get_footer(); ?>