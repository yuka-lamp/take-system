<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec mv__sub bg-white">
<div class="container">
<div class="column__step">
<a href="#step1" class="smooth-scroll">
<span class="column__step-no">STEP 01</span>
<span class="column__step-ttl">まずは知識を身に着けよう</span>
<i class="fas fa-chevron-down"></i>
</a>
<a href="#step2" class="smooth-scroll">
<span class="column__step-no">STEP 02</span>
<span class="column__step-ttl">提供する準備をしよう</span>
<i class="fas fa-chevron-down"></i>
</a>
<a href="#step3" class="smooth-scroll">
<span class="column__step-no">STEP 03</span>
<span class="column__step-ttl">コツを掴んで集客しよう</span>
<i class="fas fa-chevron-down"></i>
</a>
</div>
<!-- .column__step -->
</div>
</section>

<section id="step1" class="py-5 column__cat step1">
<div class="container">
<div class="column__cat-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/column_img_1.png" alt="まずは知識を身に着けよう" srcset="<?php echo $wp_url; ?>/dist/images/column_img_1.png 1x, <?php echo $wp_url; ?>/dist/images/column_img_1@2x.png 2x">
</div>
<div class="column__cat__step">
<p class="column__cat__step-no"><span>STEP</span>01</p>
<h2 class="column__cat__step-ttl">まずは知識を身に着けよう</h2>
<p class="column__cat__step-txt text-lg-center text-left">テイクアウトを始める前に知っておきたい知識をまとめました。<br>これからテイクアウトを始める予定や始めようか迷っている飲食店オーナー様必見の基礎情報です。</p>
</div>

<div class="column__lists">
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
</section>

<section id="step2" class="py-5 column__cat step2">
<div class="container">
<div class="column__cat-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/column_img_2.png" alt="提供する準備をしよう" srcset="<?php echo $wp_url; ?>/dist/images/column_img_2.png 1x, <?php echo $wp_url; ?>/dist/images/column_img_2@2x.png 2x">
</div>
<div class="column__cat__step">
<p class="column__cat__step-no"><span>STEP</span>02</p>
<h2 class="column__cat__step-ttl">提供する準備をしよう</h2>
<p class="column__cat__step-txt text-lg-center text-left">店内飲食とは少し違った準備が必要なテイクアウト。<br>しっかり準備して魅力的なメニューを提供しましょう。</p>
</div>

<div class="column__lists">
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
</section>

<section id="step3" class="py-5 column__cat step3">
<div class="container">
<div class="column__cat-thumbnail">
<img src="<?php echo $wp_url; ?>/dist/images/column_img_3.png" alt="コツを掴んで集客しよう" srcset="<?php echo $wp_url; ?>/dist/images/column_img_3.png 1x, <?php echo $wp_url; ?>/dist/images/column_img_3@2x.png 2x">
</div>
<div class="column__cat__step">
<p class="column__cat__step-no"><span>STEP</span>03</p>
<h2 class="column__cat__step-ttl">コツを掴んで集客しよう</h2>
<p class="column__cat__step-txt text-lg-center text-left">テイクアウトの売上をアップさせるには集客が大切です。<br>飲食店に欠かせない集客方法について解説します。</p>
</div>

<div class="column__lists">
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
</section>
<?php get_footer();
