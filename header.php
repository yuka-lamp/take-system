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
  <!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-WSTPTV7');</script> -->
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
<header id="header" class="lp__header">
<nav class="lp__nav">

  <!-- ▼ 常に表示される -->
  <h1 class="header__wrap">
    <a class="header__inner"href="<?php echo $home; ?>">
      <img src="<?php echo $img_url; ?>logo.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>logo.png 1x, <?php echo $img_url; ?>logo@2x.png 2x">
      <span class="text-body f-14 font-weight-bold ml-2">飲食店向け</span>
    </a>
  </h1>
  <!-- ▲ 常に表示される -->

  <!-- ▼ メニュー -->
  <div class="drawer">
    <!-- ▼ ハンバーガーメニュー -->
    <input class="drawer__checkbox" id="drawerCheckbox" type="checkbox">
    <label class="drawer__icon" for="drawerCheckbox">
      <span class="drawer__icon-parts"></span>
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
        <a class="d-block font-weight-bold text-dark mb-4 f-16" href="<?php echo $home; ?>/marketing/">
          <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
          集客・販売促進
        </a>
        <a class="d-block font-weight-bold text-dark mb-4 f-16" href="<?php echo $home; ?>/work/">
          <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
          導入事例
        </a>
        <a class="d-block font-weight-bold text-dark mb-4 f-16" href="<?php echo $home; ?>/column/">
          <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
          お役立ちガイド
        </a>
        <!-- ▲ ページリンク -->
        <!-- ▼ 会社情報リンク -->
        <div class="footer__link__inner pt-3">
        <a class="d-inline-block mb-2 text-muted mr-4" href="<?php echo $home; ?>/company/">運営会社</a>
        <a class="d-inline-block mb-2 text-muted mr-4" href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a>
        <br>
        <a class="d-inline-block text-muted mr-4" href="<?php echo $home; ?>/law/">特定商取引法に基づく表記</a>
        <a class="d-inline-block text-muted mr-4" href="<?php echo $home; ?>/term/">利用規約</a>
        </div>
        <!-- ▼ 会社情報リンク -->
      </div>
    </div>
    <!-- ▲ ドロワーするコンテンツ -->
  </div>
  <!-- ▲ メニュー -->

</nav>
</header>

<!-- ▼ [画面下固定] お問い合わせ ・ 資料請求 -->
<div class="fix-under ctabtn">
  <div class="ctabtn__wrap d-flex w-100">
    <a class="ctabtn__item col-6 bg-primary text-white font-weight-bold" href="<?php echo $home; ?>/contact/">
      <img class="mr-2" src="<?php echo $img_url; ?>/icon_contact.svg" alt="お問い合わせアイコン">
      お問い合わせ
    </a>
    <a class="ctabtn__item col-6 bg-secondary text-white font-weight-bold" href="<?php echo $home; ?>/contact/">
      <img class="mr-2" src="<?php echo $img_url; ?>/icon_doc.svg" alt="資料請求アイコン">
      資料請求
    </a>
  </div>
</div>
<!-- ▲ [画面下固定] お問い合わせ ・ 資料請求 -->

<main>

<!-- ▼ 下層メインビジュアル -->
<?php if (!is_home() && !is_front_page() && !is_single() && !is_archive() && !is_page(['column'])): // 下層ページ ?>
<section class="sec mv__sub">
  <div class="container">
  <h1 class="f-26 font-weight-bold w-100"><?php the_title(); ?></h1>
  </div>
</section>
<!-- ▲ 下層メインビジュアル -->

<!-- ▼ パンくず -->
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs" class="container">', '</div>');
}
endif;
