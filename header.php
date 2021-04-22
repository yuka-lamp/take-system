<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
?>
<!DOCTYPE HTML>

<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Quicksand:wght@400;700&display=swap">
  <link rel="preload" href="<?php echo $wp_url; ?>/dist/css/style.css" as="style">
  <link rel="stylesheet" href="<?php echo $wp_url; ?>/dist/css/style.css?ver=1.1.0">
  <?php wp_head(); ?>
  <?php if (!is_user_logged_in()): ?>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WSTPTV7');</script>
  <!-- End Google Tag Manager -->
  <?php endif; ?>
</head>

<body>
<?php if (!is_user_logged_in()): ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSTPTV7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php endif; ?>
<?php wp_body_open(); ?>

<!-- ▼ ヘッダー -->
<header id="header" class="header">
<nav class="lp__nav">

  <div class="header__wrap">
    <!-- ▼ ロゴ -->
    <h1 class="">
      <a class="header__inner" href="<?php echo $home; ?>">
        <img src="<?php echo $img_url; ?>logo.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>logo.png 1x, <?php echo $img_url; ?>logo@2x.png 2x">
        <span class="text-body f-14 font-weight-bold ml-1">飲食店向け</span>
      </a>
    </h1>
    <!-- ▲ ロゴ -->

    <!-- ▼ PCのみリンクボタン -->
    <div class="nav-box">
      <a class="d-inline-block font-weight-bold text-dark f-14 mr-5 py-3" href="<?php echo $home; ?>/features/">
        機能紹介
      </a>
      <a class="d-inline-block font-weight-bold text-dark f-14 mr-5 py-3" href="<?php echo $home; ?>/price/">
        料金
      </a>
      <a class="d-inline-block font-weight-bold text-dark f-14 mr-5 py-3" href="<?php echo $home; ?>/work/">
        導入事例
      </a>
      <a class="d-inline-block font-weight-bold text-dark f-14 mr-5 py-3" href="<?php echo $home; ?>/column/">
        お役立ちガイド
      </a>
      <a class="d-inline-block font-weight-bold text-dark f-14" href="<?php echo $home; ?>/seminar/">
        無料相談会
      </a>
    </div>
    <div class="header__btn">
      <a class="header__btn-item btn-secondary font-weight-bold text-center text-white" href="<?php echo $home; ?>#toform">
        <span class="d-block">
        <i class="ri-mail-fill ri-2x d-block"></i>
          お問い合わせ
        </span>
      </a>
      <a class="header__btn-item btn-primary font-weight-bold text-center text-white" href="<?php echo $home; ?>/request/">
        <span class="d-block"> 
        <i class="ri-quill-pen-fill ri-2x d-block"></i>
          無料お申し込み
        </span>
      </a>
    </div>
    <!-- ▲ PCのみリンクボタン -->

  </div>

  <!-- ▼ スマホメニュー -->
  <div class="drawer d-xl-none">
    <!-- ▼ お申し込みボタン -->
    <a class="drawer__entry btn-primary font-weight-bold text-center text-white" href="<?php echo $home; ?>/request/">
      <span class="d-block"> 
      <i class="ri-quill-pen-fill ri-xl mb-1"></i>
        <span class="drawer__entry-text d-block font-weight-bold">無料申込</span>
      </span>
    </a> 
    <!-- ▲ お申し込みボタン -->
    <!-- ▼ ハンバーガーメニュー -->
    <input class="drawer__checkbox" id="drawerCheckbox" type="checkbox">
    <label class="drawer__icon" for="drawerCheckbox">
      <span class="drawer__icon-parts"></span>
      <span class="drawer__icon-text font-weight-bold">MENU</span>
    </label>
    <!-- ▲ ハンバーガーメニュー -->
    <!-- ▼ ドロワーするコンテンツ -->
    <div class="drawer__menu">
      <div class="drawer__menu__wrap">
        <!-- ▼ ページリンク -->
        <a class="d-block font-weight-bold text-dark mb-4 f-16" href="<?php echo $home; ?>/features/">
          <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
          機能紹介
        </a>
        <a class="d-block font-weight-bold text-dark mb-4 f-16" href="<?php echo $home; ?>/price/">
          <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
          料金
        </a>
        <a class="d-block font-weight-bold text-dark mb-4 f-16" href="<?php echo $home; ?>/work/">
          <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
          導入事例
        </a>
        <a class="d-block font-weight-bold text-dark mb-4 f-16" href="<?php echo $home; ?>/column/">
          <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
          お役立ちガイド
        </a>
        <a class="d-block font-weight-bold text-dark mb-4 f-16" href="<?php echo $home; ?>/seminar/">
          <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
          無料相談会
        </a>
        <a class="btn btn-secondary bg-secondary text-white font-weight-bold mt-2" href="<?php echo $home; ?>#toform/">
          <i class="ri-mail-fill ri-1x mr-2"></i>
          お問い合わせ
        </a>
        
        <!-- ▲ ページリンク -->
      </div>
    </div>
    <!-- ▲ ドロワーするコンテンツ -->
  </div>
  <!-- ▲ スマホメニュー -->

</nav>
</header>

<!-- ▼ [画面下固定] お問い合わせ ・ 無料相談会 -->
<!-- <?php if ( is_front_page() || is_home() || is_page(array('features', 'price', 'marketing')) ): //フォーム追加ページ以外 ?>

<div class="fix-under ctabtn">
  <div class="ctabtn__wrap d-flex w-100">
    <a class="ctabtn__item col-6 bg-secondary text-white font-weight-bold" href="<?php echo $home; ?>/seminar/">
      <i class="fas fa-chalkboard"></i>
      無料相談会
    </a>
    <a class="ctabtn__item col-6 bg-primary text-white font-weight-bold" href="<?php echo $home; ?>#toform/">
      <i class="fas fa-headset"></i>
      お問い合わせ
    </a>
  </div>
</div>

<?php endif; ?> -->
<!-- ▲ [画面下固定] お問い合わせ ・ 無料相談会 -->

<main>

<!-- ▼ 下層メインビジュアル -->
<?php if (!is_home() && !is_front_page() && !is_single() && !is_archive()): // 下層ページ
  global $post;
  $ttl = $post->post_title;
  $slug = $post->post_name;?>
<section class="sec mv__sub">
  <div class="container">
  <h1 class="f-28 font-weight-bold w-100"><?php the_title(); ?></h1>
  <p class="text-primary font-weight-bold text-center mb-0"><?php echo $slug ?></p>
  </div>
</section>
<!-- ▲ 下層メインビジュアル -->

<!-- ▼ パンくず -->
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs" class="container">', '</div>');
}
endif;
