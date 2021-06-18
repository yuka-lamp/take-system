<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<!-- ▼ メインビジュアル -->
<div class="home__mv">
  <div class="home__mv__container d-md-flex align-items-center">
    <!-- ▼ テキスト -->
    <div class="home__mv__text text-center">
      <div class="home__mv__text-wrap">
        <h2 class="home__mv__text-ttl font-weight-bold f-28">
          テイクアウト特化の<br>
          予約・決済システムなら<br>
          <img class="home__mv__text-logo mt-2" src="<?php echo $img_url; ?>mv_logo.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>mv_logo.png 1x, <?php echo $img_url; ?>mv_logo@2x.png 2x">
        </h2>
        <div>
        <div class="home__mv__point d-flex">
          <p class="text-center f-13 font-weight-bold col-4 mb-0">
            <span class="d-block">初期・月額費用</span>
            <img src="<?php echo $img_url; ?>mv_point_0.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>mv_point_0.png 1x, <?php echo $img_url; ?>mv_point_0@2x.png 2x">
            <span class="d-block">で始めやすい！</span>
          </p>
          <p class="text-center f-13 font-weight-bold col-4 mb-0">
            <span class="d-block">豊富な</span>
            <img src="<?php echo $img_url; ?>mv_point_28.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>mv_point_28.png 1x, <?php echo $img_url; ?>mv_point_28@2x.png 2x">
            <span class="d-block">でカスタマイズ</span>
          </p>
          <p class="text-center f-13 font-weight-bold col-4 mb-0">
            <span class="d-block">申し込みから</span>
            <img src="<?php echo $img_url; ?>mv_point_8.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>mv_point_8.png 1x, <?php echo $img_url; ?>mv_point_8@2x.png 2x">
            <span class="d-block">で開設</span>
          </p>
        </div>
        <a class="btn btn-primary f-16 text-center rounded px-5" href="<?php echo $home; ?>/consultation/">
          <span class="bg-white text-primary p-1 mr-2">無料</span>まずはオンライン相談</h3>
        </a>
        </div>
      </div>
    </div>
    <!-- ▲ テキスト -->
  </div>
  <!-- ▼ パターン画像 -->
  <img class="home__mv__pattern-1" src="<?php echo $img_url; ?>mv_pattern_1.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>mv_pattern_1.png 1x, <?php echo $img_url; ?>mv_pattern_1@2x.png 2x">
  <img class="home__mv__pattern-2 d-none d-md-block" src="<?php echo $img_url; ?>mv_pattern_2.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>mv_pattern_2.png 1x, <?php echo $img_url; ?>mv_pattern_2@2x.png 2x">
  <!-- ▲ パターン画像 -->
</div>
<!-- ▲ メインビジュアル -->

<!-- ▼ テイクイーツが選ばれる理由 -->
<div class="home__reason">
  <div class="container py-main">
    <h2 class="f-32 font-weight-bold text-center mb-5">テイクイーツが<br class="d-block d-md-none">選ばれる理由</h2>
    <div class="home__reason__wrap d-md-flex justify-content-between flex-wrap">
      <!-- ▼ 理由① -->
      <div class="home__reason__item d-flex align-items-center bg-white shadow">
        <img src="<?php echo $img_url; ?>reason_free.png" alt="初期・月額費用が無料で利用可" srcset="<?php echo $img_url; ?>reason_free.png 1x, <?php echo $img_url; ?>reason_free@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-4">
          初期・月額費用が
          <br><span>無料</span>で利用可
        </h3>
      </div>
      <!-- ▲ 理由① -->
      <!-- ▼ 理由② -->
      <div class="home__reason__item d-flex align-items-center bg-white shadow">
        <img src="<?php echo $img_url; ?>reason_start.png" alt="即日開設ですぐに運用スタート" srcset="<?php echo $img_url; ?>reason_start.png 1x, <?php echo $img_url; ?>reason_start@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-4">
          即日開設で
          <br><span>すぐに運用スタート</span>
        </h3>
      </div>
      <!-- ▲ 理由② -->
      <!-- ▼ 理由③ -->
      <div class="home__reason__item d-flex align-items-center bg-white shadow">
        <img src="<?php echo $img_url; ?>reason_online.png" alt="オンライン決済でトラブルを防止" srcset="<?php echo $img_url; ?>reason_online.png 1x, <?php echo $img_url; ?>reason_online@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-4">
         オンライン決済で
          <br><span>トラブルを防止</span>
        </h3>
      </div>
      <!-- ▲ 理由③ -->
      <!-- ▼ 理由④ -->
      <div class="home__reason__item d-flex align-items-center bg-white shadow">
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

