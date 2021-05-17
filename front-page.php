<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<!-- ▼ メインビジュアル -->
<div class="home__mv">
  <div class="home__mv-wrap">
    <div class="home__mv__text">
      <div class="home__mv__text-wrap">
        <h2 class="home__mv__text-ttl font-weight-bold f-36">
          テイクアウト特化の<br>
          予約・決済システムなら<br>
          <span>テイクイーツ</span>
        </h2>
        <p class="f-16 mb-0 font-weight-bold">お店ごとにカスタマイズできる注文サイトを開設して、テイクアウト・デリバリー（一部エリア）の注文をオンライン受付。
          <br>店舗運営の効率化と販路拡大を支援します。
        </p>
      </div>
    </div>
    <div class="home__mv__photo">
      <div class="home__mv__photo-bg">
        <img class="" src="<?php echo $img_url; ?>mv_iphone_pc.png" alt="タブレット不要！スマホだけでも運用可能" srcset="<?php echo $img_url; ?>mv_iphone_pc.png 1x, <?php echo $img_url; ?>mv_iphone_pc@2x.png 2x" style="width: 180px; height: auto;">
      </div>
    </div>

  </div>
</div>
<!-- ▲ メインビジュアル -->

<!-- ▼ テイクイーツが選ばれる理由 -->
<div class="home__reason">
  <div class="container py-main">
    <h2 class="f-32 font-weight-bold text-center mb-5">テイクイーツが<br class="d-block d-md-none">選ばれる理由</h2>
    <div class="home__reason__wrap d-md-flex justify-content-between flex-wrap">
      <!-- ▼ 理由① -->
      <div class="home__reason__item d-flex align-items-center">
        <img src="<?php echo $img_url; ?>reason_free.png" alt="初期・月額費用が無料で利用可" srcset="<?php echo $img_url; ?>reason_free.png 1x, <?php echo $img_url; ?>reason_free@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-4">
          初期・月額費用が
          <br><span>無料</span>で利用可
        </h3>
      </div>
      <!-- ▲ 理由① -->
      <!-- ▼ 理由② -->
      <div class="home__reason__item d-flex align-items-center">
        <img src="<?php echo $img_url; ?>reason_start.png" alt="即日開設ですぐに運用スタート" srcset="<?php echo $img_url; ?>reason_start.png 1x, <?php echo $img_url; ?>reason_start@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-4">
          即日開設で
          <br><span>すぐに運用スタート</span>
        </h3>
      </div>
      <!-- ▲ 理由② -->
      <!-- ▼ 理由③ -->
      <div class="home__reason__item d-flex align-items-center">
        <img src="<?php echo $img_url; ?>reason_online.png" alt="オンライン決済でトラブルを防止" srcset="<?php echo $img_url; ?>reason_online.png 1x, <?php echo $img_url; ?>reason_online@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-4">
         オンライン決済で
          <br><span>トラブルを防止</span>
        </h3>
      </div>
      <!-- ▲ 理由③ -->
      <!-- ▼ 理由④ -->
      <div class="home__reason__item d-flex align-items-center">
        <img src="<?php echo $img_url; ?>reason_phone.png" alt="電話注文を削減して運営効率アップ" srcset="<?php echo $img_url; ?>reason_phone.png 1x, <?php echo $img_url; ?>reason_phone@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-4">
          電話注文を削減して</span>
          <br><span>運営効率アップ</span>
        </h3>
      </div>
      <!-- ▲ 理由④ -->
    </div>
  </div>
</div>
<!-- ▲ テイクイーツが選ばれる理由 -->

