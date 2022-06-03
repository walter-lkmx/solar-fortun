<?php /* Template Name: Chef */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <style>
    html,
    body {
      max-width: 100%;
      overflow-x: hidden;
    }

    .diners-choice-insignia-container {
      position: absolute;
      width: 100%;
      overflow-x: hidden;
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

    @media only screen and (max-width: 960px) {
      .diners-choice-insignia {
        width: 120px;
        height: 120px;
        top: 60px;
      }
    }

    @media only screen and (max-width: 920px) {
      .diners-choice-insignia {
        width: 120px;
        height: 120px;
        right: -25px;
        top: 135px;
      }

      body.page-template section.single .featured-image.oenologist-img img {
        transform: translate(-50%, -25%);
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
        <div class="breadcrumbs">
          <a href="/restaurante-eventos" title="">
            <span>Restaurante</span>
          </a>
          <span> · </span>

          <span class="selected">Chef</span>
        </div>
        <section class="title">
          <h1><?php the_title() ?></h1>
        </section>
        <div class="text">
          <?php the_content() ?>
          <section style="height:200px;display:block;"></section>
        </div>
      </div>
    </section>
  </section>
</section>
<?php get_footer(); ?>