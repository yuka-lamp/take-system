<?php get_header(); ?>
<?php
if (have_posts()):
while (have_posts()): the_post();
$id = get_the_ID();
$thumbnail = get_the_post_thumbnail_url($id, 'large');
$ttl = get_the_title();
$permalink = get_the_permalink();
?>

<div class="column-container">
<div class="container">
<div class="row">

<div class="col-lg-8 mb-lg-0 mb-5">
<article>
<div class="single-thumbnail mb-4">
<img src="<?php echo $thumbnail ?>" alt="<?php echo $ttl; ?>">
</div>
<h1 class="font-weight-bold"><?php echo $ttl; ?></h1>
<p class="mt-3 mb-5 small"><?php the_time('Y.m.d'); ?></p>
<div class="single">
<?php the_content(); ?>
</div>
</article>
</div>

<div class="col-lg-4">
<div id="sidebar">
<div class="side__blog mb-4">
<h3><span class="text-secondary mr-2">STEP 01</span>まずは知識を身に着けよう</h3>
<div class="column__lists mt-3">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'blog',
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => [
      [
        'taxonomy' => 'blog_cat',
        'field' => 'slug',
        'terms' => 'basic',
      ]
    ]
];
$my_posts = get_posts($args);
foreach ($my_posts as $post):
setup_postdata($post);
$id = get_the_ID();
$thumbnail = get_the_post_thumbnail_url($id, 'thumbnail');
$ttl = get_the_title();
$permalink = get_the_permalink();
?>
<article class="column__lists__post">
<div class="column__lists__post-thumbnail">
<a href="<?php echo $permalink; ?>"><img src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl; ?>"></a>
</div>
<h3 class="column__lists__post-ttl"><a href="<?php echo $permalink; ?>"><?php echo $ttl; ?></a></h3>
</article>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- .column__lists -->
</div>
<div class="side__blog mb-4">
<h3><span class="text-secondary mr-2">STEP 02</span>提供する準備をしよう</h3>
<div class="column__lists mt-3">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'blog',
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => [
      [
        'taxonomy' => 'blog_cat',
        'field' => 'slug',
        'terms' => 'ready',
      ]
    ]
];
$my_posts = get_posts($args);
foreach ($my_posts as $post):
setup_postdata($post);
$id = get_the_ID();
$thumbnail = get_the_post_thumbnail_url($id, 'thumbnail');
$ttl = get_the_title();
$permalink = get_the_permalink();
?>
<article class="column__lists__post">
<div class="column__lists__post-thumbnail">
<a href="<?php echo $permalink; ?>"><img src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl; ?>"></a>
</div>
<h3 class="column__lists__post-ttl"><a href="<?php echo $permalink; ?>"><?php echo $ttl; ?></a></h3>
</article>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- .column__lists -->
</div>
<div class="side__blog">
<h3><span class="text-secondary mr-2">STEP 03</span>コツを掴んで集客しよう</h3>
<div class="column__lists mt-3">
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'blog',
    'orderby' => 'date',
    'order' => 'ASC',
    'tax_query' => [
      [
        'taxonomy' => 'blog_cat',
        'field' => 'slug',
        'terms' => 'attracting',
      ]
    ]
];
$my_posts = get_posts($args);
foreach ($my_posts as $post):
setup_postdata($post);
$id = get_the_ID();
$thumbnail = get_the_post_thumbnail_url($id, 'thumbnail');
$ttl = get_the_title();
$permalink = get_the_permalink();
?>
<article class="column__lists__post">
<div class="column__lists__post-thumbnail">
<a href="<?php echo $permalink; ?>"><img src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl; ?>"></a>
</div>
<h3 class="column__lists__post-ttl"><a href="<?php echo $permalink; ?>"><?php echo $ttl; ?></a></h3>
</article>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- .column__lists -->
</div>
</div>
</div>

</div>
</div>
</div>
<?php
endwhile;
endif;
get_footer();
