<?php /* Template Name: Founder */ ?>
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
          <h3>Dr. José Alberto López</h3>
          <p>Nuestra vinícola presenta orgullosamente a nuestro fundador, Alberto López, físico y astrónomo de profesión pero siempre un amante de corazón de los buenos vinos. Alberto comenzó a hacer vino hace más de treinta años, sin embargo fue hasta el 2007 que se decidió a generar su propio proyecto denominado Vinícola Solar Fortún, un proyecto donde él pudiera poner toda la atención al detalle, en cada paso del proceso de producción. Y así nació el sueño.</p>
        </div>
      </div>
    </section>
  </section>
</section>
<?php get_footer(); ?>