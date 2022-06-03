<?php /* Template Name: Single product */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<?php
$bottle = get_post_custom_values($key = 'bottle');
$watercolor = get_post_custom_values($key = 'watercolor');
$dominant_notes = get_post_custom_values($key = 'dominant_notes');
$enologist_comments = get_post_custom_values($key = 'enologist_comments');
$data_sheet = get_post_custom_values($key = 'data_sheet');
$intensity = get_post_custom_values($key = 'intensity');
$seal = get_post_custom_values($key = 'seal');
$technical_info = get_post_custom_values($key = 'technical_info');
$varietal = get_post_custom_values($key = 'varietal');
$current_product = $product->id;
?>
<!-- 
  <h1 class="presentation-title"></h1>
 -->

<section class="single-product">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="content">
    <section class="image">
      <img src="<?php bloginfo('template_url'); ?>/<?php echo $seal[0]; ?>" id="featSeal">
      <img src="<?php the_post_thumbnail() ?>" id="featImage">
      <img src="<?php bloginfo('template_url'); ?>/<?php echo $watercolor[0]; ?>" id="featStain">
    </section>
    <section id="v-scroll" class="product-details">

      <section class="title-price">
        <span id="product-id"><?php echo get_the_ID(); ?></span>
        <h1 id="product-name"><?php the_title(); ?></h1>
        <p id="price"><?php echo $product->get_price_html(); ?></p>
      </section>
      <section class="add-cart">
        <span class="qty">Cant.</span>
        <input id="product-quantity" min="1" type="number" name="quantity" placeholder="1" onchange="if(this.value < 1) this.value =1;">
        <a id="add-cart-custom"><span>Agregar al carrito</span> <img src="<?php bloginfo('template_url'); ?>/img/cart-white.svg"></a>
      </section>
      <?php
      add_action('woocommerce_before_main_content', 'bbloomer_single_product_pages');

      function bbloomer_single_product_pages()
      {

        if (is_product_category('restaurante')) {
          echo '<p>Hola</p>';
          console . log();
        } else {
          echo 'Something else';
        }
      }
      ?>
      <section class="product-specs">
        <section class="metrics">
          <img class="ornament big-grape" src="<?php bloginfo('template_url'); ?>/img/ornaments/grapes2.svg">
          <img class="ornament leaf-8" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf8.svg">
          <img class="ornament leaf-5" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf5.svg">
          <section id="intensity">
            <div class="img-container">
              <img src="<?php bloginfo('template_url'); ?>/img/glass.svg">
            </div>
            <div class="content">
              <h3>Intensidad: <span id="intensityValue"><?php echo $intensity[0]; ?> </span>de 10</h3>
              <div class="bar">
                <div id="intensityBarLevel">
                </div>
              </div>
            </div>
          </section>
          <section id="type-grape">
            <h2>Varietal</h2>
            <p id="varietal"><?php echo $varietal[0]; ?></p>
          </section>
        </section>
        <section class="info-tec">
          <h2>[información·técnica]</h2>
          <p id="technical-info"><?php echo $technical_info[0]; ?></p>
        </section>
        <section class="general-info">
          <div class="img-container">
            <img class="kindaBigger" src="<?php bloginfo('template_url'); ?>/img/holding-glass.svg">
          </div>
          <div class="content">
            <h2>Notas dominantes</h2>
            <p id="dominant-notes"><?php echo $dominant_notes[0]; ?></p>
            <img class="ornament herbs" src="<?php bloginfo('template_url'); ?>/img/ornaments/herbs.svg">
          </div>
        </section>
        <section class="general-info">
          <div class="img-container">
            <img src="<?php bloginfo('template_url'); ?>/img/comment-line.svg">
          </div>

          <div class="content">
            <h2>Comentarios del enólogo</h2>
            <p id="oenologist-comments"><?php the_content() ?></p>
          </div>
          <img class="ornament leaf-6" data-jarallax-element="-15" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf4.svg">
          <img class="ornament leaf-7" data-jarallax-element="70" src="<?php bloginfo('template_url'); ?>/img/ornaments/leaf2.svg">
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
        <!-- <section class="general-info">
          <div class="img-container">
            <img src="<?php bloginfo('template_url'); ?>/img/pairing-line.svg">
          </div>
          <div class="content">
            <h2>Maridaje</h2>
            <p id="pairing"></p>
            <img class="ornament baby-tomatoes" data-jarallax-element="55" src="<?php bloginfo('template_url'); ?>/img/ornaments/baby-tomatoes.svg">
            <img class="ornament crumbs2" src="<?php bloginfo('template_url'); ?>/img/ornaments/crumbs2.svg">
            <img class="ornament crumbs3" src="<?php bloginfo('template_url'); ?>/img/ornaments/crumbs3.svg">
            <img class="ornament lamb" src="<?php bloginfo('template_url'); ?>/img/ornaments/rib-eye.svg">
            <img class="ornament cheese-slice" data-jarallax-element="-89" src="<?php bloginfo('template_url'); ?>/img/ornaments/cheese.svg">
            <img class="ornament mushrooms-sliced" data-jarallax-element="-55" src="<?php bloginfo('template_url'); ?>/img/ornaments/mushrooms.svg">
          </div>
        </section> -->
      </section>
    </section>
  </section>
</section>
<?php get_footer(); ?>