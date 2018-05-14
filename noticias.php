<?php /* Template Name: News */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="blog container-posts">
    <h1 class="section-header">Noticias</h1>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <section class="post">
      <div class="featured-image">
        <?php the_post_thumbnail() ?>
      </div>
      <div class="content">  
        <?php the_content() ?>
      </div>
      <h1 id="demoId"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
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