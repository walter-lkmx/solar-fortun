<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="page-template" id="v-scroll">
    <section class="single">
      <div class="featured-image">
        <?php the_post_thumbnail() ?>
      </div>
      <div class="content">
        <div class="breadcrumbs">
          <span class="selected">Nosotros</span>
          <span> · </span>
          <a href="/fundador" title="">
            <span>Fundador</span>
          </a>
          <span> · </span>
          <a href="/enologo" title="">
            <span>Enólogo</span>
          </a>
        </div>
        <section class="title">
          <h1>Nosotros</h1> 
        </section>
        <div class="text">
          <p>El proyecto de vinícola familiar es iniciado por José Alberto López, en el año 2007, al plantar sus primeras parras en la cañada de Guadalupe, en el poblado de Francisco Zarco. Las primeras uvas serían cosechadas en el año 2010.</p>
          <p>En el año 2012 se integra al proyecto su hijo Santiago López, quien a partir de ese momento se desempeña como enólogo de la vinícola, luego de obtener un diplomado en Vitivinicultura de la Universidad de California, en Davis. Los premios comienzan a llegar, al obtener dos de sus primeros vinos, sendas medallas. De esta forma se reafirma el concepto de vinos de Calidad Premium que buscamos lograr en Solar Fortún.</p>
          <p>La base del proyecto consiste en buscar la máxima calidad en cada una de las etapas de la producción del vino, comenzando con la calidad de las uvas. El 100% de las parras de Solar Fortún provienen del vivero francés Mercier, que se encuentra en el Valle de Napa, en el corazón de la zona vinícola de California. Los patrones, cepas y clones de las plantas fueron seleccionados de forma especial para su microclima, esto es, tomando en consideración las características del subsuelo y el clima de la cañada.</p>
          <p>Adicionalmente, la cañada cuenta con agua de excelente calidad, con muy bajas cantidades de sales minerales, y existe un gran esmero en brindar un cuidado preciso al viñedo, en todas sus etapas de desarrollo. Esto garantiza la mejor calidad en el fruto que se procesa año con año.</p>
          <h3>Compromisos y valores</h3>
          <ul>
            <li><b>Integridad:</b> Nos esmeramos en hacer lo correcto en todo momento: con nuestras vides, en la elaboración de nuestros vinos, con nuestros clientes y proveedores.</li>
            <li><b>Honestidad:</b> Cualidad que tomamos en serio como fundamento de la operación y servicios de nuestra empresa.</li>
            <li><b>Responsabilidad:</b> Es un valor que entendemos como una obligación en nuestra actividad como empresa y como individuos, cumpliendo con la sociedad y el medio ambiente.</li>
            <li><b>Solidaridad:</b> Como empresa somos un grupo solidario que se apoya mutuamente, le da su lugar al individuo y contribuye con la sociedad.</li>
          </ul>
        </div>
      </div>
    </section>
  </section>
</section>
<?php get_footer(); ?>