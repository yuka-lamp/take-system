<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>
<div class="sec faq">
<div class="container">
<div class="faq__list">
<?php
$terms = get_terms('faqcat');
$num = 1;
foreach ($terms as $term): ?>
<?php if($num === 1): ?>
<h3 class="h5 font-weight-bold mb-3"><?php echo $term->name; ?></h3>
<?php else: ?>
<h3 class="h5 font-weight-bold mt-5 mb-3"><?php echo $term->name; ?></h3>
<?php endif; ?>
<?php
$args = [
    'posts_per_page' => -1,
    'post_type' => 'faq',
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query'=> [
        [
            'taxonomy' => 'faqcat',
            'field' => 'slug',
            'terms' => $term->slug
        ]
    ]
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$q = get_the_title();
$a = get_the_content();
?>
<div class="faq__list__inner">
<h3 class="faq__list__inner-ttl"><?php echo $q; ?></h3>
<div class="faq__list__inner-ans"><?php echo $a; ?></div>
</div>
<?php endforeach; wp_reset_postdata(); ++$num; endforeach; ?>
</div>
</div>
</section>
<?php get_footer();
