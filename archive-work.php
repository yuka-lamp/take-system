<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="work">
  <div class="container">
    <p class="text-center mb-5 f-14"><span>ジャンル・エリアを問わず多くのお店でご利用いただいております。<br>クリックで各店舗の注文サイトをご覧いただけます。</span></p>
    <div class="post-list">
    <?php
    if (have_posts()): while (have_posts()): the_post();
    $ttl = get_the_title();
    $takeeats_url = get_field('site_url');
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $work_terms = get_the_terms(get_the_ID(), 'work_tags');
    ?>
    <!-- ▼ ループするコンテンツ -->
    <a class="post-list-item" href="<?php echo $takeeats_url; ?>?traffic_type=service" target="_blank">
      <div class="post-list-item-img">
        <img src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl; ?>">
      </div>
      <div class="post-list-item-text">
        <h3 class="post-list-item-ttl"><?php echo $ttl; ?> 様</h3>
        <div class="f-10 text-secondary font-weight-bold mb-0">
          <?php if($work_terms): ?>
          <div class="post-list-item-tag">
            <?php foreach ($work_terms as $term): ?>
            <span class="f-10"><?php echo $term->name; ?></span>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </a>
    <!-- ▲ ループするコンテンツ -->
    <?php endwhile; endif; ?>
    </div>
    <div class="text-center">
     <?php wp_pagenavi(); ?>
    </div>
  </div>
</section>
<?php get_footer();
