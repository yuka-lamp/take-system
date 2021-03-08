<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec mv__sub">
<div class="container">
<h1 class="f-24 font-weight-bold w-100">導入事例</h1>
</div>
</section>
<section class="sec">
<div class="container">
<p class="home__case-label text-center mb-4"><span>多くのお店からの<br class="d-md-none">お申し込みが増えています</span></p>
<div class="home__case__list row">
<?php
if (have_posts()): while (have_posts()): the_post();
$ttl = get_the_title();
$takeeats_url = get_field('site_url');
$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
$work_terms = get_the_terms(get_the_ID(), 'work_tags');
?>
<div class="home__case__list__inner col-12 col-md-4 text-center mb-4">
  <a class="home__case__list__inner-img" href="<?php echo $takeeats_url; ?>" target="_blank">
    <img src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl; ?>">
  </a>
  <div class="home__case__list__inner-info">
    <h3><a class="f-16 font-weight-bold" href="<?php echo $takeeats_url; ?>" target="_blank"><?php echo $ttl; ?><small>様</small></a></h3>
    <?php if($work_terms): ?>
    <div class="home__case__list__inner-tag">
    <?php foreach ($work_terms as $term): ?>
    <span class="f-12"><?php echo $term->name; ?></span>
    <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
  <div class="home__case__list__inner-btn mt-3">
    <a class="btn btn-light font-weight-bold" href="<?php echo $takeeats_url; ?>?traffic_type=service" target="_blank">サイトを見る</a>
  </div>
</div>
<!-- home__case__list__inner -->
<?php endwhile; endif; ?>
</div>
</div>
</section>
<?php get_footer();
