<?php /* Template Name: New-Home-SF */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="content">
    <style>
      .wonderpluginslider-container {
        width: calc(100% - 200px) !important;
        float: left !important;
      }

      .amazingslider-arrow-right-1,
      .amazingslider-arrow-left-1 {
        display: block !important;
      }

      @media only screen and (max-width:919px) {
        .wonderpluginslider-container {
          /* padding-right: 0; */
          min-width: 100% !important;
        }
      }

      .metaslider.ms-theme-cubic:hover a.rslides_nav {
        background: rgba(255, 255, 255, 0) !important;
      }
    </style>
    <!-- <div class="banner-container">  -->
      <?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
    <!-- </div> -->
  </section>
</section>
<?php get_footer(); ?>