<?php
/* Template Name: instagram-posts-SF */
add_shortcode('show_instagram_posts', 'show_instagram_posts');

function show_instagram_posts()
{
    ob_start()
    $meta_query  = WC()->query->get_meta_query();
  
    $args = array(
      'post_type'           => 'page',
      'post_name'=>'instagram-posts',
      'meta_query'          => $meta_query,
    );
    $ig_loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post();
    ?>
    <div class="instagram_posts">
        <?php
      echo get_post_meta($ig_loop->post->ID, 'ig_post_1', true);
      echo get_post_meta($ig_loop->post->ID, 'ig_post_2', true);
      echo get_post_meta($ig_loop->post->ID, 'ig_post_3', true);
      echo get_post_meta($ig_loop->post->ID, 'ig_post_4', true);      
      ?>
      </div>
<?php
      
    endwhile;
    wp_reset_query();
    return ob_get_clean();
}
