<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="blog container-posts">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <section class="single">
      <div class="featured-image">
        <?php the_post_thumbnail() ?>
      </div>
      <div class="content"> 
        <h1 class="section-header"><?php the_title() ?></h1> 
        <h4><?php the_author() ?></h4>
        <?php the_content() ?>
        <section class="meta">
          <div class="date-category">
            <span><?php the_time('F j, Y') ?></span>
            <!-- <img src="<?php bloginfo('template_url'); ?>/img/archive.svg"> -->
            <?php the_category() ?>
          </div>
        </section>
        <div class="category-list"><p>Categorías: <?php the_category(); ?></p></div>
        <div class="tag-list"><?php the_tags( 'Tags: <p class="label-tags">', '</p> <p class="label-tags">', '</p>' ); ?></p></div>
      </div>
    </section>
    <?php endwhile; ?>
    <section class="pagination">
      <?php else : ?>

      <?php endif; ?>
    </section>
  </section>
</section>
<?php get_footer(); ?>