<?php /* Template Name: Single product */ ?>
<section id="leave-card" class="presentation-card">
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
    <section id="clone-container" class="image">
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
        <section class="metrics">
          <img class="ornament big-grape" src="<?php bloginfo('template_url'); ?>/img/ornaments/grapes2.svg">
          <img class="ornament leaf-8" data-jarallax-element="-69" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf8.svg">
          <img class="ornament leaf-5" data-jarallax-element="24" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf5.svg">
          <section id="intensity">
            <div class="img-container">
              <img src="<?php bloginfo('template_url'); ?>/img/glass.svg">
            </div>
            <div class="content">
              <h3>Intensidad: <span id="intensityValue"> </span>de 10</h3>
              <div class="bar">
                <div id="intensityBarLevel">
                </div>
              </div>
            </div>
          </section>
          <section id="type-grape">
            <h2>Notas de cata</h2>
          </section>
        </section>
        <section class="general-info">
          <div class="img-container">
            <img src="<?php bloginfo('template_url'); ?>/img/comment-line.svg">
          </div>
          <div class="content">
            <h2>Comentarios del enólogo</h2>
            <p id="oenologist-comments"></p>
          </div>
          <img class="ornament leaf-6" data-jarallax-element="-15" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf4.svg">
          <img class="ornament leaf-7" data-jarallax-element="70" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf2.svg">
        </section>
        <section class="general-info">
          <div class="img-container">
            <img class="kindaBigger" src="<?php bloginfo('template_url'); ?>/img/holding-glass.svg">
          </div>
          <div class="content">
            <h2>Sabores dominantes</h2>
            <p id="dominant-flavors"></p>
             <img class="ornament herbs" src="<?php bloginfo('template_url'); ?>/img/ornaments/herbs.svg">
          </div>
        </section>
        <section class="info-tec">
          <h2>[información·técnica]</h2>
          <p id="technical-info"></p>
        </section>
        <!-- <section class="general-info">
          <p id="description"></p>
        </section> -->
        <!-- <section class="general-info">
          <div class="img-container">
            <img src="<?php bloginfo('template_url'); ?>/img/comment-line.svg">
          </div>
          <div class="content">
            <h2>Comentarios del enólogo</h2>
            <p id="oenologist-comments"></p>
          </div>
        </section> -->
        <section class="general-info">
          <div class="img-container">
            <img src="<?php bloginfo('template_url'); ?>/img/pairing-line.svg">
          </div>
          <div class="content">
            <h2>Maridaje</h2>
            <p id="pairing"></p>
            <!-- <img class="ornament olive-branch" data-jarallax-element="-89" src="<?php bloginfo('template_url'); ?>/img/ornaments/olive-branch1.svg"> -->
            <img class="ornament baby-tomatoes" data-jarallax-element="55" src="<?php bloginfo('template_url'); ?>/img/ornaments/baby-tomatoes.svg">
            <img class="ornament crumbs2" src="<?php bloginfo('template_url'); ?>/img/ornaments/crumbs2.svg">
            <img class="ornament crumbs3" src="<?php bloginfo('template_url'); ?>/img/ornaments/crumbs3.svg">
            <img class="ornament lamb" src="<?php bloginfo('template_url'); ?>/img/ornaments/rib-eye.svg">
            <img class="ornament cheese-slice" data-jarallax-element="-89" src="<?php bloginfo('template_url'); ?>/img/ornaments/cheese.svg">
            <img class="ornament mushrooms-sliced" data-jarallax-element="-55" src="<?php bloginfo('template_url'); ?>/img/ornaments/mushrooms.svg">
          </div>
        </section>
      </section>
    </section>
  </section>
</section>
<?php get_footer(); ?>