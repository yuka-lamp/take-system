<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>
<section class="mv">
<div class="container">
<div class="mv__inner">
<div class="mv__inner__left">
<p class="mv__inner__left-balloon">無料で簡単</p>
<h1 class="mv__inner__left-ttl">テイクアウト専用<br>オーダー予約システム</h1>
<p>TakeEatsは飲食店オーナー様向けのテイクアウト（お持ち帰り）に特化した予約・決済システムです。飲食店オーナー様から寄せられた多くのご要望にお応えするために生まれました。</p>
</div>
<div class="mv__inner__right">
<div class="mv__inner__right-ribbon">サービス紹介30秒動画</div>
<video id="pv" class="video-js" poster="<?php echo $img_url; ?>video_poster.png">
<source src="<?php echo $wp_url; ?>/dist/video/take-eats-pv_cm.mp4" type="video/mp4">
</video>
</div>
</div>
<!-- mv__inner -->
</div>
<img class="mv-illust-2" src="<?php echo $img_url; ?>mv_illust_2.png" alt="背景">
</section>
<!-- mv -->
<section id="homenews" class="home__news">
<div class="container">
<h2>NEWS</h2>
<?php
$args = [
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post); ?>
<div class="home__news__inner">
<a href="<?php the_permalink(); ?>">
<time data-time="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
<p><?php the_title(); ?></p>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</section>
<!-- homenews -->

<section id="case" class="sec home__case">
<div class="container">
<h2 class="ttl-h2 text-center">
<span>case</span>
<span>導入店舗</span>
</h2>

<p class="home__case-label"><span>多くのお店からの<br class="d-md-none">お申し込みが増えています</span></p>

<div class="home__case__list">
<?php
$worl_args = [
    'posts_per_page' => 3,
    'post_type' => 'work',
    'orderby' => 'date',
    'order' => 'ASC'
];
$work_posts = get_posts($worl_args);
foreach ($work_posts as $post):
    setup_postdata($post);
    $ttl = get_the_title();
    $takeeats_url = get_field('site_url');
    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'large');
    $work_terms = get_the_terms(get_the_ID(), 'work_tags');
?>
<div class="home__case__list__inner">
<a class="home__case__list__inner-img" href="<?php echo $takeeats_url; ?>" target="_blank">
<img src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl; ?>">
</a>
<div class="home__case__list__inner-info">
<h3><a href="<?php echo $takeeats_url; ?>" target="_blank"><?php echo $ttl; ?><small>様</small></a></h3>
<?php if($work_terms): ?>
<div class="home__case__list__inner-tag">
<?php foreach ($work_terms as $term): ?>
<span><?php echo $term->name; ?></span>
<?php endforeach; ?>
</div>
<?php endif; ?>
</div>
<div class="home__case__list__inner-btn">
<a class="btn btn-light font-weight-bold" href="<?php echo $takeeats_url; ?>" target="_blank">サイトを見る</a>
</div>
</div>
<!-- home__case__list__inner -->
<?php endforeach; wp_reset_postdata(); ?>
</div>
<!-- home__case__list -->
</div>
</section>

