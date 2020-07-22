<?php /* Template Name: Oenologist */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="page-template" id="v-scroll">
    <section class="single">
      <div class="featured-image oenologist-img">
        <?php the_post_thumbnail() ?>
      </div>
      <div class="content">
        <div class="breadcrumbs">
          <a href="/nosotros" title="">
            <span>Nosotros</span>
          </a>
          <span> · </span>
          <a href="/fundador" title="">
            <span>Fundador</span>
          </a>
          <span> · </span>
          <span class="selected">Enólogo</span>
        </div>
        <section class="title">
          <h1><?php the_title() ?></h1> 
        </section>
        <div class="text">
          <h3>Ing. Santiago López Viana</h3>
          <p>El enólogo de la vinícola fue por muchos años atleta de alto rendimiento, asistió a 5 Campeonatos Mundiales de Gimnasia Artística y fue medallista centroamericano, panamericano y mundial, además de obtener múltiples reconocimientos a lo largo de su vida deportiva. Estudió ingeniería en la universidad de Penn State, en los Estados Unidos y posteriormente se preparó como enólogo mediante un diplomado en la Universidad de California-Davis, una de las mejores universidades del mundo en el tema del vino. En la producción de los vinos aplica sus conocimientos enológicos con la disciplina, tenacidad, paciencia y perseverancia que aprendió como gimnasta y el razonamiento lógico de su formación de ingeniero. Su amor por hacer vinos es solamente igualada por su pasión a la hora de hablar de ellos.</p>
        </div>
      </div>
    </section>
  </section>
</section>
<?php get_footer(); ?>