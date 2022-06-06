<?php /* Template Name: New-Home-SF */ ?>
<?php get_header(); ?>

<?php
add_shortcode('show_instagram_posts', 'show_instagram_posts');

function show_instagram_posts()
{
  ob_start();
  $args = array(
    'name'        => 'instagram-posts',
    'post_type'   => 'page',
    'post_status' => 'publish',
    'numberposts' => 1
  );
  $posts = get_posts($args);
  $post = $posts[0];
?>
  <ul class="instagram_posts">
    <?php

    $ig1 = get_post_meta($post->ID, 'ig_post_1', true);
    $ig2 = get_post_meta($post->ID, 'ig_post_2', true);
    $ig3 = get_post_meta($post->ID, 'ig_post_3', true);
    $ig4 = get_post_meta($post->ID, 'ig_post_4', true);
    echo "<li class='ig-post'>" . $ig1 . "</li>";
    echo "<li class='ig-post'>" . $ig3 . "</li>";
    echo "<li class='ig-post'>" . $ig2 . "</li>";
    echo "<li class='ig-post'>" . $ig4 . "</li>";
    ?>
  </ul>
<?php
  //break;
  //endwhile;
  wp_reset_query();
  return ob_get_clean();
}


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
          background-size: 140px;
          background-position: center;
          height:355px;
          ">

            <?php the_post_thumbnail('medium'); ?>

          </div>
          <h3 class="featured-title"><?php echo $loop->post->post_title; ?></h3><br>
          <h3 class="featured-price">$ <?php echo $price; ?></h3>
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

function wpb_postsbycategory()
{
  // the query
  $the_query = new WP_Query(array(
    // 'category_name' => ['uncategorized','noticia'],
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'order_by' => 'ID',
    'order' => 'DESC'
  ));

  // The Loop
  if ($the_query->have_posts()) {
    $string .= '<ul class="postsbycategory widget_recent_entries">';
    while ($the_query->have_posts()) {
      $the_query->the_post();
      if (has_post_thumbnail()) {
        $string .= '<li class="featured-news"><a href="' . get_the_permalink() . '" rel="bookmark">';
        $string .= get_the_post_thumbnail($post_id);
        // $string .= the_post_thumbnail('medium');
        $string .= '<div class="news-title-container">' . get_the_title() . '</div>';

        $content = get_the_content();
        $content = str_replace(['<!-- wp:paragraph -->', '<!-- /wp:paragraph -->'], '', $content);
        $content = wp_strip_all_tags($content);
        $content = trim(substr($content, 0, 80));


        $string .= '<div class="news-content-container"><p>' . $content . '...</p></div>'; #Post content
        $string .= '</a></li>';
      } else {
        // if no featured image is found
        $string .= '<li><a href="' . get_the_permalink() . '" rel="bookmark">' . get_the_title() . '</a></li>';
      }
    }
  } else {
    // no posts found
    $string .= '<li>No Posts Found</li>';
  }
  $string .= '</ul>';

  return $string;

  /* Restore original Post Data */
  wp_reset_postdata();
}
// Add a shortcode
add_shortcode('categoryposts', 'wpb_postsbycategory');

?>

