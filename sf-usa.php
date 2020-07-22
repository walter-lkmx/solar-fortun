<?php /* Template Name: Solar Fortun USA */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="page-template" id="v-scroll">
    <section class="single">
      <div class="featured-image oenologist-img">
        <?php the_post_thumbnail() ?>
      </div>
      <div class="content"> 
        <section class="title">
          <h1><?php the_title() ?></h1> 
        </section>
        <div class="text">
          <p>Find our wines in the United States through either of our two importers. Also make sure to join our wineclubs in the US through their websites and get new releases and special pricing on all of our wines</p>
          
          <a href="www.mexicanwine.us" target="_blank">www.mexicanwine.us</a>
          <p><b>patrick@besoimports.com</b></p>
          <a href="" target="_blank">www.lacompetenciaimports.com</a>
          <p><b>tomas@lacompetenciaimports.com</b></p>

          <h3>Winery Visits</h3>
          <p>Are you planning on visiting us and have questions? Here is a quick guide for your trip.</p>
          <p>Solar Fortún has two different locations open to the public:</p><p>Our vineyard is located in Francisco Zarco in the northern edge of Valle de Guadalupe where you will find our beautiful property and tasting terrace surrounded by centennial old oak trees. We are open at this location on Saturdays and Sundays from 11am to 6pm and have a seasonal restaurant that specialized in food that pairs phenomenally with our wines.</p>
          <a href="https://goo.gl/maps/sexpRC2AjBRFnWCL7" target="_blank">See on Google Maps</a>
          <p>Our winemaking facilities are located in el sauzal, at the entrance to Ensenada right in front of the ocean.  Here we have VIP barrel tastings (reservation only) and starting summer 2021 we will have an oceanfront winebar. Plans for a new restaurant at this location are currently being developed.</p>
        </div>
      </div>
    </section>
  </section>
</section>
<?php get_footer(); ?>