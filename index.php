<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="content">
    <nav class="products"  id="h-scroll">
      <ul>
        <li>
          <a href="" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/noble-cru.png">
          </a>
        </li>
        <li>
          <a href="" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/o-positivo.png">
          </a>
        </li>
        <li>
          <a href="" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/confabulario.png">
          </a>
        </li>        
        <li class="slim">
          <a href="" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/vina-rosa.png">
          </a>
        </li>
        <li class="slim">
          <a href="" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/elixir-cordis.png">
          </a>
        </li>
      </ul>
    </nav>
  </section>
</section>
<?php get_footer(); ?>