<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="content">
    <style>
      body {
        white-space: normal !important;
      }

      section.main-container section.content {
        max-width: 1207px !important;
        min-width: 360px !important;
        display: block;
        margin: 0 auto;
      }

      .section-more>a:hover {
        transform: translateY(-2px);
      }

      .hoverable-title {
        white-space: normal;
      }

      .section-title:hover,
      .hoverable-title>a:hover {
        color: #8C1835 !important;
      }

      .wonderpluginslider-container,
      .cards-container {
        width: calc(100% - 200px) !important;
        float: left !important;
      }

      .amazingslider-arrow-right-1,
      .amazingslider-arrow-left-1 {
        display: block !important;
      }



      @media only screen and (min-width:1492) {

        .home-card {
          width: 100% !important;
        }
      }

      @media only screen and (max-width:1369px) {

        ul.postsbycategory {
          flex-direction: column;
        }

        li.featured-news {
          width: 100% !important;
        }

        li.featured-news img {
          float: none !important;
          width: 100% !important;
        }

        .right-side,
        .left-side {
          max-width: 100% !important;
          width: 100% !important;
        }

        .right-side {
          padding-left: 0 !important;
          padding-top: 0 !important;
        }




        .upper-card {
          display: none;
        }

        li.featured {
          display: block !important;
          width: 100% !important;
          text-align: center;
          margin-top: 20px;
        }

        li.featured>.featured-watercolor {
          background-size: 20% !important;
        }

        .featured-products {
          padding-left: 0 !important;
        }


      }

      @media screen and (max-width: 1224px) {



        .dulce-vida {
          display: block !important;
        }
      }

      /*New our family cards*/
      @media only screen and (max-width:1182px) {

        .our-family-container {
          flex-direction: column;

        }

        .card-caption {
          max-height: 93%;
        }

      }

      @media only screen and (min-width:1024px) {
        aside.main-menu {
          transform: none !important;
        }

        li.ig-post>iframe {
          min-width: 25% !important;
        }
      }

      @media only screen and (max-width:1024px) {

        .home-card {
          width: 100% !important;
        }

        .cards-container {
          padding: 0 16px;
          flex-direction: column;
        }

        .card-body {
          height: auto !important;
        }

        .upper-card {
          display: none;
        }

        .wonderpluginslider-container,
        .cards-container,
        .home-card,
        .titled-section {
          /* padding-right: 0; */
          min-width: 100% !important;
        }

        .titled-section {
          padding: 20px;
        }



        .titled-section .title {
          font-size: 32px !important;
        }

        .cards-container {
          padding: 0 16px;
          flex-direction: column;
        }

        li.featured {
          display: block !important;
          width: 100% !important;
          text-align: center;
          margin-top: 20px;
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

        li.featured-news {
          width: 100% !important;
        }

        li.featured-news img {
          float: none !important;
          width: 100% !important;
        }

        .titled-section .section-more a {
          padding-top: 30px;
          padding-right: 15px;
        }

      }

      @media only screen and (max-width:921px) {

        .wonderpluginslider-container,
        .cards-container,
        .home-card,
        .titled-section {
          /* padding-right: 0; */
          min-width: 100% !important;
        }

        .titled-section {
          padding: 20px;
        }



        .titled-section .title {
          font-size: 32px !important;
        }

        .cards-container {
          padding: 0 16px;
          flex-direction: column;
        }

        li.featured {
          display: block !important;
          width: 100% !important;
          text-align: center;
          margin-top: 20px;
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

        li.featured-news {
          width: 100% !important;
        }

        li.featured-news img {
          float: none !important;
          width: 100% !important;
        }

        .titled-section .section-more a {
          padding-top: 30px;
          padding-right: 15px;
        }
      }

      /*921px max-width*/

      .upper-card {
        height: 40%;
      }

      .card-image img {
        object-fit: cover;
        padding-top: 30px;
        margin-top: auto;
        width: 100%;
      }

      .home-card>.card-title>h3.hoverable-title {
        width: 120px;
        border-bottom: 0.001px solid #d1a3ae66;
        padding-bottom: 10px;
      }

      .titled-section>.title>a {
        text-decoration: none;
        color: #232734;
      }

      li.ig-post>iframe {
        min-width: 25%;
      }

      @media only screen and(max-width:375px) {
        .mobile-br {
          display: block !important;
          line-height: 0;
        }
      }
    </style>
    <?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>

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
      <div class="home-card" onclick="location.href='vinicola/';">
        <div class="card-title">
          <h3 class="hoverable-title">Vinícola</h3><span class="arrow-right"><img src="<?php bloginfo('template_url') ?>/img/ArrowRight.svg" /></span>
        </div>
        <div class="card-body"><br>Solar Fortún es una vinícola familiar mexicana ubicada en Francisco Zarco, Valle de Guadalupe. El proyecto nace en 2007 con el viñedo y a partir del 2012 iniciamos con la distribución de nuestros vinos.
        </div>
        <img class="home-card-image" src="<?php bloginfo('template_url') ?>/img/homepage/vinicola.png">

      </div>
    </section>


    <style>
      .our-family-card-new {
        height: 100%;
        display: flex;
      }

      .our-family-card-new img {
        width: 100%;
        visibility: hidden;
        position: relative;
      }

      .our-family-container {
        display: inline-flex;
        width: 100%;
        align-content: flex-start;
        align-items: flex-start;
        justify-content: space-evenly;
        gap: 32px;
        margin-top: 20px;
      }

      .card-caption {
        font-family: 'Botera TFE';
        font-style: normal;
        font-weight: 400;
        font-size: 40px;
        line-height: 48px;
        color: white;
        border: 1px solid white;
        margin: 15px;
        flex-grow: 0;
        position: absolute;
        display: flex;
        flex-direction: column;
        align-self: flex-end;
      }

      .card-caption-text {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 100;
        font-size: 16px;
        line-height: 28px;
        white-space: normal;
        padding: 15px;
      }

      .our-family-card-new .card-caption>h2 {
        padding: 5px 15px;
      }
    </style>
    <section class="titled-section">
      <h1 class="title hoverable-title">
        <a href="nosotros/">Nuestra Familia</a>
      </h1>
      <span class="section-more"><a href="nosotros/">Ver más</a> </span>
      <div class="section-body" style="max-width:100%;">
        <div class="our-family-container">
          <div class="our-family-card-new founder">
            <img src="<?php bloginfo('template_url') ?>/img/homepage/fundador.png">
            <div class="card-caption">
              <h2>Fundador</h2>
              <div class="card-caption-text">
                <b>Dr. José Alberto López</b><br>
                Nuestra vinícola presenta orgullosamente a nuestro fundador, Alberto López, físico y astrónomo de profesión pero siempre un amante de corazón de los buenos vinos.
                Inició el proyecto al plantar sus primeras parras en la cañada de Guadalupe, en el poblado de Francisco Zarco. Las primeras uvas serían cosechadas en el año 2010.
              </div>
            </div>
          </div>
          <div class="our-family-card-new enologist">
            <img src="<?php bloginfo('template_url') ?>/img/homepage/fundador.png">
            <div class="card-caption">
              <h2>Enólogo</h2>
              <div class="card-caption-text">
                <b>Ing. Santiago López Viana</b><br>
                El enólogo de la vinícola fue por muchos años atleta de alto rendimiento.
                Estudió ingeniería en la universidad de Penn State, en los Estados Unidos y posteriormente se preparó como enólogo mediante un diplomado en la Universidad de California-Davis, una de las mejores universidades del mundo en el tema del vino.
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <style>
      li.new-featured-prods {
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }

      ul.instagram_posts {
        width: 100%;
        list-style: none;
        padding-top: 20px;
        overflow-x: auto;
        gap: 10px;
        display: flex;
        justify-content: space-between;
      }

      li.ig-post {
        display: inline-flex;
      }


      ul.postsbycategory {
        width: 100%;
        list-style: none;
        padding-top: 20px;
        display: flex;
        gap: 16px;
      }

      ul.postsbycategory>.featured-news {
        float: left;
      }

      li.featured-news {
        display: inline-block;
        width: 48%;
        text-align: center;
        box-shadow: 0px 4px 6px -4px rgba(35, 39, 52, 0.12), 0px 8px 8px -4px rgba(35, 39, 52, 0.08);
        transition: box-shadow 0.5s;
        background-color: #FDFAF7;
        white-space: normal !important;
        text-align: left !important;
      }

      .attachment-post-thumbnail {
        top: 0 !important;
        position: unset !important;
      }

      li.featured-news img {
        float: left;
        height: 236px;
        width: 160px;
        margin-right: 10px;
        object-fit: cover;
      }

      li.featured-news a {
        text-decoration: none;
        font-family: 'Botera TFE';
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 29px;
        color: #232734;
      }

      li.featured-news>a>div.news-title-container {
        padding: 10px;
      }

      /* li>a>.featured-news>div.news-content-container>p { */
      li>a>div.news-content-container>p {
        padding: 10px;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;

        /* gris */

        color: #7680A3;
      }

      .featured-products {
        padding-left: 30px;
      }

      ul.the-products {
        width: 100%;
        list-style: none !important;
        padding-top: 20px;
      }

      /* one item */
      li:first-child:nth-last-child(1) {
        /* -or- li:only-child { */
        width: 100%;
      }

      /* two items */
      li.featured:first-child:nth-last-child(2),
      li.featured:first-child:nth-last-child(2)~li.featured {
        width: 50%;
      }

      /* three items */
      li.featured:first-child:nth-last-child(3),
      li.featured:first-child:nth-last-child(3)~li.featured {
        width: 33.3333%;
      }

      /* four items */
      li.featured:first-child:nth-last-child(4),
      li.featured:first-child:nth-last-child(4)~li.featured {
        width: 25%;
      }

      li.featured {
        display: inline-block;
        text-align: center;
        transition: background 0.5s;
        padding-top: 15px;
      }

      li.featured:hover {
        background: rgba(253, 250, 247, 0.3) !important;
      }

      li.featured>.featured-price,
      a>h3.featured-price {
        height: 19px;
        margin-top: 10px;
        /* h4 */
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
        /* margin-top: 30px; */
        height: 29px;

        /* h3 */

        font-family: 'Botera TFE';
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 29px;
        /* identical to box height */

        text-align: center;

        /* negro */

        color: #232734;

        text-decoration: none;
      }

      .mobile-br {
        display: none;
      }

      .left-side,
      .right-side {
        max-width: 50%;
      }

      .left-side {
        float: left;
        display: flex;
        position: relative;
      }

      .right-side {
        float: right;
        display: flex;
        padding-top: 30px;
        padding-left: 32px;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: flex-start;
        justify-content: flex-start;
        align-items: flex-start;
      }

      .right-side h1 a {
        color: #232734;
      }

      .right-side>.our-restaurant {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;

        /* negro */
        color: #232734;
        overflow-wrap: break-word;
        max-width: 100%;
        padding: 12px 0 12px 0;
        white-space: normal !important;
      }

      .dulce-vida>.section-body>div>.our-restaurant {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;

        /* negro */
        color: #232734;
        overflow-wrap: break-word;
        max-width: 100%;
        padding: 10px 0px;
        white-space: normal !important;
      }

      .greyed-out {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 24px;
        /* identical to box height */


        /* gris */

        color: #7680A3;
      }

      .dulce-vida {
        display: none;
      }

      .reservation-button>a {
        padding: 1rem 1.3125rem;
        border: 0;
        transition: .1s ease;
        display: inline-block;
        width: 100%;
        vertical-align: middle;
        color: #eeeff1;
        background: #232734;
        outline: 1px solid white;
        outline-offset: -0.5rem;
        font-size: 0.9375rem;
        text-shadow: none;
        text-decoration: none;
        text-align: center;
      }

      .coming-soon {
        display: flex;
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
    <section class="titled-section ">
      <div class="section-body">
        <div class="right-side">
          <div>
            <h4 class="greyed-out">Próximamente</h4>
          </div>
          <div>
            <h2 class="hoverable-title title" style="white-space: normal ;">Wine Bar frente al mar</h2>
          </div>
          <div class="our-restaurant">
            <p>A partir de la primavera de 2023 tendremos nuestro Wine Bar frente al mar en nuestra bodega de producción en el área del Sauzal, a la entrada de Ensenada.</p>
          </div>
        </div>
        <div class="left-side">
          <img src="<?php bloginfo('template_url'); ?>/img/homepage/wine-bar.jpg" style="width: 100%;">
        </div>

      </div>
    </section>
    <section class="titled-section">
      <h1 class="title hoverable-title">
        <a href="noticias/">Noticias</a>
      </h1>
      <span class="section-more"><a href="noticias/">Ver todo</a> </span>
      <div class="section-body" style="max-width:100%;">
        <?php
        echo do_shortcode('[categoryposts]');
        ?>
      </div>
    </section>
    <section class="titled-section">
      <h1 class="title hoverable-title">
        <a href="https://instagram.com/solarfortun" target="_blank">@solarfortun <span style="font-size: 16px;">en Instagram</span></a>
      </h1>
      <div class="section-body" style="max-width:100%;">
        <?php
        echo do_shortcode('[show_instagram_posts]');
        ?>
      </div>
    </section>
    <section class="titled-section" style="height:200px;"></section>


  </section> <!-- CONTENT END -->

</section>
<style>
  a.ViewProfileButton {
    display: none;
  }

  a {
    text-decoration: none;
  }


  .titled-section {
    margin-top: 50px;
    width: calc(100% - 200px) !important;
    float: left !important;
    position: relative;
  }

  .titled-section .title {
    font-family: 'Botera TFE';
    font-style: normal;
    font-weight: 400;
    font-size: 40px;
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

  .founder {
    background: url('<?php bloginfo('template_url') ?>/img/homepage/fundador.png') no-repeat;
  }

  .enologist {
    background: url('<?php bloginfo('template_url') ?>/img/homepage/enologo.png') no-repeat;
  }

  .founder,
  .enologist {
    background-size: cover;
    background-position: center;
    position: relative;
  }

  body {
    overflow-y: auto !important;
  }

  .cards-container {
    display: flex;
    gap: 32px;
    margin-top: 32px;
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
    width: 32.33333%;
    /* height: 545px; */
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
    ;
  }
</style>

<?php get_footer(); ?>