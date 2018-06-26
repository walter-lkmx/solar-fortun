<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="blog-single-post container-posts">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
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
        </div>
        <section class="meta">
          <div class="date-category">
            <span><?php the_time('F j, Y') ?></span>
            <!-- <img src="<?php bloginfo('template_url'); ?>/img/archive.svg"> -->
            <?php the_category() ?>
          </div>
        </section>
        <!-- <div class="category-list"><p>Categorías: <?php the_category(); ?></p></div> -->
        <!-- <div class="tag-list"><?php the_tags( 'Tags: <p class="label-tags">', '</p> <p class="label-tags">', '</p>' ); ?></p></div> -->
      </div>
    </section>
    <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
  </section>
</section>
<?php get_footer(); ?>