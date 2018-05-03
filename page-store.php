<?php /* Template Name: Store */?>
<?php get_header();?>
<?php include 'ui-layout/aside-main.php';?>
<section class="main-container">
  <?php include 'ui-layout/top-bar.php';?>
  <section class="content">
    <h1 class="section-header">Vinos Solar Fortún</h1>
    <section class="category-block">
    <h1>Premium</h1>
      <div class="stain">
          <img src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Titulos_fondo.png">
      </div>
        <div class="catalogs" id="topTierCatalog"></div>
        <img class="ornament mint" data-jarallax-element="24" src="<?php bloginfo('template_url'); ?>/img/ornaments/mint.svg">
        <img class="ornament leaf-6" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf6.svg">
    </section>
    <section class="category-block">
      <h1>Mezclas</h1>
      <div class="stain">
          <img src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Titulos_fondo.png">
      </div>
        <div class="catalogs" id="mixturesCatalog"></div>
        <img class="ornament branch-4" src="<?php bloginfo('template_url'); ?>/img/ornaments/branch4.svg">
    </section>
    <section class="category-block">
      <h1>Vino Joven</h1>
      <div class="stain2">
          <img src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Titulos_fondo.png">
      </div>
      <div class="catalogs" id="youngWineCatalog"></div>
      <img class="ornament leaf-2" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf2.svg">
    </section>
    <section class="category-block">
      <h1><span>Mono~</span>varietales</h1>
      <div class="stain2">
          <img src="<?php bloginfo('template_url'); ?>/img/watercolors/_SolarFortun_Titulos_fondo.png">
      </div>
      <div class="catalogs" id="monovarietalsCatalog"></div>
      <img class="ornament peppermint" data-jarallax-element="24" src="<?php bloginfo('template_url'); ?>/img/ornaments/peppermint.svg">
      <img class="ornament leaf-7" data-jarallax-element="-69" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf7.svg">
    </section>
  </section>
  <section class="sidebar">
  </section>
</section>
<?php get_footer();?>