<!-- ▼ 商品お渡しまでの流れ -->
<div class="home__about">
  <div class="container pb-main">
    <h2 class="f-32 font-weight-bold text-center mb-5">商品お渡しまでの<br class="d-md-none">3STEP</h2>

    <div class="home__about__wrap">
      <div class="home__about__item-wrap">
        <!-- ▼ 流れ① -->
        <div class="home__about__item">
          <div class="home__about__item-text">
            <h3 class="home__about__item-ttl f-28 text-primary font-weight-bold">注文がはいる</h3>
            <p class="home__about__item-text pt-4 pb-3 m-0">会員登録・アプリのインストール不要の注文サイトからお客様が注文をします。</p>
          </div>
          <div class="text-center">
            <img src="<?php echo $img_url; ?>about_1.png" alt="注文がはいる" srcset="<?php echo $img_url; ?>about_1.png 1x, <?php echo $img_url; ?>about_1@2x.png 2x">
          </div>
        </div>
        <!-- ▲ 流れ① -->
        <!-- ▼ 流れ② -->
        <div class="home__about__item">
          <div class="home__about__item-text">
            <h3 class="home__about__item-ttl f-28 text-primary font-weight-bold">通知がくる</h3>
            <p class="home__about__item-text pt-4 pb-3 m-0">注文が入ると、メールまたは電話で店舗やオーナー様にお知らせします。</p>
          </div>
          <div class="text-center">
            <img src="<?php echo $img_url; ?>about_2.png" alt="注文がはいる" srcset="<?php echo $img_url; ?>about_2.png 1x, <?php echo $img_url; ?>about_2@2x.png 2x">
          </div>
        </div>
        <!-- ▲ 流れ② -->
        <!-- ▼ 流れ③ -->
        <div class="home__about__item">
          <div class="home__about__item-text">
            <h3 class="home__about__item-ttl f-28 text-primary font-weight-bold">商品を渡す</h3>
            <p class="home__about__item-text pt-4 pb-3 m-0">商品の準備をして、受け取りに来たお客様にお渡しします。</p>
          </div>
          <div class="text-center">
            <img src="<?php echo $img_url; ?>about_3.png" alt="注文がはいる" srcset="<?php echo $img_url; ?>about_3.png 1x, <?php echo $img_url; ?>about_3@2x.png 2x">
          </div>
        </div>
        <!-- ▲ 流れ③ -->
      </div>
    </div>

    <!-- ▼ 機能一覧紹介 -->
    <div class="features__system pt-4 my-5 d-md-flex flex-wrap justify-content-between">
      <!-- ▼ POS連携 -->
      <div class="features__system-item">
        <div class="d-flex align-items-center">
          <img class="mr-3" src="<?php echo $img_url; ?>system_pos.png" alt="注文がはいる" srcset="<?php echo $img_url; ?>system_pos.png 1x, <?php echo $img_url; ?>system_pos@2x.png 2x">
          <h3 class="f-20 font-weight-bold">POS連携</h3>
        </div>
        <p class="mt-2">料理の準備を進め予定の時間に受け取りにきたお客様に商品をお渡しします。</p>
      </div>
      <!-- ▲ POS連携 -->
      <!-- ▼ POS連携 -->
      <div class="features__system-item">
        <div class="d-flex align-items-center">
          <img class="mr-3" src="<?php echo $img_url; ?>system_pos.png" alt="注文がはいる" srcset="<?php echo $img_url; ?>system_pos.png 1x, <?php echo $img_url; ?>system_pos@2x.png 2x">
          <h3 class="f-20 font-weight-bold">POS連携</h3>
        </div>
        <p class="mt-2">料理の準備を進め予定の時間に受け取りにきたお客様に商品をお渡しします。</p>
      </div>
      <!-- ▲ POS連携 -->
      <!-- ▼ POS連携 -->
      <div class="features__system-item">
        <div class="d-flex align-items-center">
          <img class="mr-3" src="<?php echo $img_url; ?>system_pos.png" alt="注文がはいる" srcset="<?php echo $img_url; ?>system_pos.png 1x, <?php echo $img_url; ?>system_pos@2x.png 2x">
          <h3 class="f-20 font-weight-bold">POS連携</h3>
        </div>
        <p class="mt-2">料理の準備を進め予定の時間に受け取りにきたお客様に商品をお渡しします。</p>
      </div>
      <!-- ▲ POS連携 -->
      <!-- ▼ POS連携 -->
      <div class="features__system-item">
        <div class="d-flex align-items-center">
          <img class="mr-3" src="<?php echo $img_url; ?>system_pos.png" alt="注文がはいる" srcset="<?php echo $img_url; ?>system_pos.png 1x, <?php echo $img_url; ?>system_pos@2x.png 2x">
          <h3 class="f-20 font-weight-bold">POS連携</h3>
        </div>
        <p class="mt-2">料理の準備を進め予定の時間に受け取りにきたお客様に商品をお渡しします。</p>
      </div>
      <!-- ▲ POS連携 -->
      <!-- ▼ POS連携 -->
      <div class="features__system-item">
        <div class="d-flex align-items-center">
          <img class="mr-3" src="<?php echo $img_url; ?>system_pos.png" alt="注文がはいる" srcset="<?php echo $img_url; ?>system_pos.png 1x, <?php echo $img_url; ?>system_pos@2x.png 2x">
          <h3 class="f-20 font-weight-bold">POS連携</h3>
        </div>
        <p class="mt-2">料理の準備を進め予定の時間に受け取りにきたお客様に商品をお渡しします。</p>
      </div>
      <!-- ▲ POS連携 -->
      <!-- ▼ POS連携 -->
      <div class="features__system-item">
        <div class="d-flex align-items-center">
          <img class="mr-3" src="<?php echo $img_url; ?>system_pos.png" alt="注文がはいる" srcset="<?php echo $img_url; ?>system_pos.png 1x, <?php echo $img_url; ?>system_pos@2x.png 2x">
          <h3 class="f-20 font-weight-bold">POS連携</h3>
        </div>
        <p class="mt-2">料理の準備を進め予定の時間に受け取りにきたお客様に商品をお渡しします。</p>
      </div>
      <!-- ▲ POS連携 -->
    </div>

    <a class="btn btn-border btn-center d-block" href="<?php echo $home; ?>/features/">機能一覧へ</a>
  </div>