<div id="about" class="w-100 pb-5"></div>

<!-- ▼ 商品お渡しまでの流れ -->
<div class="home__about bg-light pt-main">
  <div class="container">
    <h2 class="f-36 font-weight-bold mb-5">受け渡しまでの<br>4ステップ</h2>

    <div class="home__about__wrap">
      <div class="home__about__list">
        <!-- ▼ 流れ① -->
        <div class="home__about__item">
          <img class="shadow w-100" src="<?php echo $img_url; ?>about_1.png" alt="宣伝する" srcset="<?php echo $img_url; ?>about_1.png 1x, <?php echo $img_url; ?>about_1@2x.png 2x">
          <div class="home__about__item-text">
            <p class="text-primary font-weight-bold mb-0">STEP01</p>
            <h3 class="home__about__item-ttl f-28 font-weight-bold">宣伝する</h3>
            <p class="home__about__item-text m-0">お店の注文サイトをチラシやSNS、ホームページで宣伝します。</p>
          </div>
        </div>
        <!-- ▲ 流れ① -->
        <!-- ▼ 流れ② -->
        <div class="home__about__item">
          <img class="shadow w-100" src="<?php echo $img_url; ?>about_2.png" alt="注文がはいる" srcset="<?php echo $img_url; ?>about_2.png 1x, <?php echo $img_url; ?>about_2@2x.png 2x">
          <div class="home__about__item-text">
            <p class="text-primary font-weight-bold mb-0">STEP02</p>
            <h3 class="home__about__item-ttl f-28 font-weight-bold">注文がはいる</h3>
            <p class="home__about__item-text m-0">お客様が注文サイトから商品を注文します。</p>
          </div>
        </div>
        <!-- ▲ 流れ② -->
        <!-- ▼ 流れ③ -->
        <div class="home__about__item">
          <img class="shadow w-100" src="<?php echo $img_url; ?>about_3.png" alt="通知がくる" srcset="<?php echo $img_url; ?>about_3.png 1x, <?php echo $img_url; ?>about_3@2x.png 2x">
          <div class="home__about__item-text">
            <p class="text-primary font-weight-bold mb-0">STEP03</p>
            <h3 class="home__about__item-ttl f-28 font-weight-bold">通知がくる</h3>
            <p class="home__about__item-text m-0">店舗やオーナー様の電話番号・メールに注文をお知らせします。</p>
          </div>
        </div>
        <!-- ▲ 流れ③ -->
        <!-- ▼ 流れ④ -->
        <div class="home__about__item">
          <img class="shadow w-100" src="<?php echo $img_url; ?>about_4.png" alt="商品を渡す" srcset="<?php echo $img_url; ?>about_4.png 1x, <?php echo $img_url; ?>about_4@2x.png 2x">
          <div class="home__about__item-text">
            <p class="text-primary font-weight-bold mb-0">STEP04</p>
            <h3 class="home__about__item-ttl f-28 font-weight-bold">商品を渡す</h3>
            <p class="home__about__item-text m-0">予定の時間に受け取りに来たお客様に商品をお渡しします。</p>
          </div>
        </div>
        <!-- ▲ 流れ④ -->
      </div>
    </div>
  </div>
  <div class="py-5">
    <a class="btn btn-border btn-center d-block" href="<?php echo $home; ?>/features/">機能一覧をみる</a>
  </div>
</div>
<!-- ▲ 商品お渡しまでの流れ -->

