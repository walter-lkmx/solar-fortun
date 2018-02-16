<?php /* Template Name: Confabulario */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="wine-content" id="h-scroll">
    <!--div class="bg-watercolor"-->
      <img class="watercolor confabulario" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Confabulario_fondo.png">
    <!--/div-->
      <img class="bottle" src="<?php bloginfo('template_url'); ?>/img/bottles/SF_Confabulario.png">
      <img class="seal" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-confabulario.svg">
  </section>
  <section class="info-content">
      <h1 class="name">Confabulario</h1>
      <p class="price">$295<span> MXN</span></p>
      <div class="shop">
        <div class="quant">
          <p>Cant.</p><input type="text" name="">
        </div>
        <div class="buy">
          <button>Añadir al carrito</button>
        </div>
      </div>
      <div class="content">
      <p>Confabulario es nuestra nueva propuesta para el mercado de Vino Mexicano. Un vino fresco, lleno de vitalidad y alegría que expresa en todas sus etapas una complejidad e intensidad sumamente agradables.</p><p>Su frutalidad combinada con sus notas de tabaco, crean un final muy largo, así como un retrogusto fresco y agradable que te mantendrán queriendo más vino. de cuerpo medio y taninos suaves, COnfabulario es un vino de alta calidad que cualquier persona nueva al vino tinto puede disfrutar.</p>
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