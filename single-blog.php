<?php get_header(); ?>
<?php
if (have_posts()):
while (have_posts()): the_post();
$id = get_the_ID();
$thumbnail = get_the_post_thumbnail_url($id, 'large');
$ttl = get_the_title();
$permalink = get_the_permalink();
?>

<section class="column__sec py-main single">
  <div class="column__sec">
    <div class="column__sec__wrap">
      <!-- ▼ カテゴリ説明 -->
      <div class="column__sec__intro">
        <div class="scroll-flex">
        <p class="text-secondary font-weight-bold">集客・販促</p>
        <h3 class="column__sec__intro-ttl">どうしたら<br>売上アップできる？</h3>
        <p class="f-16">テイクアウトの売上をアップさせるには集客が大切です。<br class="d-none b-md-block">飲食店に欠かせない集客方法について解説します。</p>
        <a class="d-none d-md-block btn btn-secondary mt-5" href="<?php echo $home; ?>#toform/">すべての記事をみる</a>
        </div>
      </div>
      <!-- ▲ カテゴリ説明 -->
      <!-- ▼ 本文 -->
      <article class="column__sec__inner">
        <div class="single-thumbnail mb-4">
        <img src="<?php echo $thumbnail ?>" alt="<?php echo $ttl; ?>">
        </div>
        <h1 class="font-weight-bold"><?php echo $ttl; ?></h1>
        <p class="mt-3 mb-5 small"><?php the_time('Y.m.d'); ?></p>
        <div class="single">
        <?php the_content(); ?>
        </div>
      </article>
      <!-- ▲ 本文 -->
    </div>
  </div>
</section>

<?php
endwhile;
endif;
get_footer();