</div>
<!-- ▲ 商品お渡しまでの流れ -->

<!-- ▼ 導入店舗 -->
<div class="home__case bg-light py-5 mt-5">
  <div class="home__case__wrap container text-center">
    <h2 class="home__case__ttl f-32 font-weight-bold  mb-3 d-flex align-items-center justify-content-center">全国<span>700</span>店舗で導入</h2>
    <p class="mb-5">カフェやレストランをはじめとして、<br class="d-block d-md-none">幅広いジャンルのお店で<br>ご利用いただいております。</p>
    <!-- ▼ ロゴ -->
    <div class="home__case__inner bg-white d-flex flex-wrap justify-content-center align-items-center">
      <?php
      $args = [
          'posts_per_page' => -1,
          'post_type' => 'work_logo',
          'orderby' => 'date',
          'order' => 'DESC'
      ];
      $my_posts = get_posts($args);
      foreach ($my_posts as $post):
      setup_postdata($post);
      $id = get_the_ID();
      $company = get_the_title(); 
      $logo = get_field('logo');
      $logo_2x = get_field('logo_2x');
      ?>
      <img class="home__case__item" src="<?php echo $logo ?>" alt="<?php echo $company ?>" srcset="<?php echo $logo ?> 1x, <?php echo $logo_2x ?> 2x">
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <!-- ▲ ロゴ -->
    <a class="btn btn-border btn-center d-block my-5" href="<?php echo $home; ?>/work/">事例紹介へ</a>
  </div>
</div>
<!-- ▲ 導入店舗 -->

<!-- ▼ 料金 -->
<div class="home__price">
  <div class="container pt-main">
    <h2 class="f-32 font-weight-bold text-center mb-4">料金プラン</h2>
    <p class="mb-5 text-center">お客様の店舗数やご利用状況に合わせた2つのプランをご用意しております。</p>
    <a class="btn btn-border btn-center d-block my-5" href="<?php echo $home; ?>/price/">詳細をみる</a>
  </div>
</div>
<!-- ▲ 料金 -->

<!-- ▼ 導入までの流れ -->
<div class="home__flow pt-main">
  <div class="container">
    <h2 class="f-32 font-weight-bold text-center mb-4">導入までの流れ</h2>
    <div class="text-center">
      <p class="home__flow__comment font-weight-bold text-center mb-2">最短<span>1日</span>でスタート！</p>
    </div>
    <!-- ▼ 図 -->
    <div class="home__flow__step p-0">
      <div class="home__flow__step-item">
        <p class="home__flow__step-item-num f-20 text-primary lh-1 font-weight-bold"><span class="d-block f-12">STEP</span>01</p>
        <p class="d-block f-20 font-weight-bold pt-2">お申し込み</p>
        <p class="text-left">お申し込みフォームの必須項目を入力しお申し込みください。</p>
      </div>
      <div class="home__flow__step-item">
        <p class="home__flow__step-item-num f-20 text-primary lh-1 font-weight-bold"><span class="d-block f-12">STEP</span>02</p>
        <p class="d-block f-20 font-weight-bold pt-2">アカウント開設</p>
        <p class="text-left">お客様専用の注文サイトを発行しログイン情報をお送りします。</p>
      </div>
      <div class="home__flow__step-item">
        <p class="home__flow__step-item-num f-20 text-primary lh-1 font-weight-bold"><span class="d-block f-12">STEP</span>03</p>
        <p class="d-block f-20 font-weight-bold pt-2">初期設定</p>
        <p class="text-left">営業時間やお渡し可能時間などの基本設定を行います。</p>
      </div>
      <div class="home__flow__step-item">
        <p class="home__flow__step-item-num f-20 text-primary lh-1 font-weight-bold"><span class="d-block f-12">STEP</span>04</p>
        <p class="d-block f-20 font-weight-bold pt-2">メニュー登録</p>
        <p class="text-left">お客様に提供するメニューや商品オプションを登録し、公開に向けて準備を進めます。</p>
      </div>
      <div class="home__flow__step-item">
        <p class="home__flow__step-item-num f-20 text-primary lh-1 font-weight-bold"><span class="d-block f-12">STEP</span>05</p>
        <p class="d-block f-20 font-weight-bold pt-2">注文受付スタート</p>
        <p class="text-left">準備が整いましたらサイトを公開し注文の受付が始まります！</p>
      </div>
    </div>
    <!-- ▲ 図 -->
  </div>
