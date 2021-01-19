<?php get_header(); ?>
<?php
if (have_posts()):
while (have_posts()): the_post();
$t = get_the_title();
$category = get_the_category();
$cat_name = $category[0]->cat_name;
?>
<section class="sec mv__sub">
<div class="container">
<h1>イベント・セミナー</h1>
</div>
</section>
<article class="event sec">
<div class="container">
<?php if( get_field('active') === "募集中"): ?>
<p class="tag active">募集中</p>
<?php elseif( get_field('active') === "募集終了"): ?>
<p class="tag">募集終了</p>
<?php endif; ?>
<h1 class="mt-3 mb-3 font-weight-bold h3"><?php the_title(); ?></h1>
<p class="mb-0 small">開催日 <?php echo $date[1]; ?>2020/<?php echo $date[2]; ?>11/<?php echo $date[3]; ?>12</p>
<p class="mb-5 small">開催地 <?php the_field('place'); ?></p>
<div class="single">
<?php the_content(); ?>
</div>
</div>
</article>
<?php
endwhile;
endif;
get_footer();
