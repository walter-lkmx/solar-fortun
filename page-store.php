<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="content" >
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

<!-- article -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php the_content(); ?>
  
  <div id="demo"></div>

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
</section>
<?php get_footer(); ?>