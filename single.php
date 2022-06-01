<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <?php
  add_shortcode('woo_featured_products', 'woo_featured_products');
  /**
   * Create WooCommerce Image Loop of Featured Products
   * @link https://wordpress.stackexchange.com/questions/195425/display-featured-products-through-custom-loop-in-woocommerce-on-template-page
   */
  function woo_featured_products()
  {
    ob_start();

    $meta_query  = WC()->query->get_meta_query();
    $tax_query   = WC()->query->get_tax_query();

    $tax_query[] = array(
      'taxonomy' => 'product_visibility',
      'field'    => 'name',
      'terms'    => 'featured',
      'operator' => 'IN',
    );

    $args = array(
      'post_type'           => 'product',
      'post_status'         => 'publish',
      'ignore_sticky_posts' => 1,
      'posts_per_page'      => -1,
      // 'orderby'             => 'date',
      // 'order'               => 'ASC',
      'meta_query'          => $meta_query,
      'tax_query'           => $tax_query,
    );
    $loop = new WP_Query($args);
  ?>
    <ul class="the-products">
      <?php
      $loop_count = 0;
      while ($loop->have_posts()) : $loop->the_post();
        if ($loop_count == 4) break;
        $loop_count++;
        $price = get_post_meta($loop->post->ID, '_price', true);
        $watercolor = get_post_meta($loop->post->ID, 'watercolor', true);
      ?>


        <li class="featured">
          <a href="<?php echo get_permalink($loop->post->ID); ?>">
            <div class="featured-watercolor" style="
          background-image:url('<?php echo bloginfo('template_url') . "/" . $watercolor ?>');
          background-repeat: no-repeat;
          background-size: 120px;
          background-position: center;
          height:355px;
          ">

              <?php the_post_thumbnail('medium'); ?>

            </div>
            <h3 class="featured-title"><?php echo $loop->post->post_title; ?></h3>
            <h4 class="featured-price">$ <?php echo $price; ?></h4>
          </a>
        </li>

      <?php
      endwhile;
      ?>
    </ul>
  <?php

    wp_reset_query();

    return ob_get_clean();
  }
  ?>

  <section class="blog-single-post container-posts">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section class="single">
          <div class="featured-image blog-img">
            <?php the_post_thumbnail() ?>
          </div>
          <div class="content">
            <section class="title">
              <h1><?php the_title() ?></h1>
            </section>
            <!-- <h4><?php the_author() ?></h4> -->
            <div class="text">
              <?php the_content() ?>
              <style>
                @media (min-width: 20em) and (max-width: 57.5em) {
                  li.featured {
                    width: 100% !important;
                  }

                  li.featured>.featured-watercolor {
                    background-size: 40% !important;
                  }

                  .featured-products {
                    padding-left: 0 !important;
                  }

                  .mobile-br {
                    display: block !important;
                    line-height: 0;
                  }

                  .featured-products {
                    transform: scale(1) !important;
                  }

                  .home-card {
                    min-width: 100% !important;
                  }

                  .home-card:nth-child(2) {
                    margin-left: 0 !important;
                  }

                  .card-body {
                    height: auto !important;
                  }

                  .section-body {
                    height: auto !important;
                  }
                }

                /*Mobile*/


                a {
                  text-decoration: none;
                }

                ul.the-products {
                  width: 100%;
                  list-style: none;
                  margin: 0 !important;
                }

                /* one item */
                li:first-child:nth-last-child(1) {
                  /* -or- li:only-child { */
                  width: 100%;
                }

                /*more than 1 item */
                li.featured:first-child:nth-last-child(2),
                li.featured:first-child:nth-last-child(2)~li.featured,
                li.featured:first-child:nth-last-child(3),
                li.featured:first-child:nth-last-child(3)~li.featured,
                li.featured:first-child:nth-last-child(4),
                li.featured:first-child:nth-last-child(4)~li.featured {
                  width: 49%;
                  /* 49 due to padding */
                }

                li.featured {
                  display: inline-flex;
                  text-align: center;
                  justify-content: space-evenly;
                  transition: background 0.5s;
                  padding-top: 15px;

                }

                li.featured:hover {
                  background: rgba(253, 250, 247, 0.3) !important;
                }

                .featured-products {
                  transform: scale(0.9);
                }

                li.featured>.featured-price,
                a>h4.featured-price {
                  height: 19px;
                  margin-top: 10px;
                  font-family: 'Botera TFE';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 19px;
                  text-align: center;

                  /* tinto */

                  text-decoration: none;
                  color: #8C1835;
                  padding: 0 0 30px 0;
                }

                li.featured>.featured-watercolor>h3.featured-title,
                a>h3.featured-title {
                  font-family: 'Botera TFE';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 24px;
                  line-height: 29px;
                  text-align: center;
                  color: #232734;
                  text-decoration: none;
                  padding: 0 10px;
                }

                .section-body {
                  /* height: 900px; */
                }

                .titled-section {
                  margin-top: 50px;
                  width: 100%;
                  float: left !important;
                  position: relative;
                }

                .titled-section .title {
                  font-family: 'Botera TFE';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 30px;
                  line-height: 48px;
                  position: relative;
                  width: fit-content;
                }

                .titled-section .section-more a {
                  text-decoration: none;
                  display: inline-block;
                  position: absolute;
                  top: 0;
                  right: 0;
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: -1px;
                  /* identical to box height, or 100% */
                  text-align: right;
                  /* tinto */
                  color: #8C1835;
                }

                .titled-section>.title>a {
                  text-decoration: none;
                  color: #232734;
                }

                .mobile-br {
                  display: none;
                }

                .card-spacer {
                  width: 140px;
                  height: 0;
                  float: left;
                  border: 0.001px solid #d1a3ae66;
                  margin-top: 15px;
                }

                .card-title>.arrow-right>a {
                  text-decoration: none !important;
                  color: #8C1835 !important;
                }

                .home-card {
                  cursor: pointer;
                  float: left;
                  padding: 24px;
                  margin-top: 50px;
                  width: 100%;
                  position: relative;
                  display: flex;
                  background: #FDFAF7;
                  box-shadow: 0px 4px 6px -4px rgb(35 39 52 / 12%), 0px 8px 8px -4px rgb(35 39 52 / 8%);
                  transition: box-shadow 0.5s;
                  flex-direction: column;
                  flex-wrap: wrap;
                  align-content: stretch;
                  justify-content: start;
                  align-items: stretch;
                }

                .home-card:hover,
                li.featured-news:hover {
                  box-shadow: 0px 8px 28px -6px rgba(35, 39, 52, 0.12), 0px 18px 88px -4px rgba(35, 39, 52, 0.14);
                }

                .card-title {
                  /* h3 */
                  color: #8C1835;
                  font-family: 'Botera TFE';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 24px;
                  line-height: 29px;
                }

                .card-title .arrow-right {
                  float: right;
                  display: inline-block;
                  cursor: pointer;
                }

                .card-title h3 {
                  display: inline-block;
                }

                .card-picture {
                  height: 255px;
                  width: 90%;
                  background-repeat: no-repeat !important;
                  background-size: auto 100% !important;
                  position: absolute;
                  left: 5%;
                  bottom: 2.5%;
                }

                .home-card-image {
                  max-width: 100%;
                  object-fit: cover;
                }

                .card-body {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 16px;
                  line-height: 24px;
                  white-space: normal;
                  color: #232734;
                  margin-bottom: auto;
                  padding-bottom: 10px;
                }

                .card-image img {
                  width: 100%;
                  height: 100%;
                  object-fit: cover;
                  padding-top: 30px;
                }

                .home-card>.card-title>h3.hoverable-title {
                  width: 120px;
                  border-bottom: 0.001px solid #d1a3ae66;
                  padding-bottom: 10px;
                }
              </style>
              <section class="titled-section">
                <h1 class="title hoverable-title">
                  <a href="catalogo/">Vinos<span class="mobile-br"><br></span> Destacados</a>
                </h1>
                <span class="section-more"><a href="catalogo/">Ver catálogo</a> </span>
                <div class="section-body">
                  <div class="featured-products">
                    <?php echo do_shortcode("[woo_featured_products]");
                    ?>
                  </div>
                </div>
              </section>
              <section class="cards-container">

                <div class="home-card" onclick="location.href='catalogo/';">
                  <div class="card-title">
                    <h3 class="hoverable-title">Tienda</h3><span class="arrow-right"><img src="<?php bloginfo('template_url') ?>/img/ArrowRight.svg" /></span>
                  </div>
                  <div class="card-body">

                    <br>Compra nuestros vinos a domicilio, con env&iacute;os a todo M&eacute;xico
                  </div>
                  <img class="home-card-image" src="<?php bloginfo('template_url') ?>/img/homepage/tienda.png">
                </div>
                <div class="home-card" onclick="location.href='restaurante-eventos/';">
                  <div class="card-title">
                    <h3 class="hoverable-title">Dulce Vida</h3><span class="arrow-right"><img src="<?php bloginfo('template_url') ?>/img/ArrowRight.svg" /></span>
                  </div>
                  <div class="card-body"><br>Visita nuestro restaurante y disfruta de un asador campestre a cargo de la chef Dulce López. Conoce nuestros maridajes y platillos ganadores a la sombra de nuestros encinos centenarios.
                  </div>
                  <img class="home-card-image" src="<?php bloginfo('template_url') ?>/img/homepage/dulce-vida.png">
                </div>
                <section class="titled-section" style="height:200px;"></section>
              </section>
            </div>
            <section class="meta">
              <div class="date-category">
                <span><?php the_time('F j, Y') ?></span>
                <!-- <img src="<?php bloginfo('template_url'); ?>/img/archive.svg"> -->
                <?php the_category() ?>
              </div>
            </section>

          </div>

        </section>

      <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>

  </section>
</section>
<?php get_footer(); ?>