<!-- ▼ 導入店舗 -->
<div class="home__case py-5 mt-5">
  <div class="home__case__wrap container text-center bg-light py-5">
    <div class="home__case__ttl-wrap">
      <h2 class="home__case__ttl f-28 font-weight-bold  mb-3"><span class="d-block d-sm-inline">全国</span><span class="home__case__ttl-num text-primary">1,000</span>店舗で導入</h2>
    </div>
    <p class="my-4">テイクアウト需要の高い、<br>多店舗展開する店舗様にご利用いただいています。</p>
    <!-- ▼ ロゴ -->
    <div class="home__case__inner bg-white d-flex flex-wrap justify-content-center align-items-center shadow">
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
    <a class="btn btn-border btn-center d-block my-5" href="<?php echo $home; ?>/work/">事例紹介をみる</a>
  </div>
</div>
<!-- ▲ 導入店舗 -->

<!-- ▼ 料金 -->
<div class="home__price">
  <div class="container pt-main">
    <h2 class="f-32 font-weight-bold text-center mb-4">料金プラン</h2>
    <p class="home__price__point text-center bg-light font-weight-bold d-flex">
      <img class="mr-3" src="<?php echo $img_url; ?>plan_point.png" alt="ポイント" srcset="<?php echo $img_url; ?>plan_point.png 1x, <?php echo $img_url; ?>plan_point@2x.png 2x">
      <span>初期・月額費用が無料だから<br class="d-md-none">気軽に始められる！</span>
    </p>

    <div class="price__plan d-md-flex justify-content-between">
      <div class="price__plan-wrap d-flex justify-content-between">
        <!-- ▼ 初期費用 -->
        <div class="price__plan-item p-0 text-center bg-white shadow">
          <h3 class="price__plan-item-ttl bg-secondary text-white f-20 font-weight-bold">初期費用</h3>
          <div class="price__plan-item-content">
            <img src="<?php echo $img_url; ?>¥0.svg" alt="¥0">
          </div>
        </div>
        <!-- ▲ 初期費用 -->
        <!-- ▼ 月額費用 -->
        <div class="price__plan-item p-0 text-center bg-white shadow">
          <h3 class="price__plan-item-ttl bg-secondary text-white f-20 font-weight-bold">月額費用</h3>
          <div class="price__plan-item-content">
            <img src="<?php echo $img_url; ?>¥0.svg" alt="¥0">
          </div>
        </div>
        <!-- ▲ 月額費用 -->
      </div>
      <!-- ▼ サービス手数料 -->
      <div class="price__plan-item p-0 text-center bg-white shadow">
          <h3 class="price__plan-item-ttl bg-primary text-white f-20 font-weight-bold">サービス手数料</h3>
          <div class="price__plan-item-content text-center">
            <div>
              <p class="font-weight-bold mb-0">１回の注文につき</p>
              <p class="text-primary font-weight-bold mb-0"><span class="percent">8</span><span class="f-36">%</span></p>
            </div>
          </div>
        </div>
        <!-- ▲ サービス手数料 -->
    </div>
    <div class="home__price__special mt-5 py-3">
      <a href="<?php echo $home; ?>/price/#special">
        <img class="shadow mx-auto d-block" src="<?php echo $img_url; ?>plan_banner.png" alt="特別プランをご用意しております" srcset="<?php echo $img_url; ?>plan_banner.png 1x, <?php echo $img_url; ?>plan_banner@2x.png 2x">
      </a>
    </div>
    <a class="btn btn-border btn-center d-block my-5" href="<?php echo $home; ?>/price/">料金プランをみる</a>
  </div>
</div>
<!-- ▲ 料金 -->

