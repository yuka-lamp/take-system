<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="event py-5">
<div class="container">
<div class="ttl">
<p>開催日</p>
<p>イベント・セミナー名</p>
</div>
<article class="event__lists">
<?php
$args = [
'posts_per_page' => 10,
'post_type' => 'event',
'orderby' => 'date',
'order' => 'ASC'
];
$my_posts = get_posts($args);
foreach ($my_posts as $post):
setup_postdata($post);
$id = get_the_ID();
$ttl = get_the_title();
$permalink = get_the_permalink();
$set_date = get_field('day');
?>
<div class="event__lists__post">
<a class="event__lists__post-left" href="<?php echo $permalink; ?>">
<span class="year"><?php echo $date[1]; ?>2020</span>
<div class="date">
<span class="month"><?php echo $date[2]; ?>11</span>/
<span class="day"><?php echo $date[3]; ?>12</span>
</div>
</a>
<a class="event__lists__post-right" href="<?php echo $permalink; ?>">
<?php if( get_field('active') === "募集中"): ?>
<p class="tag active">募集中</p>
<?php elseif( get_field('active') === "募集終了"): ?>
<p class="tag">募集終了</p>
<?php endif; ?>
<h3><?php echo $ttl; ?></h3>
<p>開催地 <?php the_field('place'); ?></p>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</article>
</div>
<!-- .column__lists -->
</div>
</section>
<?php get_footer();