<section id="features" class="sec home__features">
<div class="container">
<h2 class="ttl-h2 text-center">
<span>Service Features</span>
<span>TakeEatsが選ばれる<br class="d-md-none">3つの理由</span>
</h2>
</div>
<div class="home__features__wrap">
<div class="home__features__wrap__inner">
<span class="home__features__wrap__inner-no">01</span>
<div class="home__features__wrap__inner-img">
<img src="<?php echo $img_url; ?>features_img_1.png" alt="初期費用・月額費用0円" srcset="<?php echo $img_url; ?>features_img_1.png 1x, <?php echo $img_url; ?>features_img_1@2x.png 2x">
</div>
<h3 class="home__features__wrap__inner-ttl">初期費用・月額費用0円</h3>
<p>初期導入費・月額利用料はすべて無料！費用はご注文時の決済手数料のみで、固定費はかかりません。（オプションをご選択の場合は別途費用）</p>
<p class="text-center mb-0 mt-3"><a class="btn btn-primary" href="<?php echo $home; ?>/price/">詳しく見る</a></p>
</div>
<!-- home__features__wrap__inner -->
<div class="home__features__wrap__inner">
<span class="home__features__wrap__inner-no">02</span>
<div class="home__features__wrap__inner-img">
<img src="<?php echo $img_url; ?>features_img_1.png" alt="店舗オリジナルページを作成" srcset="<?php echo $img_url; ?>features_img_2.png 1x, <?php echo $img_url; ?>features_img_2@2x.png 2x">
</div>
<h3 class="home__features__wrap__inner-ttl">店舗オリジナルページを作成</h3>
<p>1つ1つの店舗にURLを発行し、ホームページのように運用いただくことが可能です。SNS等から直接購入ページに来ていただくことが可能です。</p>
<p class="text-center mb-0 mt-3"><a class="btn btn-primary" href="<?php echo $home; ?>/features/">詳しく見る</a></p>
</div>
<!-- home__features__wrap__inner -->
<div class="home__features__wrap__inner">
<span class="home__features__wrap__inner-no">03</span>
<div class="home__features__wrap__inner-img">
<img src="<?php echo $img_url; ?>features_img_1.png" alt="売上アップの仕組み" srcset="<?php echo $img_url; ?>features_img_3.png 1x, <?php echo $img_url; ?>features_img_3@2x.png 2x">
</div>
<h3 class="home__features__wrap__inner-ttl">売上アップの仕組みを提供</h3>
<p>GoogleMapとの連携やTakeEats公式店舗検索サイトへの掲載、SEO対策など、独自サイトならではのプロモーションが可能です。</p>
<p class="text-center mb-0 mt-3"><a class="btn btn-primary" href="<?php echo $home; ?>/marketing/">詳しく見る</a></p>
</div>
<!-- home__features__wrap__inner -->
</div>
<!-- home__features__wrap -->
</section>
<!-- features -->
<section id="system" class="sec home__system">
<div class="container">
<h2 class="ttl-h2 text-center">
<span>system</span>
<span>お店によって様々な<br class="d-md-none">機能を自由に</span>
</h2>
<div class="home__system__slide">
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_1.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_1.png 1x, <?php echo $img_url; ?>option_icon_1@2x.png 2x">
</div>
<h3>カード決済</h3>
</div>
</div>
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_2.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_2.png 1x, <?php echo $img_url; ?>option_icon_2@2x.png 2x">
</div>
<h3>デザインカスタム</h3>
</div>
</div>
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_3.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_3.png 1x, <?php echo $img_url; ?>option_icon_3@2x.png 2x">
</div>
<h3>FAX転送</h3>
</div>
</div>
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_4.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_4.png 1x, <?php echo $img_url; ?>option_icon_4@2x.png 2x">
</div>
<h3>お気持ちオプション</h3>
</div>
</div>
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_6.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_6.png 1x, <?php echo $img_url; ?>option_icon_6@2x.png 2x">
</div>
<h3>お知らせ</h3>
</div>
</div>
<div>
<div class="home__system__slide__inner">
<div class="home__system__slide-thumbnail">
<img src="<?php echo $img_url; ?>option_icon_5.png" alt="アイコン" srcset="<?php echo $img_url; ?>option_icon_5.png 1x, <?php echo $img_url; ?>option_icon_5@2x.png 2x">
</div>
<h3>SNS連携</h3>
</div>
</div>
</div>
<!-- home__system__slide -->
<div class="mt-md-5 mt-4 text-center">
<a class="btn btn-outline-primary" href="<?php echo $home; ?>/features/">詳しくみる</a>
</div>
</div>
</section>
<!-- system -->
<section id="flow" class="sec home__flow">
<img class="home__flow-illust" src="<?php echo $img_url; ?>flow_illust_1.png" alt="背景">
<div class="container">
<h2 class="ttl-h2 text-center">
<span>flow</span>
<span>最短即日で導入可能</span>
</h2>
<div class="home__flow__wrap">
<div class="home__flow__wrap-img"><img src="<?php echo $img_url; ?>flow_img_1.png" alt="イラスト" srcset="<?php echo $img_url; ?>flow_img_1.png 1x, <?php echo $img_url; ?>flow_img_1@2x.png 2x"></div>
<ol class="home__flow__list">
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>01</span></div>
<div class="home__flow__list__inner-txt">
<h3>お申し込み</h3>
<p>お客様のご相談を受け付けます。</p>
</div>
</li>
<!-- home__flow__list__inner -->
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>02</span></div>
<div class="home__flow__list__inner-txt">
<h3>アカウント発行</h3>
<p>お申込みフォームより必要事項のご入力いただきます。</p>
</div>
</li>
<!-- home__flow__list__inner -->
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>03</span></div>
<div class="home__flow__list__inner-txt">
<h3>メニュー登録</h3>
<p>システム導入にあたり詳細やご希望をお伺いします。</p>
</div>
</li>
<!-- home__flow__list__inner -->
<li class="home__flow__list__inner">
<div class="home__flow__list__inner-step">STEP<span>04</span></div>
<div class="home__flow__list__inner-txt">
<h3>ご利用スタート</h3>
<p>準備が整いました。ご利用スタートです！</p>
</div>
</li>
<!-- home__flow__list__inner -->
</ol>
<!-- home__flow__list -->
</div>
<div class="mt-md-5 mt-4 text-center">
<a class="btn btn-outline-primary" href="<?php echo $home; ?>/flow/">詳しい導入手順を見る</a>
</div>
</div>
</section>
<!-- flow -->
<?php get_footer();