<!-- ▼ 導入までの流れ -->
<div class="home__flow pt-main">
  <div class="container">
    <h2 class="f-32 font-weight-bold text-center mb-4"><span class="text-white bg-primary f-20 p-1 mr-3 lh-1">即日</span>導入までの流れ</h2>
    <!-- ▼ ステップ -->
    <div class="home__flow__step d-md-flex justify-content-between">
      <!-- ▼ STEP1 -->
      <div class="home__flow__step-item text-center bg-white shadow">
        <p class="home__flow__step-item-num text-primary f-16">STEP<span class="f-28 d-block">01</span></p>
        <h3 class="f-20 font-weight-bold mb-3">お申し込み</h3>
        <p class="text-muted mb-0 f-12">こちらの<a href="#toform">お申し込みフォーム</a>より<br>お気軽にお申し込みください。</p>
      </div>
      <!-- ▲ STEP1 -->
      <!-- ▼ STEP2 -->
      <div class="home__flow__step-item text-center bg-white shadow">
        <p class="home__flow__step-item-num text-primary f-16">STEP<span class="f-28 d-block">02</span></p>
        <h3 class="f-20 font-weight-bold mb-3">サイト開設</h3>
        <p class="text-muted mb-0 f-12">管理画面からメニューやオプションを<br>登録し、公開に向けて準備をします。</p>
      </div>
      <!-- ▲ STEP2 -->
      <!-- ▼ STEP3 -->
      <div class="home__flow__step-item text-center bg-white shadow">
        <p class="home__flow__step-item-num text-primary f-16">STEP<span class="f-28 d-block">03</span></p>
        <h3 class="f-20 font-weight-bold mb-3">注文受付スタート</h3>
        <p class="text-muted mb-0 f-12">準備が整いましたらサイトを公開し<br>注文の受付が始まります！</p>
      </div>
      <!-- ▲ STEP3 -->
  </div>
  <!-- ▲ ステップ -->
  <!-- ▼ サポート -->
  <div class="home__support text-center bg-light mt-5">
      <h3 class="f-28 font-weight-bold text-center mb-4">テイクイーツが<br class="d-md-none">お客様をサポート！</h3>
      <p class="text-center py-2">初期設定から運用方法までサポートしますので、<br class="d-md-none">安心してスタートいただけます。</p>
      <div class="home__support__list">
        <p class="home__support__list-item f-15 font-weight-bold mb-3">アカウント開設</p>
        <p class="home__support__list-item f-15 font-weight-bold mb-3">初期設定</p>
        <p class="home__support__list-item f-15 font-weight-bold mb-3">使い方レクチャー</p>
        <p class="home__support__list-item f-15 font-weight-bold mb-3">メニュー登録</p>
        <p class="home__support__list-item f-15 font-weight-bold mb-3">オプション登録</p>
        <p class="home__support__list-item f-15 font-weight-bold mb-3">運用アドバイス</p>
        <p class="home__support__list-item f-15 font-weight-bold mb-3">ヒアリング</p>
      </div>
    </div>
    <!-- ▲ サポート -->
</div>
<!-- ▲ 導入までの流れ -->

<!-- ▼ お問い合わせ -->
<div id="toform" class="cta pt-5 pb-5 bg-light">
  <div class="container">
    <h2 class="f-28 font-weight-bold text-center mb-4">いますぐ<br>テイクイーツを始めよう！</h2>
    <!-- <p class="mb-5 text-center">あなたのお店オリジナルの<br>モバイルオーダーサイトを無料で簡単に開設。</p> -->
    <!-- ▼ 電話番号 -->
    <div class="text-center mt-3">
      <p class="f-16 text-primary font-weight-bold mb-1">カスタマーサポートセンター</p>
      <a class="footer__cta-phone f-36 font-weight-bold" href="tel:0120538205">
        <span class="footer__cta-phone-icon"><i class="ri-phone-fill ri-md"></i></span>
        0120-538-205
      </a>
      <p class="f-12 text-muted mb-4">受付時間｜10:00~18:00（土日・祝除く）</p>
    </div>
    <!-- ▲ 電話番号 -->
    <!-- ▼ ボタン -->
    <div class="cta__btn d-flex flex-wrap justify-content-center">
        <a class="btn btn-primary f-16 text-center rounded shadow px-5 mb-3 mx-2 w-100" href="<?php echo $home; ?>/consultation/">
          <span class="bg-white text-primary p-1 mr-2">無料</span>まずはオンライン相談</h3>
        </a>
        <a class="btn btn-white f-16 text-center rounded shadow px-5 mb-3 mx-2 w-100" href="<?php echo $home; ?>/request/">
          お申し込み
        </a>
    </div>
    <!-- ▲ ボタン -->
    <!-- ▼ お問い合せフォーム -->
      <div class="cta__form bg-white mt-4">
        <h2 class="f-24 font-weight-bold text-center my-4">お問い合わせ</h2>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
        <script>
          hbspt.forms.create({
        	portalId: "8940987",
        	formId: "8dabe843-f09e-45dd-a5b5-277dcf314768"
        });
        </script>
      </div>
    <!-- ▲ お問い合せフォーム -->
  </div>
