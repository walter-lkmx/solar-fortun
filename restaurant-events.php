<?php /* Template Name: Restaurant/Events */ ?>
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
        <section class="title">
          <h1><?php the_title() ?></h1> 
        </section>
        <div class="text">
          <p>Ven y disfruta de nuestro asador campestre a cargo de la chef Dulce López. Conoce nuestros maridajes y platillos ganadores a la sombra de nuestros encinos centenarios.</p>
<p>Menú específicamente diseñado con ingredientes de alta calidad de la región, para maridar con nuestros vinos en una experiencia guiada por nuestro enólogo y personal especializado.</p>
          <div class="menu">
            <a class="see-menu" href="/wp-content/uploads/2020/07/menu-reapertura-2020.pdf" target="_blank">Ver Menú</a>
            <p class="disclaimer">* Precios y disponibilidad de platillos sujetos a cambio sin previo aviso</p>
          </div>
          <section class="info-tec restaurant">
            <div class="info">
              <h3>Servicio los fines de semana</h3>
              <span>De 11am a 6pm</span>
            </div>
            <div class="info">
              <h3>Reservaciones</h3>
              <span>(646) 121-3891</span>
            </div>
          </section>
          <h3>Realiza el evento de tus sueños en nuestro viñedo</h3>
          <p>¿Quieres tener tu evento inolvidable en nuestras terrazas, rodeado de viñedos y árboles centenarios en una cañada completamente privada?</p><p>Comunícate con nosotros al correo <b>dana@solarfortun.com</b> y solicita tu cotización.</p>
          <p class="disclaimer">* Capacidad máxima para eventos: 200 personas.</p>
        </div>
      </div>
    </section>
  </section>
</section>
<?php get_footer(); ?>