<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="page-template" id="v-scroll">
    <section class="single">
      <div class="featured-image">
      <div id='map' style='width: 100%; height: 300vh;'></div>
        <script>
          mapboxgl.accessToken = 'pk.eyJ1Ijoid2FsdGVyaGYiLCJhIjoiY2l5NHB6cjZvMDAydzJ3cXA2OGlrZnNjNSJ9.bZB809FBgbV63mMS8dhseg';
          var map = new mapboxgl.Map({
          container: 'map',
          style: 'mapbox://styles/walterhf/cjgr0abr200062rpbyjlm5mcg',
          zoom:8.5,
          center: ["-116.5727153","30.9000000"]
          });

          map.on("load", function () {
            /* Image: An image is loaded and added to the map. */
            map.loadImage( templateDir + "/img/solar-pin.png", function(error, image) {
                if (error) throw error;
                map.addImage("custom-marker", image);
                /* Style layer: A style layer ties together the source and image and specifies how they are displayed on the map. */
                map.addLayer({
                  id: "markers",
                  type: "symbol",
                  /* Source: A data source specifies the geographic coordinate where the image marker gets placed. */
                  source: {
                    type: "geojson",
                    data: {
                      type: "FeatureCollection",
                      features:[{"type":"Feature","geometry":{"type":"Point","coordinates":["-116.5727153","32.1124706"]}}]}
                  },
                  layout: {
                    "icon-image": "custom-marker",
                  }
                });
              });
          });
        </script>
      </div>
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