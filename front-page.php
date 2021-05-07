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
          お店独自の
          <br class="d-md-none">モバイルオーダーで
          <br><span>売上アップ！</span>
        </h2>
        <p class="f-16 mb-0 font-weight-bold">高機能なテイクイーツは初期・導入費用無料！
          <br>あなたのお店でも、<br class="d-md-none">いますぐモバイルオーダーをスタート。
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
    <h2 class="f-32 font-weight-bold text-center mb-4">テイクイーツが<br class="d-block d-md-none">選ばれる理由</h2>
    <div class="home__reason__wrap d-md-flex justify-content-between flex-wrap">
      <!-- ▼ 理由① -->
      <div class="home__reason__item d-flex align-items-center mt-4">
        <img src="<?php echo $img_url; ?>reason_free.png" alt="初期費用・月額費用が無料で利用できる" srcset="<?php echo $img_url; ?>reason_free.png 1x, <?php echo $img_url; ?>reason_free@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-4">
          初期・月額・導入費用が
          <br><span>完全無料</span>で利用できる
        </h3>
      </div>
      <!-- ▲ 理由① -->
      <!-- ▼ 理由② -->
      <div class="home__reason__item d-flex align-items-center mt-4">
        <img src="<?php echo $img_url; ?>reason_up.png" alt="注文のデジタル化で売上アップ！" srcset="<?php echo $img_url; ?>reason_up.png 1x, <?php echo $img_url; ?>reason_up@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-4">
          WEB予約を導入で
          <br><span>売上アップ</span>！
        </h3>
      </div>
      <!-- ▲ 理由② -->
      <!-- ▼ 理由③ -->
      <div class="home__reason__item d-flex align-items-center">
        <img src="<?php echo $img_url; ?>reason_tablet.png" alt="タブレット不要！スマホだけでも運用可能" srcset="<?php echo $img_url; ?>reason_tablet.png 1x, <?php echo $img_url; ?>reason_tablet@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-4">
          専用タブレット不要!
          <br><span>スペースを取らず</span>運用
        </h3>
      </div>
      <!-- ▲ 理由③ -->
      <!-- ▼ 理由④ -->
      <div class="home__reason__item d-flex align-items-center">
        <img src="<?php echo $img_url; ?>reason_line.png" alt="お店もお客様も安心の並ばない注文" srcset="<?php echo $img_url; ?>reason_line.png 1x, <?php echo $img_url; ?>reason_line@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-4">
          お客様を<span>並ばせずに</span>
          <br>商品を受け渡し
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
      <div class="home__about__item-wrap d-md-flex flex-wrap  justify-content-between">
        <!-- ▼ 流れ① -->
        <div class="home__about__item col-md-4">
          <div class="home__about__item-text">
            <h3 class="home__about__item-ttl f-28 text-primary font-weight-bold mb-0">注文がはいる</h3>
            <p class="home__about__item-text py-4 m-0">会員登録やアプリのインストール不要の注文サイトからお客様が注文をします。</p>
          </div>
          <div class="text-center">
            <img src="<?php echo $img_url; ?>about_1.png" alt="注文がはいる" srcset="<?php echo $img_url; ?>about_1.png 1x, <?php echo $img_url; ?>about_1@2x.png 2x">
          </div>
        </div>
        <!-- ▲ 流れ① -->
        <!-- ▼ 流れ② -->
        <div class="home__about__item col-md-4">
          <div class="home__about__item-text">
            <h3 class="home__about__item-ttl f-28 text-primary font-weight-bold mb-0">通知がくる</h3>
            <p class="home__about__item-text py-4 m-0">店舗やオーナー様の電話番号・メールに直接通知でお知らせします。</p>
          </div>
          <div class="text-center">
            <img src="<?php echo $img_url; ?>about_2.png" alt="注文がはいる" srcset="<?php echo $img_url; ?>about_2.png 1x, <?php echo $img_url; ?>about_2@2x.png 2x">
          </div>
        </div>
        <!-- ▲ 流れ② -->
        <!-- ▼ 流れ③ -->
        <div class="home__about__item col-md-4">
          <div class="home__about__item-text">
            <h3 class="home__about__item-ttl f-28 text-primary font-weight-bold mb-0">受け渡し</h3>
            <p class="home__about__item-text py-4 m-0">料理の準備を進め予定の時間に受け取りにきたお客様に商品をお渡しします。</p>
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
    <p class="mb-5">カフェやレストランを始め、<br class="d-block d-md-none">専門店やスイーツ店など幅広いお店で<br>ご利用いただいております。</p>
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
      aaa
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
    <p class="f-18 font-weight-bold text-center mb-2">最短<span class="f-24 px-1">1日</span>でスタート！</p>
    <!-- ▼ 図 -->
    <div class="home__flow__step p-0">
      <div class="home__flow__step-item">
        <p class="home__flow__step-item-num f-20 text-primary lh-1 font-weight-bold"><span class="d-block f-12">STEP</span>01</p>
        <p class="d-block f-20 font-weight-bold pt-2">お申し込み</p>
        <p class="text-left">お申し込みフォームの必須項目に入力しお申し込みください。</p>
      </div>
      <div class="home__flow__step-item">
        <p class="home__flow__step-item-num f-20 text-primary lh-1 font-weight-bold"><span class="d-block f-12">STEP</span>02</p>
        <p class="d-block f-20 font-weight-bold pt-2">アカウント発行</p>
        <p class="text-left">お客様専用のオーダーサイトを発行しログインID・PASSをお送りします。</p>
      </div>
      <div class="home__flow__step-item">
        <p class="home__flow__step-item-num f-20 text-primary lh-1 font-weight-bold"><span class="d-block f-12">STEP</span>03</p>
        <p class="d-block f-20 font-weight-bold pt-2">初期設定</p>
        <p class="text-left">営業時間や店舗の登録など設定を行います。</p>
      </div>
      <div class="home__flow__step-item">
        <p class="home__flow__step-item-num f-20 text-primary lh-1 font-weight-bold"><span class="d-block f-12">STEP</span>04</p>
        <p class="d-block f-20 font-weight-bold pt-2">メニュー登録</p>
        <p class="text-left">管理画面からメニューやオプションを登録し、公開に向けて準備をします。</p>
      </div>
      <div class="home__flow__step-item">
        <p class="home__flow__step-item-num f-20 text-primary lh-1 font-weight-bold"><span class="d-block f-12">STEP</span>05</p>
        <p class="d-block f-20 font-weight-bold pt-2">ご利用スタート</p>
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
        <span class="footer__cta-phone-icon"><i class="ri-phone-fill ri-xs text-white"></i></span>
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

<?php get_footer();
