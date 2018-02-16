<?php /* Template Name: O Positivo */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="wine-content" id="h-scroll">
    <!--div class="bg-watercolor"-->
      <img class="watercolor opositivo" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_OPositivo_fondo.png">
    <!--/div-->
      <img class="bottle" src="<?php bloginfo('template_url'); ?>/img/bottles/SF_OPositivo.png">
      <img class="seal" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-opositivo.svg">
  </section>
  <section class="info-content">
      <h1 class="name">O Positivo</h1>
      <p class="price">$350<span> MXN</span></p>
      <div class="shop">
        <div class="quant">
          <p>Cant.</p><input type="text" name="">
        </div>
        <div class="buy">
          <button>Añadir al carrito</button>
        </div>
      </div>
      <div class="content">
        <p>Nuestro Cabernet Sauvignon-Syrah es un vino que se presenta expresivo en nariz y en boca con mucha amplitud y expresión. Desde la primera impresión hasta el retrogusto mantiene un balance entre frescura, frutalidad, especias y cacao. Un vino robusto, intenso, con taninos presentes pero suaves y un final persistente que llena la boca.</p>
      </div>
       <div class="pairing">
        <p class="pairing-title">Maridaje</p>
        <img src="<?php bloginfo('template_url'); ?>/img/solar-steak.svg"><p class="pair">Carnes rojas</p>
        <img src="<?php bloginfo('template_url'); ?>/img/solar-prawn.svg"><p class="pair">Mariscos</p>
        <img src="<?php bloginfo('template_url'); ?>/img/solar-cheese.svg"><p class="pair">Quesos</p>
      </div>
  </section>
</section>
<?php get_footer(); ?>