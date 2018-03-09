<?php /* Template Name: demo */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<main role="main" aria-label="Content">
  <!-- section -->
  <section>
    <h1><?php the_title(); ?></h1>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <!-- article -->
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1 id="product-name" style="font-size: 3rem;"></h1>
      <button type="button" id="add-cart-custom">Agregar al carrito</button>
      <p id="image">
        <img src="" id="featImage">
      </p>
      <p id="price"></p>
      <p id="description"></p>
      <p id="pairing"></p>
      <p id="tasting-notes"></p>
      <p id="oenologist-comments"></p>
      <?php the_content(); ?>
      <?php edit_post_link(); ?>
    </article>
    <!-- /article -->
    <?php endwhile; ?>
    <?php else: ?>
    <!-- article -->
    <article>
      <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
    </article>
    <!-- /article -->
    <?php endif; ?>
  </section>
  <!-- /section -->
</main>
<?php get_footer(); ?>