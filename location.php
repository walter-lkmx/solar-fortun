<?php /* Template Name: Location */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="content" id="v-scroll">
    <section class="single">
      <div class="featured-image">
        <?php the_post_thumbnail() ?>
      </div>
      <div class="content"> 
        <section class="title">
          <h1><?php the_title() ?></h1> 
        </section>
        <div class="text">
          <h3>Viñedo</h3>
          <p>Cañada de Guadalupe en el poblado de Fracisco Zarco.</p>

          <h3>Vinícola</h3>
          <p>Actualmente vinificamos en Vinícola Tierra Santa, donde compartimos espacios de forma temporal. Próximamente abriremos nuevas instalaciones en el Sauzal de Rodríguez, frente al mar.</p>

          <h3>Dirección Fiscal</h3>
          <p>Vinícola Solar Fortún S de RL de CV ,Colinas de  Montemar 342, Colinas del Mar.<br>Ensenada, Baja California 22760.</p>
        </div>
      </div>
    </section>
  </section>
</section>
<?php get_footer(); ?>