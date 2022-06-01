<?
/* Template Name: Wineyard */
?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>

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
              <style>

                p.after_yt_embed {
                  padding: 30px 0 10px 0;
                }

                div.sf_youtube_embed>div>iframe {
                  max-width: 100% !important;
                }

                .sf_sidebyside {
                  
                }

                .sf_sidebyside>img {
                  width: 50%;
                  display: inline-flex;
                  float: left;
                  flex: none;
                  flex-grow: 1;
                  margin-bottom: 20px;;
                }

                .sf_title-like {
                  font-family: 'Botera TFE';
                  font-style: normal;
                  font-weight: 400;
                  font-size: 32px;
                  line-height: 38px;
                  color: #8C1835;
                }
              </style>

              <?php the_content() ?>
              <section class="titled-section" style="height:200px;"></section>
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