<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<!-- ▼ メインビジュアル -->
<section class="sec mv__sub">
  <div class="container">
    <h1 class="f-28 font-weight-bold w-100">ニュース</h1>
    <p class="text-primary font-weight-bold text-center mb-0">news</p>
  </div>
</section>
<!-- ▲ メインビジュアル -->


<section class="sec">
<div class="container">
  <div class="home__case__list">

  <?php
    if (have_posts()): while (have_posts()): the_post();
    $ttl = get_the_title();
    $takeeats_url = get_field('site_url');
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $work_terms = get_the_terms(get_the_ID(), 'work_tags');
  ?>

  <!-- ▼ ループするコンテンツ -->
  <a href="<?php the_permalink(); ?>" class="d-block py-4 border-top text-decoration-none">
    <div class="d-inline d-lg-inline-block p-0">
      <p class="d-inline mb-0 f-16"><?php echo get_the_date(); ?></p>
    </div>
    <div class="d-inline d-lg-inline-block p-0">
      <p class="d-inline border text-body px-2 py-1 mx-2 f-12">お知らせ</p>
    </div>
    <p class="d-block d-lg-inline-block col-lg-9 p-0 f-14 text-body mt-2 mb-0"><?php echo $ttl ?></p>
  </a>
  <!-- ▲ ループするコンテンツ -->

  <?php endwhile; endif; ?>
  <div class="text-center border-top">
    <?php wp_pagenavi(); ?>
  </div>
  </div>
</div>
</section>
<?php get_footer();
