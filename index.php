<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="main-container">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="content" id="h-scroll">
    <nav class="products" >
      <ul>
        <li>
          <a href="" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/SF_Noble.png">
          </a>
        </li>
        <li>
          <a href="" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/SF_OPositivo.png">
          </a>
        </li>
        <li>
          <a href="" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/SF_Confabulario.png">
          </a>
        </li>        
        <li class="">
          <a href="" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/SF_VinaRosa.png">
          </a>
        </li>
        <li class="">
          <a href="" title="">
            <img src="<?php bloginfo('template_url'); ?>/img/bottles/SF_Elixir.png">
          </a>
        </li>
      </ul>
    </nav>
  </section>
</section>
<?php get_footer(); ?>