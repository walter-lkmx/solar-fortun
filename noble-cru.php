<?php /* Template Name: Noble Cru */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="wine-content" id="h-scroll">
    <!--div class="bg-watercolor"-->
      <img class="watercolor noblecru" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_NobelCru_fondo.png">
    <!--/div-->
      <img class="bottle" src="<?php bloginfo('template_url'); ?>/img/bottles/SF_Noble.png">
      <img class="seal" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-noble.svg">
  </section>
  <section class="info-content">
      <h1 class="name">Noble Cru</h1>
      <p class="price">$450<span> MXN</span></p>
      <div class="shop">
        <div class="quant">
          <p>Cant.</p><input type="text" name="">
        </div>
        <div class="buy">
          <button>Añadir al carrito</button>
        </div>
      </div>
      <p class="text">Es nuestro vino Premium y demuestra claramente el por qué. Es sutil, armonioso y complejo. El elegante balance que muestra durante todas las etapas de su degustación hace clara la alta calidad de este producto. La acidez, frutalidad y especias, trabajan en conjunto para crear un vino de cuerpo medio sumamente armonioso lleno de expresión y personalidad que termina con un retrogusto fresco y balanceado y un final persistente y muy agradable.</p>
  </section>
</section>
<?php get_footer(); ?>