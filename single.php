<?php get_header(); ?>
<?php
if (have_posts()):
while (have_posts()): the_post();
$t = get_the_title();
$category = get_the_category();
$cat_name = $category[0]->cat_name;
?>

<article class="column__sec sec">
  <div class="column__sec__inner container">
    <h1 class="font-weight-bold h3"><?php the_title(); ?></h1>
    <p class="mt-3 mb-5 text-primary"><?php the_time('Y.m.d'); ?></p>
    <div class="single">
    <?php the_content(); ?>
    </div>
  </div>
</article>
<?php
endwhile;
endif;
get_footer();
