<?php /* Template Name: New-Home-SF */ ?>
<?php get_header(); ?>

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

    while ($loop->have_posts()) : $loop->the_post();
      $price = get_post_meta($loop->post->ID, '_price', true);
      $watercolor = get_post_meta($loop->post->ID, 'watercolor', true);
    ?>

      <li class="featured">
        <div class="featured-watercolor" style="background: url('<?php echo bloginfo('template_url') . '/' . $watercolor ?>') no-repeat center ; background-size: 40%;">
          <a href="<?php echo get_permalink($loop->post->ID); ?>">
            <?php the_post_thumbnail('medium'); ?>
          </a>
          <br>
          <h3 class="title"><?php echo $loop->post->post_title; ?></h3><br>
          <h4 class="featured-price">$ <?php echo $price; ?></h4>
        </div>
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
    'category_name' => 'noticia',
    'posts_per_page' => 2
  ));

  // The Loop
  if ($the_query->have_posts()) {
    $string .= '<ul class="postsbycategory widget_recent_entries">';
    while ($the_query->have_posts()) {
      $the_query->the_post();
      if (has_post_thumbnail()) {
        $string .= '<li class="featured-news">';
        $string .= get_the_post_thumbnail($post_id, array(160, 236));
        $string .= '<div class="news-title-container"><a href="' . get_the_permalink() . '" rel="bookmark">' . get_the_title() . '</a></div>';

        $content = get_the_content();
        $content = str_replace(['<!-- wp:paragraph -->', '<!-- /wp:paragraph -->'], '', $content);
        $content = trim(substr($content, 0, 100));


        $string .= '<div class="news-content-container"><p>' . $content . '...</p></div>'; #Post content
        $string .= '</li>';
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

      .section-more>a:hover {
        transform: translateY(-2px);
      }

      .hoverable-title {
        cursor: pointer;
      }

      .section-title:hover,
      .hoverable-title:hover {
        color: #8C1835;
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

      @media only screen and (min-width:1920px) {

        .home-card:nth-child(2),
        .home-card:nth-child(3) {
          margin-left: 22px !important;
        }

      }

      @media only screen and (max-width:1440px) {

        .home-card:nth-child(2),
        .home-card:nth-child(3) {
          margin-left: 12px !important;
        }






      }

      @media only screen and (max-width:1369px) {
        .our-family-card .caption {
          height: auto !important;
        }

        .upper-card {
          display: none;
        }

        li.featured {
          display: block !important;
          width: 100% !important;
          text-align: center;
          margin-top: 60px;
        }

        li.featured>.featured-watercolor {
          background-size: 20% !important;
        }

        .featured-products {
          padding-left: 0 !important;
        }

      }

      @media screen and (max-width: 1224px) {

        li.featured-news {
          width: 100% !important;
        }

        li.featured-news img {
          float: none !important;
          width: 100% !important;
        }

        li.featured-news:nth-child(2) {
          margin-left: 0 !important;
          margin-top: 20px !important;
        }

        .home-card:nth-child(2),
        .home-card:nth-child(3) {
          margin-left: 9px !important;
        }

        .coming-soon {
          display: none;
        }

        .dulce-vida {
          display: block !important;
        }
      }

      @media only screen and (max-width:1089px) {

        .home-card:nth-child(2),
        .home-card:nth-child(3) {
          margin-left: 8px !important;
        }

        .our-family-card {
          min-width: 100% !important;
          width: 100% !important;
          height: 490px !important;
          left: 0;
          top: 0;
        }

        .our-family-card .caption {
          margin-top: 0 !important;
          margin-left: 0 !important;
          width: 100% !important;
          padding: 10px 15px !important;
          height: 460px !important;
        }

        .enologist {
          margin-left: 0% !important;
          float: left;
        }
      }

      @media only screen and (max-width:1024px) {

        .home-card:nth-child(2),
        .home-card:nth-child(3) {
          margin-left: 7px !important;
        }

        .upper-card {
          display: none;
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

        .our-family-card {
          min-width: 100% !important;
          width: 100% !important;
          height: 490px !important;
          left: 0;
          top: 0;
        }

        .our-family-card .caption {
          margin-top: 0 !important;
          margin-left: 0 !important;
          width: 100% !important;
          padding: 10px 15px !important;
          height: 460px !important;
        }

        .enologist {
          margin-left: 0% !important;
          float: left;
        }

        .titled-section .title {
          font-size: 30px !important;
        }

        .cards-container {
          padding: 0 16px;
        }

        .home-card:nth-child(2),
        .home-card:nth-child(3) {
          margin-left: 0px !important;
        }

        li.featured {
          display: block !important;
          width: 100% !important;
          text-align: center;
          margin-top: 60px;
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

        li.featured-news:nth-child(2) {
          margin-left: 0 !important;
          margin-top: 20px !important;
        }
      }

      /*921px max-width*/
    </style>
    <?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>

    <section class="cards-container">
      <div class="home-card">
        <div class="card-title">
          <h3 class="hoverable-title">Tienda</h3><span class="arrow-right"><a href="catalogo/">&rarr;</a></span>
        </div>
        <hr class="card-spacer">
        <div class="card-body"><br>Compra nuestros vinos a domicilio, con env&iacute;os a todo M&eacute;xico
        </div>
        <div class="card-picture" style='background: url("/wp-content/uploads/2022/05/tienda.png") center center;'></div>
      </div>
      <div class="home-card">
        <div class="card-title">
          <h3 class="hoverable-title">Dulce Vida</h3><span class="arrow-right"><a href="restaurante-eventos/">&rarr;</a></span>
        </div>
        <hr class="card-spacer">
        <div class="card-body"><br>Visita nuestro restaurante y disfruta de un asador campestre a cargo de la chef Dulce López. Conoce nuestros maridajes y platillos ganadores a la sombra de nuestros encinos centenarios.
        </div>
        <div class="card-picture" style='background: url("/wp-content/uploads/2022/05/dulce-vida.png") center center;'></div>
      </div>
      <div class="home-card">
        <div class="card-title">
          <h3 class="hoverable-title">Vinícola</h3><span class="arrow-right"><a href="nosotros/">&rarr;</a></span>
        </div>
        <hr class="card-spacer">
        <div class="card-body"><br>Solar Fortún es una vinícola familiar mexicana ubicada en Francisco Zarco, Valle de Guadalupe. El proyecto nace en 2007 con el viñedo y a partir del 2012 iniciamos con la distribución de nuestros vinos.
        </div>
        <div class="card-picture" style='background: url("/wp-content/uploads/2022/05/vinicola.png") center center;'></div>
      </div>
    </section>
    <br>
    <section class="titled-section">
      <h1 class="title hoverable-title">
        Nuestra Familia
      </h1>
      <span class="section-more"><a href="nosotros/">Ver más</a> </span>
      <div class="section-body" style="max-width:100%;">
        <div class="our-family-card founder">
          <div class="upper-card" style="height:40%;"></div>
          <br class="clear">
          <div class="caption">
            <h2 class="title">Fundador</h2>
            <div class="body"><b>Dr. José Alberto López</b> <br> Nuestra vinícola presenta orgullosamente a nuestro fundador, Alberto López, físico y astrónomo de profesión pero siempre un amante de corazón de los buenos vinos. <br><br> Inició el proyecto al plantar sus primeras parras en la cañada de Guadalupe, en el poblado de Francisco Zarco. Las primeras uvas serían cosechadas en el año 2010.</div>
          </div>
        </div>
        <div class="our-family-card enologist">
          <div class="upper-card" style="height:40%;"></div>
          <div class="caption">
            <h1 class="title">Enólogo</h1>
            <div class="body"><b>Ing. Santiago López Viana</b> <br>El enólogo de la vinícola fue por muchos años atleta de alto rendimiento. <br><br> Estudió ingeniería en la universidad de Penn State, en los Estados Unidos y posteriormente se preparó como enólogo mediante un diplomado en la Universidad de California-Davis, una de las mejores universidades del mundo en el tema del vino. </div>
          </div>
        </div>

      </div>
    </section>
    <section class="titled-section">
      <div class="section-body"></div>
    </section>
    <style>
      ul.postsbycategory {
        width: 100%;
        list-style: none;
        padding-top: 20px;
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

      li.featured-news:nth-child(2) {
        margin-left: 4%;
      }

      li.featured-news img {
        float: left;
        height: 250px !important;
        width: 160px;
        margin-right: 10px;
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

      li.featured-news>div.news-title-container {
        padding: 10px;
      }

      li.featured-news>div.news-content-container>p {
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
        list-style: none;
        padding-top: 20px;
      }

      li.featured {
        display: inline-block;
        width: 25%;
        text-align: center;
        transition: background 0.5s;
      }

      li.featured:hover {
        background: rgba(253, 250, 247, 0.3) !important;
      }

      li.featured>.featured-watercolor>.featured-price {
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

        color: #8C1835;
      }

      li.featured>.featured-watercolor>h3.title {
        margin-top: 30px;
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
        padding-left: 20px;
        flex-direction: column;
        flex-wrap: wrap;
        align-content: flex-start;
        justify-content: center;
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
        padding: 12px;
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
    </style>
    <section class="titled-section">
      <h1 class="title hoverable-title">
        Vinos<span class="mobile-br"><br></span> Destacados
      </h1>
      <span class="section-more"><a href="catalogo/">Ver catálogo</a> </span>
      <div class="section-body">
        <div class="featured-products">
          <?php $args = array(
            'featured' => true,
          );
          $products = wc_get_products($args);
          $json_array = [];
          foreach ($products as $product) {
            $json_array[] = $product->get_data();
          }
          //var_dump($json_array[0]);
          ?>
          <?php echo do_shortcode("[woo_featured_products]");
          ?>
        </div>
      </div>
    </section>
    <section class="titled-section coming-soon">
      <div class="section-body">
        <div class="left-side">
          <img src="<?php bloginfo('template_url'); ?>/img/homepage/restaurante-3.png" style="width: 50%;">
          <img src="<?php bloginfo('template_url'); ?>/img/homepage/restaurante-4.png" style="width: 50%;">
        </div>
        <div class="right-side">
          <div>
            <h4 class="greyed-out">Próximamente</h4>
          </div>
          <div>
            <h1><a class="hoverable-title" href="restaurante-eventos/" style="text-decoration: none;">Nuestro Restaurante</a></h1>
          </div>
          <div class="our-restaurant">
            <p>Ubicado en El Sauzal, Ensenada.
              <br>Visítanos en nuestra inauguración el próximo 23 de julio de 2022.
              <br><br>Reserva tu mesa o degustación.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="titled-section dulce-vida">
      <div class="section-body">
        <div>
          <div>
            <h4 class="greyed-out">Nuestro Restaurante</h4>
          </div>
          <div>
            <h2 class="hoverable-title">Dulce Vida</h2>
          </div>
          <p class="our-restaurant">
            Ven y disfruta de nuestro asador campestre a cargo de la chef Dulce López.
            Conoce nuestros maridajes y platillos ganadores a la sombra de nuestros encinos centenarios.
          </p>
          <section class="reservation-button">
            <a href="restaurante-eventos/"><span>Reserva</span></a>
          </section>
          <div class="dulce-vida-imgs" style="margin-top:15px;">
            <img src="<?php bloginfo('template_url'); ?>/img/homepage/restaurante-1.png" style="width: 50%;">
            <img src="<?php bloginfo('template_url'); ?>/img/homepage/restaurante-2.png" style="width: 50%;">
          </div>
        </div>
      </div>
    </section>
    <section class="titled-section">
      <h1 class="title hoverable-title">
        Noticias
      </h1>
      <span class="section-more"><a href="noticias/">Ver todo</a> </span>
      <div class="section-body" style="max-width:100%;">
        <?php
        echo do_shortcode('[categoryposts]');
        ?>
      </div>
    </section>
  </section> <!-- CONTENT END -->

</section>
<style>
  .enologist {
    margin-left: 5.5%;
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

  .our-family-card {
    margin-top: 50px;
    max-width: 47.5%;
    min-width: 47.5%;
    height: 685px;
    white-space: normal;
    display: inline-block;
    background-size: 100% !important;
    padding: 15px 15px 40px;
  }

  .our-family-card.founder {
    background: url('wp-content/uploads/2022/05/fundador.png') no-repeat;
  }

  .our-family-card.enologist {
    background: url('wp-content/uploads/2022/05/enologo.png') no-repeat;
  }

  .our-family-card .caption {
    bottom: 0;
    border: 1px solid #fff;
    /* width: 372px; */
    height: 400px;
    /* float: left; */
    padding: 18px;
    color: #fff;
    /* margin-top: 55%; */
    /* margin-left: 9%; */
    display: grid;
  }

  .our-family-card .caption .title {
    /* h1 */
    font-family: 'Botera TFE';
    font-style: normal;
    font-weight: 400;
    font-size: 40px;
    line-height: 48px;
  }

  .our-family-card .caption .body {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 100;
    font-size: 15px;
    line-height: 28px;
  }

  body {
    overflow-y: auto !important;
  }

  .cards-container {
    /* column-count: 3; */
    /* column-gap: 16px; */
  }

  .card-spacer {
    width: 120px;
    height: 0px;
    float: left;
    /* tinto-40% */
    border: 0.5px solid #D1A3AE;
  }

  .card-title>.arrow-right>a {
    text-decoration: none !important;
    color: #8C1835 !important;
  }

  .home-card:nth-child(2),
  .home-card:nth-child(3) {
    margin-left: 15px;
  }

  .home-card {
    /* card-v2 */

    /* Auto layout */
    float: left;
    padding: 24px;
    margin-top: 50px;
    width: 32.33333%;
    min-height: 545px;
    position: relative;

    /* cream */
    background: #FDFAF7;

    /* shadow/normal */
    box-shadow: 0px 4px 6px -4px rgba(35, 39, 52, 0.12), 0px 8px 8px -4px rgba(35, 39, 52, 0.08);
    transition: box-shadow 0.5s;
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

  .card-body {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    max-width: 100%;
    /* height: 170px; */
    /* negro */
    white-space: normal;
    color: #232734;
  }
</style>
<?php get_footer(); ?>