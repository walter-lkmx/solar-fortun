<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="blog container-posts">
    <?php rewind_posts(); ?>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <section class="post">
      <div class="featured-image">
        <?php the_post_thumbnail() ?>
      </div>
      <div class="content">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
        <section class="excerpt">
          <?php echo get_excerpt() ?>
        </section>
        <section class="meta">
          <div class="author">
            <?php the_author() ?>
          </div>
          <div class="date-category">
            <span><?php the_time('F j, Y') ?></span>
            <img src="<?php bloginfo('template_url'); ?>/img/archive.svg">
            <?php the_category() ?>
          </div>
        </section>
      </div>
    </section>
    <?php endwhile; ?>
    <section class="pagination">
      <div class="nav-previous alignleft">
        <?php next_posts_link( 'Older posts' ); ?>
      </div>
      <div class="nav-next alignright">
        <?php previous_posts_link( 'Newer posts' ); ?>
      </div>
      <?php else : ?>
      <p>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
      </p>
      <?php endif; ?>
    </section>
  </section>
</section>
<?php get_footer(); ?>