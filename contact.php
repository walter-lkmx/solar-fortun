<?php /* Template Name: Contact */ ?>
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
          <h3>Oficina</h3>
          <p>Lunes a viernes: 10 am - 2 pm<br>
          (646) 174-7674</p>

          <h3>Enólogo</h3>
          <p>Santiago López Viana<br>
          (646) 116-7235<br>
          santiago@solarfortun.com</p>

          <h3>Fundador</h3>
          <p>Alberto López<br>
          (646) 179-4810<br>
          alberto@solarfortun.com</p>
        </div>
      </div>
    </section>
  </section>
</section>
<?php get_footer(); ?>