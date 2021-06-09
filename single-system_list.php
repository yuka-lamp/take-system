<?php get_header(); ?>
<?php
if (have_posts()):
while (have_posts()): the_post();
// 導入
$icon = get_field('icon');
$ttl = get_the_title();
$text = get_field('text');
$intro = get_field('intro');
// ポイント
$point_img_1 = get_field('point_img_1');
$point_img_2 = get_field('point_img_2');
$point_img_3 = get_field('point_img_3');
$point_ttl_1 = get_field('point_ttl_1');
$point_ttl_2 = get_field('point_ttl_2');
$point_ttl_3 = get_field('point_ttl_3');
$point_text_1 = get_field('point_text_1');
$point_text_2 = get_field('point_text_2');
$point_text_3 = get_field('point_text_3');
// 追加セクション
$sec_ttl_1 = get_field('sec_ttl_1');
$sec_ttl_2 = get_field('sec_ttl_2');
$sec_ttl_3 = get_field('sec_ttl_3');
$sec_content_1 = get_field('sec_content_1');
$sec_content_2 = get_field('sec_content_2');
$sec_content_3 = get_field('sec_content_3');
?>

<article class="system-list">
  <div class="container">

    <!-- ▼ 導入文 -->
    <div class="system-list__intro text-center">
      <img class="system-list__intro-img" src="<?php echo $icon ?>" alt="<?php echo $ttl ?>">
      <h2 class="font-weight-bold f-32 mt-1 mb-4 p-0"><?php the_title(); ?></h2>
      <p class="system-list__intro-text text-muted"><?php echo $intro ?></p>
    </div>
    <!-- ▲ 導入文 -->

    <!-- ▼ ポイント -->
    <div class="system-list__point d-md-flex justify-content-between mt-5">
      <div class="system-list__point-item bg-light rounded">
        <div class="d-flex d-md-block align-items-center">
          <img class="system-list__point-item-img d-block"  src="<?php echo $point_img_1 ?>" alt="<?php echo $point_ttl_1 ?>">
          <h3 class="system-list__point-item-ttl font-weight-bold f-20 text-primary"><?php echo $point_ttl_1 ?></h3>
        </div>
        <p class="system-list__point-text text-mutes f-12 mt-3"><?php echo $point_text_1 ?></p>
      </div>
      <div class="system-list__point-item bg-light rounded">
        <div class="d-flex d-md-block align-items-center">
          <img class="system-list__point-item-img d-block"  src="<?php echo $point_img_2 ?>" alt="<?php echo $point_ttl_2 ?>">
          <h3 class="system-list__point-item-ttl font-weight-bold f-20 text-primary"><?php echo $point_ttl_2 ?></h3>
        </div>
        <p class="system-list__point-text text-mutes f-12 mt-3"><?php echo $point_text_2 ?></p>
      </div>
      <div class="system-list__point-item bg-light rounded">
        <div class="d-flex d-md-block align-items-center">
          <img class="system-list__point-item-img d-block"  src="<?php echo $point_img_3 ?>" alt="<?php echo $point_ttl_3 ?>">
          <h3 class="system-list__point-item-ttl font-weight-bold f-20 text-primary"><?php echo $point_ttl_3 ?></h3>
        </div>
        <p class="system-list__point-text text-mutes f-12 mt-3"><?php echo $point_text_3 ?></p>
      </div>

    </div>
    <!-- ▲ ポイント -->

    <!-- ▼ 追加セクション① -->
    <div class="system-list__sec pt-main">
      <div class="ttl-line">
        <h2 class="font-weight-bold f-28"><?php echo $sec_ttl_1 ?></h2>
      </div>
      <div class="system-list__sec-inner column__sec__inner">
        <?php echo $sec_content_1 ?>
      </div>
    </div>
    <!-- ▲ 追加セクション① -->

    <!-- ▼ 追加セクション② -->
    <div class="system-list__sec pt-main">
      <div class="ttl-line">
        <h2 class="font-weight-bold f-28"><?php echo $sec_ttl_2 ?></h2>
      </div>
      <div class="system-list__sec-inner column__sec__inner">
        <?php echo $sec_content_2 ?>
      </div>
    </div>
    <!-- ▲ 追加セクション② -->

    <!-- ▼ 追加セクション③ -->
    <div class="system-list__sec pt-main">
      <div class="ttl-line">
        <h2 class="font-weight-bold f-28"><?php echo $sec_ttl_3 ?></h2>
      </div>
      <div class="system-list__sec-inner column__sec__inner">
        <?php echo $sec_content_3 ?>
      </div>
    </div>
    <!-- ▲ 追加セクション③ -->

  </div>
</article>
<?php
endwhile;
endif;
get_footer();
