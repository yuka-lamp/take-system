<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>

<!-- ▼ 導入 -->
<section class="sub__intro py-main features">
    <div class="container">
        <div class="sub__intro-text">
            <p class="text-primary font-weight-bold">管理画面の機能について</p>
            <h2 class="sub__intro-text-ttl f-36">テイクアウト営業を<br>サポートする機能が充実</h2>
            <p class="f-16">スマホ、パソコンやタブレットなど端末問わずご利用いただけるので、店舗のスタイルに合わせてお選びいただけます。スマホ、パソコンやタブレットなど端末問わずご利用いただけるので、店舗のスタイルに合わせてお選びいただけます。スマホ、パソコンやタブレットなど端末問わずご利用いただけるので、店舗のスタイルに合わせてお選びいただけます。</p>
            <a class="btn btn-primary d-block mt-5" href="https://system.take-eats.jp/demo-admin/" target="_blank">デモページで体験</a>
        </div>
        <p class="sub__intro-bg">Management<br>screen</p>
    </div>
    <div class="sub__intro-img d-lg-none mt-5 pt-3">
            <img class="" src="<?php echo $img_url; ?>features_intro.png" alt="タブレット不要！スマホだけでも運用可能" srcset="<?php echo $img_url; ?>features_intro.png 1x, <?php echo $img_url; ?>features_intro@2x.png 2x">
        </div>
</section>
<!-- ▲ 導入 -->

<!-- ▼ 機能一覧 -->
<section class="sec features pt-main">
    <div class="container">
    <h2 class="font-weight-bold text-center f-36 mb-4">機能一覧</h2>
    <!-- ▼ 機能一覧 -->
    <div>
        <a href="#">商品管理</a>
    </div>
    <!-- ▲ 機能一覧 -->
    </div>
</section>
<!-- ▲ 機能一覧 -->

<?php get_footer();
