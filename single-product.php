<?php /* Template Name: Single product */ ?>
<section class="presentation-card">
  <p>
    <?php 
      $path = $_SERVER['REQUEST_URI'];
      $tokens = explode('/', $path);
      // echo $path;
      $pathResult = $tokens[sizeof($tokens)-2];
    ?>
  </p>
  <?php include('ui-layout/presentation-cards/' . $pathResult .'.php'); ?>
</section>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<!-- 
  <h1 class="presentation-title"></h1>
 -->
<section class="single-product">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="content">
    <section class="image">
      <img src="<?php bloginfo('template_url'); ?>/" id="featSeal">
      <img src="<?php bloginfo('template_url'); ?>/" id="featImage">
      <img src="<?php bloginfo('template_url'); ?>/" id="featStain">
    </section>
    <section id="v-scroll" class="product-details">
      <section class="title-price">
        <h1 id="product-name"></h1>
        <p id="price"></p>
      </section>
      <section class="add-cart">
        <span class="qty">Cant.</span>
        <input id="product-quantity" min="1" type="number" name="quantity" placeholder="1">
        <a id="add-cart-custom"><span>Agregar al carrito</span> <img src="<?php bloginfo('template_url'); ?>/img/cart-white.svg"></a>
      </section>
      <section class="product-specs">
        <section class="general-info">
          <div class="img-container">
            <img src="<?php bloginfo('template_url'); ?>/img/badge-info2.svg">
          </div>
          <div class="content">
            <h2>Notas de cata</h2>
            <p id="tasting-notes"></p>
          </div>
        </section>
        <section class="info-tec">
          <h2>[información·técnica]</h2>
          <p id="technical-info"></p>
        </section>
        <!-- <section class="general-info">
          <p id="description"></p>
        </section> -->
        <section class="general-info">
          <div class="img-container">
            <img src="<?php bloginfo('template_url'); ?>/img/badge-enologist2.svg">
          </div>
          <div class="content">
            <h2>Comentarios del enólogo</h2>
            <p id="oenologist-comments"></p>
          </div>
        </section>
        <section class="general-info">
          <div class="img-container">
            <img src="<?php bloginfo('template_url'); ?>/img/badge-pairing2.svg">
          </div>
          <div class="content">
            <h2>Maridaje</h2>
            <p id="pairing"></p>
          </div>
        </section>
      </section>
    </section>
  </section>
</section>
<?php get_footer(); ?>