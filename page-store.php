<?php /* Template Name: Store */?>
<?php get_header();?>
<?php include 'ui-layout/aside-main.php';?>
<section class="main-container">
  <?php include 'ui-layout/top-bar.php';?>
  <section class="content">
    <h1 class="section-header">Vinos Solar Fortún</h1>
    <section class="category-block">
    <h1>Premium</h1>
        <div class="catalogs" id="topTierCatalog"></div>
        <img class="ornament leaf-6" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf6.svg">
        <img class="ornament branch-1" src="<?php bloginfo('template_url'); ?>/img/ornaments/branch1.svg">
    </section>
    <section class="category-block">
      <h1>Mezclas</h1>
        <div class="catalogs" id="mixturesCatalog"></div>
        <img class="ornament branch-4" src="<?php bloginfo('template_url'); ?>/img/ornaments/branch4.svg">
        <img class="ornament branch-2" src="<?php bloginfo('template_url'); ?>/img/ornaments/branch2.svg">
    </section>
    <section class="category-block">
      <h1 class="monovarietals">Mono<span>~</span><span class="second-part">varietales</span></h1>
      <div class="catalogs" id="monovarietalsCatalog"></div>
      <img class="ornament leaf-7" data-jarallax-element="-69" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf7.svg">
      <img class="ornament olive-branch4" src="<?php bloginfo('template_url'); ?>/img/ornaments/olive-branch4.svg">
    </section>
    <section class="category-block">
      <h1 class="monovarietals">Restaurante</h1>
      <div class="catalogs" id="restaurantsCatalog"></div>
      <img class="ornament leaf-7" data-jarallax-element="-69" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf7.svg">
      <img class="ornament olive-branch4" src="<?php bloginfo('template_url'); ?>/img/ornaments/olive-branch4.svg">
    </section>
  </section>
  <section class="sidebar">
  </section>
</section>
<?php get_footer();?>