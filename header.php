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
      <!-- <a class="d-inline-block font-weight-bold text-dark f-14" href="<?php echo $home; ?>//">
        管理画面ログイン
      </a> -->
    </div>
    <div class="header__btn">
     <a class="header__btn-item btn-secondary font-weight-bold text-center text-white" href="<?php echo $home; ?>/request/">
        <span class="d-block"> 
        <i class="ri-quill-pen-fill ri-2x d-block"></i>
          お申し込み
        </span>
      </a>
      <a class="header__btn-item btn-primary font-weight-bold text-center text-white" href="<?php echo $home; ?>#toform">
        <span class="d-block">
        <i class="ri-mail-fill ri-2x d-block"></i>
          お問い合わせ
        </span>
      </a>
      
    </div>
    <!-- ▲ PCのみリンクボタン -->

  </div>

  <!-- ▼ スマホメニュー -->
  <div class="drawer d-xl-none">
    <!-- ▼ お申し込みボタン -->
    <a class="drawer__entry btn-secondary font-weight-bold text-center text-white" href="<?php echo $home; ?>/request/">
      <span class="d-block"> 
      <i class="ri-quill-pen-fill ri-xl mb-1"></i>
        <span class="drawer__entry-text d-block font-weight-bold">申し込み</span>
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
      <div class="drawer__menu__wrap w-100">
        <!-- ▼ ページリンク -->
        <a class="drawer__menu__item d-block font-weight-bold text-dark f-16" href="<?php echo $home; ?>/features/">
          <div class="container">機能紹介</div>
        </a>
        <a class="drawer__menu__item d-block font-weight-bold text-dark f-16" href="<?php echo $home; ?>/price/">
          <div class="container">料金</div>
        </a>
        <a class="drawer__menu__item d-block font-weight-bold text-dark f-16" href="<?php echo $home; ?>/work/">
          <div class="container">導入事例</div>
        </a>
        <a class="drawer__menu__item d-block font-weight-bold text-dark f-16" href="<?php echo $home; ?>/column/">
          <div class="container">お役立ちガイド</div>
        </a>
        <a class="drawer__menu__item d-block font-weight-bold text-dark f-16" href="<?php echo $home; ?>/contact/">
          <div class="container">お問い合わせ</div>
        </a>
        <!-- ▲ ページリンク -->

        <!-- ▼ リンク小 -->
        <div class="container py-4">
          <a class="d-block f-14 text-muted font-weight-bold mx-0 my-2" href="https://media.take-eats.jp/" target="_blank">テイクイーツ注文<i class="ri-external-link-line ml-1"></i></a>
          <!-- <a class="d-block f-14 text-muted font-weight-bold mx-3" href="<?php echo $home; ?>/" target="_blank">パートナープログラム<i class="ri-external-link-line ml-1"></i></a> -->
          <a class="d-block f-14 text-muted font-weight-bold mx-0 my-2" href="https://takuhai.take-eats.jp/" target="_blank">タク配<i class="ri-external-link-line ml-1"></i></a>
        </div>
        
        <!-- ▲ リンク小 -->

      </div>
    </div>
    <!-- ▲ ドロワーするコンテンツ -->
  </div>
  <!-- ▲ スマホメニュー -->

</nav>
</header>


<main>

<?php if (!is_home() && !is_front_page() && !is_single() && !is_archive() && !is_page('column') ):  // 下層ページ
  global $post;
  $ttl = $post->post_title;
  $slug = $post->post_name;
?>

<!-- ▼ 下層メインビジュアル -->
<section class="sec mv__sub">
  <div class="container text-center">
  <h1 class="mv__sub-main font-weight-bold w-100"><?php the_title(); ?></h1>
  <p class="mv__sub-small font-weight-bold mb-0"><?php echo $slug ?></p>
  </div>
</section>
<!-- ▲ 下層メインビジュアル -->

<?php elseif ( is_page('column') || is_post_type_archive('blog') || is_singular( 'blog' ) || is_tax('blog_cat') ): /* お役立ちガイド */ ?>

<!-- ▼ 下層メインビジュアル -->
<section class="sec mv__sub mb-0">
  <div class="container text-center">
    <h1 class="mv__sub-main font-weight-bold w-100">お役立ちガイド</h1>
    <p class="mv__sub-small font-weight-bold mb-0">COLUMN</p>
  </div>
</section>
<!-- ▲ 下層メインビジュアル -->
<!-- ▼ コラムページ用ナビ -->
<section class="column__nav">
  <div class="container">
    <div class="column__nav__list">
      <a class="column__nav__item text-body" id="top" href="<?php echo $home; ?>/column/#top"><i class="ri-home-4-fill text-muted mr-2 ri-xl"></i>お役立ちガイドTOP</a>
      <a class="column__nav__item text-body" id="blog" href="<?php echo $home; ?>/blog/#blog"><i class="ri-profile-fill text-primary  mr-2 ri-xl"></i>ALL</a>
      <a class="column__nav__item text-body" id="attracting" href="<?php echo $home; ?>/blog_cat/attracting/#attracting"><i class="ri-flag-fill text-secondary mr-2 ri-xl"></i>集客・販促</a>
      <a class="column__nav__item text-body" id="basic" href="<?php echo $home; ?>/blog_cat/basic/#basic"><i class="ri-book-2-fill text-info mr-2 ri-xl"></i>基礎知識</a>
      <a class="column__nav__item text-body" id="ready" href="<?php echo $home; ?>/blog_cat/ready/#ready"><i class="ri-lightbulb-fill text-warning mr-2 ri-xl"></i>メニュー開発</a>
    </div>
  </div>
</section>
<!-- ▲ コラムページ用ナビ -->

<?php elseif ( is_post_type_archive('systeminfo') || is_singular( 'systeminfo' ) ): /* ニュース */ ?>
  
<!-- ▼ 下層メインビジュアル -->
<section class="sec mv__sub">
  <div class="container text-center">
    <h1 class="mv__sub-main font-weight-bold w-100">ニュース</h1>
    <p class="mv__sub-small font-weight-bold mb-0">NEWS</p>
  </div>
</section>
<!-- ▲ 下層メインビジュアル -->

<?php elseif ( is_post_type_archive('work') ): /* 事例紹介 */ ?>

<!-- ▼ 下層メインビジュアル -->
<section class="sec mv__sub">
<div class="container text-center">
  <h1 class="mv__sub-main font-weight-bold w-100">導入事例</h1>
  <p class="mv__sub-small font-weight-bold mb-0">WORK</p>
</div>
</section>
<!-- ▲ 下層メインビジュアル -->

<?php
endif;