</div>
<!-- ▲ お問い合わせ -->

<!-- ▼ seoテキスト -->
<section class="seo pt-main">
  <div class="container">
    <h2 class="f-32 font-weight-bold text-center mb-4">よくあるご質問</h2>
    <p class="mb-5 text-center">お客様から多く寄せられるご質問を<br>ご紹介いたします。</p>
    <div class="seo__table">
      <dl class="seo__table-item ac bg-light mb-2">
        <dt class="seo__table-item-q font-weight-bold">始めるのに費用はかかりますか？</dt>
        <dd class="seo__table-item-a">初期導入費や月額利用料、導入費用などすべて0円です。<br>お客様からご注文が入り決済された際に【サービス手数料】が発生致します。</dd>
      </dl>
      <dl class="seo__table-item ac bg-light mb-2">
        <dt class="seo__table-item-q font-weight-bold">モバイルオーダーとは何ですか？</dt>
        <dd class="seo__table-item-a">モバイルオーダーは、お客様がスマートフォンを利用してメニューの注文・決済ができるシステムのことです。利用するお客様にとって、自宅や移動中などいつでもどこでも注文や予約を行うことができる便利なシステムです。<br>システムを導入することで、注文の受付から商品の準備、提供といった店内のオペレーションを効率化することもできます。</dd>
      </dl>
      <dl class="seo__table-item ac bg-light mb-2">
        <dt class="seo__table-item-q font-weight-bold">モバイルオーダーの事前予約以外のメリットは何ですか？</dt>
        <dd class="seo__table-item-a">モバイルオーダーは、ピークタイムの混雑や行列の解消に利用することができます。また、モバイルオーダーで事前決済を行うことで、テイクアウト（お持ち帰り）の課題であった無断キャンセルを防止することができます。<br>食品ロスや収益化の観点からもモバイルオーダーの仕組みを利用した事前決済は有効です。</dd>
      </dl>
      <dl class="seo__table-item ac bg-light mb-2">
        <dt class="seo__table-item-q font-weight-bold">モバイルオーダーは小規模店舗でも利用できますか？</dt>
        <dd class="seo__table-item-a">小規模店舗の飲食店様も利用可能です。<br>モバイルオーダーは、すでに顧客が多く店舗数が多い飲食店だけでなく、小規模な飲食店でも利用できます。<br>モバイルオーダーを導入することで注文履歴や顧客管理をデータで行うことができ、店舗運営の効率化にも繋がります。<br>少ない人数でお店を回している場合や、オーナーが一人で運営している場合、また、最近増えている一箇所で多店舗を運営するセントラルキッチンやゴーストレストランなどの業態でも便利に使うことができます。</dd>
      </dl>
      <dl class="seo__table-item ac bg-light mb-2">
        <dt class="seo__table-item-q font-weight-bold">テイクアウトの需要について知りたいです。</dt>
        <dd class="seo__table-item-a">新型コロナウイルスの感染者が増え始めた2020年3月後半あたりから「テイクアウト」や「お持ち帰り」の検索需要が増加しています。外食を避ける傾向から、家や職場の近くでテイクアウト（お持ち帰り）ができるお店を探す人が増えており、全国の都道府県で一度目の緊急事態宣言が発令された2020年4月には通常の約10倍にまで検索数が伸びています。<br>新しい生活様式も提示される中で、3密を避けて食事ができるテイクアウト（お持ち帰り）はこれからも注目されるでしょう。</dd>
      </dl>
    </div>
  </div>
</section>
<!-- ▲ seoテキスト -->

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
