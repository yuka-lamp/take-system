<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<!-- ▼ メインビジュアル -->
<div class="lp__hero">
  <div class="container">
    <div class="lp__hero-wrap">
      <div class="lp__hero-txt">
        <div class="text-center primary">
          <img class="mb-2" src="<?php echo $img_url; ?>/lp_hero_1day.png" alt="最短1営業日でスタート" srcset="<?php echo $img_url; ?>/lp_hero_1day.png 1x, <?php echo $img_url; ?>/lp_hero_1day@2x.png 2x">
          <h2>モバイルオーダーの<span>導</span><span>入</span>なら</h2>
          <img class="logo" src="<?php echo $img_url; ?>/lp_hero_logo.png" alt="TakeEatsロゴ" srcset="<?php echo $img_url; ?>/lp_hero_logo.png 1x, <?php echo $img_url; ?>/lp_hero_logo@2x.png 2x">
          <!-- <p>テイクアウト特化で高機能オリジナル</p> -->
          <div class="mt-4 text-center">
            <a class="btn btn-outline-primary" href="<?php echo $home; ?>#lpform">お問い合わせ</a>
          </div>
        </div>
      </div>
      <div class="lp__hero-demo">
        <img src="<?php echo $img_url; ?>/mv_lp_pict_pc.png" alt="スマホ画面" srcset="<?php echo $img_url; ?>/mv_lp_pict_pc.png 1x, <?php echo $img_url; ?>/mv_lp_pict_pc@2x.png 2x">
      </div>
    </div>
  </div>
</div>
<!-- ▲ メインビジュアル -->

<?php get_footer();
