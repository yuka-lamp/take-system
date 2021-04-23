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
      <?php if (has_term('attracting','blog_cat')): /* 集客・販促 */?>
        <!-- ▼ 集客・販促 -->
        <div class="column__sec__intro d-none d-lg-block">
          <div class="scroll-flex">
            <p class="text-secondary font-weight-bold">集客・販促</p>
            <h3 class="column__sec__intro-ttl">どうしたら<br>売上アップできる？</h3>
            <p class="f-16">テイクアウトの売上をアップさせるには集客が大切です。<br class="d-none b-md-block">飲食店に欠かせない集客方法について解説します。</p>
            <a class="d-none d-md-block btn btn-secondary mt-5" href="<?php echo $home; ?>#toform/">すべての記事をみる</a>
          </div>
        </div>
        <!-- ▲ 集客・販促 --> 
      <?php elseif (has_term('basic','blog_cat')): /* 基礎知識 */ ?>
        <!-- ▼ 基礎知識 -->
        <div class="column__sec__intro d-none d-lg-block">
          <div class="scroll-flex">
            <p class="text-info font-weight-bold">基礎知識</p>
            <h3 class="column__sec__intro-ttl">テイクアウトの<br>知識を身に着けよう</h3>
            <p class="f-16">テイクアウトを始める前に知っておきたい知識をまとめました。<br class="d-none b-md-block">これからテイクアウトを始める予定や始めようか迷っている飲食店オーナー様必見の基礎情報です。</p>
            <a class="d-none d-md-block btn btn-info mt-3" href="<?php echo $home; ?>#toform/">すべてみる</a>
          </div>
       </div>
       <!-- ▲ 基礎知識 -->
       <?php elseif (has_term('ready','blog_cat')): /* メニュー開発 */ ?>
        <!-- ▼ メニュー開発 -->
        <div class="column__sec__intro d-none d-lg-block">
          <div class="scroll-flex">
            <p class="text-warning font-weight-bold">メニュー開発</p>
            <h3 class="column__sec__intro-ttl">メニューで<br>ユーザーの心を掴もう</h3>
            <p class="f-16">店内飲食とは少し違った準備が必要なテイクアウト。<br class="d-none b-md-block">しっかり準備して魅力的なメニューを提供しましょう。</p>
            <a class="d-none d-md-block btn btn-warning mt-5" href="<?php echo $home; ?>#toform/">すべてみる</a>
          </div>
        </div>
       <!-- ▲ メニュー開発 -->
      <?php endif; ?>

      <!-- ▲ カテゴリ説明 -->
      <!-- ▼ 本文 -->
      <article class="column__sec__inner">
        <div class="single-thumbnail mb-4">
        <img src="<?php echo $thumbnail ?>" alt="<?php echo $ttl; ?>">
        </div>
        <h1 class="font-weight-bold"><?php echo $ttl; ?></h1>
        <p class="mt-3 mb-3 small"><?php the_time('Y.m.d'); ?></p>
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
