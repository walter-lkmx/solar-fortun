<?php /* Template Name: Home */?>
<?php get_header();?>
<?php include 'ui-layout/aside-main.php';?>
<section class="main-container">
  <?php include 'ui-layout/top-bar.php';?>
  <section class="content">
    <h1 class="section-header">Vinos Solar Fortún</h1>
    <section class="category-block">
      <h1>Premium</h1>
        <div class="catalogs" id="topTierCatalog"></div>
    </section>
    <section class="category-block">
      <h1>Mezclas</h1>
        <div class="catalogs" id="mixturesCatalog"></div>
    </section>
    <section class="category-block">
      <h1>Vino Joven</h1>
      <div class="catalogs" id="youngWineCatalog"></div>
    </section>
    <section class="category-block">
      <h1><span>Mono~</span>varietales</h1>
      <div class="catalogs" id="monovarietalsCatalog"></div>
    </section>
  </section>
</section>
<?php get_footer();?>