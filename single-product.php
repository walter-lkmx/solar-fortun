<?php /* Template Name: Single product */ ?>
<?php get_header(); ?>
<?php include('ui-layout/aside-main.php'); ?>
<section class="single-product">
  <?php include('ui-layout/top-bar.php'); ?>
  <section class="content">
    <section class="image">
      <img src="" id="featImage">
    </section>
    <section class="product-details">
      <section class="title-price">
        <h1 id="product-name"></h1>
        <p id="price"></p>
      </section>
      <section class="add-cart">
        <input id="product-quantity" min="1" type="number" name="quantity">
        <button type="button" id="add-cart-custom">Agregar al carrito</button>
      </section>
      <section class="product-specs">
        <p id="description"></p>
        <p id="pairing"></p>
        <p id="tasting-notes"></p>
        <p id="oenologist-comments"></p>
      </section>
    </section>
  </section>
</section>
<?php get_footer(); ?>