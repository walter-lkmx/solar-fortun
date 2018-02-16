<?php /* Template Name: Viña Rosa */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="wine-content" id="h-scroll">
    <!--div class="bg-watercolor"-->
      <img class="watercolor vinarosa" src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_EnRosa_fondo.png">
    <!--/div-->
      <img class="bottle slim" src="<?php bloginfo('template_url'); ?>/img/bottles/SF_VinaRosa.png">
      <img class="seal" src="<?php bloginfo('template_url'); ?>/img/seals/_seal-vinarosa.svg">
  </section>
  <section class="info-content">
      <h1 class="name">La Viña en Rosa</h1>
      <p class="price">$220<span> MXN</span></p>
      <div class="shop">
        <div class="quant">
          <p>Cant.</p><input type="text" name="">
        </div>
        <div class="buy">
          <button>Añadir al carrito</button>
        </div>
      </div>
      <p class="text">La Viña en Rosa, mezcla de elegancia y frescura, es un vino rosado elaborado 100% con uva Mourvedre. Un vino rosado hecho con toda la seriedad y compromiso de calidad de las líneas Premium de Solar Fortún que rompe esquemas con su perfil seco, frutal y altamente aromático que viene a enaltecer el concepto de vino rosado. De buena acidez, estructura en boca y gran permanencia.<br>La Viña en Rosa es un vino cordial, amable y expresivo.</p>
  </section>
</section>
<?php get_footer(); ?>