<?php

/**
 * Template name:お申込み完了
 */
?>

<?php get_header(); ?>

<span id="a8sales"></span>
<script src="//statics.a8.net/a8sales/a8sales.js"></script>
<script>
  a8sales({
    "pid": "s00000000062001",
    "currency": "JPY",
    "items": [{
      "price": 0,
      "quantity": 1
    }]
  });
</script>

<section class="sec single">
  <div class="container">
    <?php the_content(); ?>
  </div>
</section>
<?php get_footer();