</div>
<!-- ▲ 導入までの流れ -->

<!-- ▼ カーブ画像 -->
<img class="d-block d-md-none mt-4 w-100" src="<?php echo $img_url; ?>cta_bg_sp.png" alt="背景" srcset="<?php echo $img_url; ?>cta_bg_sp.png 1x, <?php echo $img_url; ?>cta_bg_sp@2x.png 2x">
<img class="d-none d-md-block mt-4 w-100" src="<?php echo $img_url; ?>cta_bg_pc.png" alt="背景" srcset="<?php echo $img_url; ?>cta_bg_pc.png 1x, <?php echo $img_url; ?>cta_bg_pc@2x.png 2x">
<!-- ▲ カーブ画像 -->

<!-- ▼ お問い合わせ -->
<div id="toform" class="cta pt-5 pb-5 bg-light">
  <div class="container">
    <h2 class="f-32 font-weight-bold text-center mb-4">いますぐ<br>テイクイーツを始めよう！</h2>
    <!-- <p class="mb-5 text-center">あなたのお店オリジナルの<br>モバイルオーダーサイトを無料で簡単に開設。</p> -->
    <!-- ▼ 電話番号 -->
    <div class="text-center mt-3">
      <p class="f-16 text-primary font-weight-bold mb-1">カスタマーサポートセンター</p>
      <a class="footer__cta-phone f-32 font-weight-bold" href="tel:0120538205">
        <span class="footer__cta-phone-icon"><i class="ri-phone-fill ri-md"></i></span>
        0120-538-205
      </a>
      <p class="f-12 text-muted mb-4">受付時間｜10:00~18:00（土日・祝除く）</p>
    </div>
    <!-- ▲ 電話番号 -->
    <div class="cta__btn d-md-flex flex-wrap justify-content-center">
      <!-- ▼ お申し込み -->
      <a class="cta__btn-item request text-white bg-primary" href="<?php echo $home; ?>/request/">
        <h3 class="cta__btn-item-ttl f-18 font-weight-bold text-center mb-0">お申し込み</h3>
      </a>
      <!-- ▲ お申し込み -->
      <!-- ▼ 相談会で詳しく聞く -->
      <a class="cta__btn-item doc text-primary" href="<?php echo $home; ?>/seminar/">
        <h3 class="cta__btn-item-ttl f-18 font-weight-bold text-center mb-0">相談会で詳しく聞く</h3>
      </a>
      <!-- ▲ 相談会で詳しく聞く -->
    </div>
    <!-- ▼ お問合せフォーム -->
      <div class="cta__form bg-white mt-4">
        <h2 class="f-26 font-weight-bold text-center my-4">お問い合わせ</h2>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
        <script>
          hbspt.forms.create({
        	portalId: "8940987",
        	formId: "8dabe843-f09e-45dd-a5b5-277dcf314768"
        });
        </script>
      </div>
    <!-- ▲ お問合せフォーム -->
  </div>
</div>
<!-- ▲ お問い合わせ -->

<!-- ▼ お知らせ -->
<div class="news py-5 mt-5">
  <div class="container">
    <h2 class="f-32 font-weight-bold text-center mb-5">ニュース</h2>
    <!-- ▼ 記事 -->
    <div class="news__list bg-light pb-4">
      <?php
      $args = [
          'posts_per_page' => 3,
          'post_type' => 'post',
          'orderby' => 'date',
          'order' => 'DESC'
      ];
      $my_posts = get_posts($args);
      foreach ($my_posts as $post):
      setup_postdata($post);
      $id = get_the_ID();
      $ttl = get_the_title();
      ?>
      <!-- ▼ ループするコンテンツ -->
      <a href="<?php the_permalink(); ?>" class="d-block pt-4 text-decoration-none">
        <div class="d-inline d-lg-inline-block p-0">
          <p class="d-inline mb-0 f-16"><?php echo get_the_date(); ?></p>
        </div>
        <div class="d-inline d-lg-inline-block p-0">
          <p class="d-inline border text-body px-2 py-1 mx-2 f-12">お知らせ</p>
        </div>
        <p class="d-block d-lg-inline-block col-lg-9 p-0 f-14 text-body mt-2 mb-0"><?php echo $ttl ?></p>
      </a>
      <!-- ▲ ループするコンテンツ -->
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <!-- ▲ 記事 -->
  </div>
</div>
<!-- ▲ お知らせ -->

<?php get_footer();
