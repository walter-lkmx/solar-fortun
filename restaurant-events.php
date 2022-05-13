<?php /* Template Name: Restaurant/Events */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <style>
    .diners-choice-insignia-container {
      position: absolute;
      width: 100%;
    }

    .diners-choice-insignia {
      position: absolute;
      width: 180px;
      height: 180px;
      right: -25px;
      top: 30px;
      background: url("https://restaurant.opentable.com.mx/badge/ot/DC-2021.png") no-repeat;
      background-size: contain;
      z-index: 9999;
    }

    @media only screen and (max-width: 919px) {
      .diners-choice-insignia {
        width: 120px;
        height: 120px;
        right: -25px;
        top: 0px;
      }
    }
  </style>
  <section class="page-template" id="v-scroll">
    <section class="single">
      <div class="featured-image oenologist-img">
        <?php the_post_thumbnail() ?>
      </div>

      <a href="http://www.opentable.com.mx/restaurant/profile/1120630/reserve?rid=1120630&restref=1120630" target="_blank" rel="noopener">
        <div class="diners-choice-insignia"></div>
      </a>
      <div class="content">
        <section class="title">
          <h1><?php the_title() ?></h1>
        </section>
        <div class="text">
          <?php the_content() ?>
        </div>
      </div>
    </section>
  </section>
</section>
<?php get_footer(); ?>