<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<!-- ▼ メインビジュアル -->
<div class="lp__hero">
  <div class="container">
    <div class="lp__hero-wrap">
      <div class="lp__hero-txt">
        <div class="text-center primary">
          <img class="mb-2" src="<?php echo $img_url; ?>/lp_hero_1day.png" alt="最短1営業日でスタート" srcset="<?php echo $img_url; ?>/lp_hero_1day.png 1x, <?php echo $img_url; ?>/lp_hero_1day@2x.png 2x">
          <h2>モバイルオーダーの<span>導</span><span>入</span>なら</h2>
          <img class="logo" src="<?php echo $img_url; ?>/lp_hero_logo.png" alt="TakeEatsロゴ" srcset="<?php echo $img_url; ?>/lp_hero_logo.png 1x, <?php echo $img_url; ?>/lp_hero_logo@2x.png 2x">
          <!-- <p>テイクアウト特化で高機能オリジナル</p> -->
          <div class="mt-4 text-center">
            <a class="btn btn-outline-primary" href="<?php echo $home; ?>#lpform">お問い合わせ</a>
          </div>
        </div>
      </div>
      <div class="lp__hero-demo">
        <img src="<?php echo $img_url; ?>/mv_lp_pict_pc.png" alt="スマホ画面" srcset="<?php echo $img_url; ?>/mv_lp_pict_pc.png 1x, <?php echo $img_url; ?>/mv_lp_pict_pc@2x.png 2x">
      </div>
    </div>
  </div>
</div>
<!-- ▲ メインビジュアル -->

<!-- ▼ お知らせ -->
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
    <time data-time="<?php the_time('Y-m-d'); ?>" class="small mr-2 pr-2"><?php the_time('Y.m.d'); ?></time>
    <p><?php the_title(); ?></p>
    </a>
  </div>
  <?php endforeach; wp_reset_postdata(); ?>
  </div>
</section>
<!-- ▲ お知らせ -->

<!-- ▼ 事例一覧 -->
<section class="lp__case py-5">
  <div class="container">
    <h2 class="lp-ttl2"><span class="marks">全国350店舗</span>で<br>ご利用いただいております</h2>
  </div>
  <div id="lpcase" class="lp__case-slide">
    <!-- ▲ ロゴ -->
    <!-- ▼ ロゴ -->
    <div class="lp__case-slide__inner">
    <div class="lp__case-slide__inner-balloon">スイーツ</div>
    <div class="lp__case-slide__inner-logo">
    <span><img src="<?php echo $img_url; ?>lp_logo_1.png" alt="マールブランシュ" srcset="<?php echo $img_url; ?>lp_logo_1.png 1x, <?php echo $img_url; ?>lp_logo_1@2x.png 2x"></span>
    </div>
    </div>
    <!-- ▲ ロゴ -->
    <!-- ▼ ロゴ -->
    <div class="lp__case-slide__inner">
    <div class="lp__case-slide__inner-balloon">お寿司</div>
    <div class="lp__case-slide__inner-logo">
    <span><img src="<?php echo $img_url; ?>lp_logo_2.png" alt="寿しのむさし" srcset="<?php echo $img_url; ?>lp_logo_2.png 1x, <?php echo $img_url; ?>lp_logo_2@2x.png 2x"></span>
    </div>
    </div>
    <!-- ▲ ロゴ -->
    <!-- ▼ ロゴ -->
    <!-- <div class="lp__case-slide__inner">
    <div class="lp__case-slide__inner-balloon">食パン</div>
    <div class="lp__case-slide__inner-logo">
    <span><img src="<?php echo $img_url; ?>lp_logo_nogami.png" alt="のがみ" srcset="<?php echo $img_url; ?>lp_logo_nogami.png 1x, <?php echo $img_url; ?>lp_logo_nogami@2x.png 2x"></span>
    </div>
    </div> -->
    <!-- ▲ ロゴ -->
    <!-- ▼ ロゴ -->
    <div class="lp__case-slide__inner">
    <div class="lp__case-slide__inner-balloon">居酒屋</div>
    <div class="lp__case-slide__inner-logo">
    <span><img src="<?php echo $img_url; ?>lp_logo_suishin.png" alt="SUISHIN" srcset="<?php echo $img_url; ?>lp_logo_suishin.png 1x, <?php echo $img_url; ?>lp_logo_suishin@2x.png 2x"></span>
    </div>
    </div>
    <!-- ▲ ロゴ -->
    <!-- ▼ ロゴ -->
    <div class="lp__case-slide__inner">
    <div class="lp__case-slide__inner-balloon">惣菜</div>
    <div class="lp__case-slide__inner-logo">
    <span><img src="<?php echo $img_url; ?>lp_logo_daidomon.png" alt="大同門" srcset="<?php echo $img_url; ?>lp_logo_daidomon.png 1x, <?php echo $img_url; ?>lp_logo_daidomon@2x.png 2x"></span>
    </div>
    </div>
    <!-- ▲ ロゴ -->
    <!-- ▼ ロゴ -->
    <div class="lp__case-slide__inner">
    <div class="lp__case-slide__inner-balloon">弁当</div>
    <div class="lp__case-slide__inner-logo">
    <span><img src="<?php echo $img_url; ?>lp_logo_tarehan.png" alt="たれ半" srcset="<?php echo $img_url; ?>lp_logo_tarehan.png 1x, <?php echo $img_url; ?>lp_logo_tarehan@2x.png 2x"></span>
    </div>
    </div>
    <!-- ▲ ロゴ -->
    <!-- ▼ ロゴ -->
    <div class="lp__case-slide__inner">
    <div class="lp__case-slide__inner-balloon">和菓子</div>
    <div class="lp__case-slide__inner-logo">
    <span><img src="<?php echo $img_url; ?>lp_logo_eirakuya.png" alt="永楽屋" srcset="<?php echo $img_url; ?>lp_logo_eirakuya.png 1x, <?php echo $img_url; ?>lp_logo_eirakuya@2x.png 2x"></span>
    </div>
    </div>
    <!-- ▲ ロゴ -->
    <!-- ▼ ロゴ -->
    <div class="lp__case-slide__inner">
    <div class="lp__case-slide__inner-balloon">和食</div>
    <div class="lp__case-slide__inner-logo">
    <span><img src="<?php echo $img_url; ?>lp_logo_3.png" alt="さいき家" srcset="<?php echo $img_url; ?>lp_logo_3.png 1x, <?php echo $img_url; ?>lp_logo_3@2x.png 2x"></span>
    </div>
    </div>
    <!-- ▲ ロゴ -->
    <!-- ▼ ロゴ -->
    <div class="lp__case-slide__inner">
    <div class="lp__case-slide__inner-balloon">カフェ</div>
    <div class="lp__case-slide__inner-logo">
    <span><img src="<?php echo $img_url; ?>lp_logo_6.png" alt="プルクワ" srcset="<?php echo $img_url; ?>lp_logo_6.png 1x, <?php echo $img_url; ?>lp_logo_6@2x.png 2x"></span>
    </div>
    </div>
    <!-- ▲ ロゴ -->
  </div>

  <!-- ▼ ボタン -->
  <!-- <div class="mt-5 text-center">
    <a class="btn btn-outline-primary" href="<?php echo $home; ?>/work/">もっと見る</a>
  </div> -->
  <!-- ▲ ボタン -->

</section>
<!-- ▲ 事例一覧 -->

<!-- ▼ アバウト -->
<section class="py-5 bg-light d-md-none">
  <div class="container">
    <h2 class="lp-ttl2"><span class="marks">事前予約・決済</span>で<br>回転率アップ！</h2>
  </div>
  <img class="w-100" src="<?php echo $img_url; ?>about_main_sp.png" alt="TakeEatsの流れ" srcset="<?php echo $img_url; ?>about_main_sp.png 1x, <?php echo $img_url; ?>about_main_sp@2x.png 2x">

  <!-- ▼ ボタン -->
  <!-- <div class="mt-md-5 mt-5 text-center">
    <a class="btn btn-outline-primary mt-3" href="<?php echo $home; ?>/features/">詳しくみる</a>
  </div> -->
  <!-- ▲ ボタン -->

</section>

<section class="d-md-block d-none">
  <div class="container text-center">
    <img src="<?php echo $img_url; ?>about_main_pc.png" alt="TakeEatsの流れ" srcset="<?php echo $img_url; ?>about_main_pc.png 1x, <?php echo $img_url; ?>about_main_pc@2x.png 2x">
  </div>
</section>
<!-- ▲ アバウト -->

<!-- ▼ 特徴 -->
<section class="lp__feature py-5 bg-light">
  <div class="container">
  <h2 class="lp-ttl2">TakeEatsの特長</h2>

    <!-- ▼ リスト -->
    <div class="lp__feature__list">

      <!-- ▼ リスト - 特徴1 -->
      <div class="lp__feature__list__inner">
        <div class="lp__feature__list-wrap">
        <!-- イラスト -->
        <div class="lp__feature__list-img">
          <img src="<?php echo $img_url; ?>lp_feature_1.png" alt="事前予約 / 事前決済で安心・安全！" srcset="<?php echo $img_url; ?>lp_feature_1.png 1x, <?php echo $img_url; ?>lp_feature_1@2x.png 2x">
        </div>
        <!-- テキスト -->
        <div class="lp__feature__list-text">
        <p class="comment">独自型！</p>
        <h3 class="lp-ttl2">自由度の高い拡張性</h3>
        <p>お店によってお好みでカスタマイズが可能です。テーマカラーの変更からポイントの発行まで幅広く対応しております。</p>
        <!-- <a class="btn btn-outline-primary mt-3" href="<?php echo $home; ?>/features#customize">詳しくみる</a> -->
        </div>
        </div>
      </div>
      <!-- ▲ リスト - 特徴1 -->

      <!-- ▼ リスト - 特徴2 -->
      <div class="lp__feature__list__inner">
        <div class="lp__feature__list-wrap">
        <!-- イラスト -->
        <div class="lp__feature__list-img">
        <img src="<?php echo $img_url; ?>lp_feature_2.png" alt="安心・安全" srcset="<?php echo $img_url; ?>lp_feature_2.png 1x, <?php echo $img_url; ?>lp_feature_2@2x.png 2x">
        </div>
        <!-- テキスト -->
        <div class="lp__feature__list-text">
        <p class="comment">充実サポート！</p>
        <h3 class="lp-ttl2">お店ごとに集客支援</h3>
        <p>媒体と違い店舗ごとでの集客支援と容器や在庫管理の運用サポートが充実しています。</p>
        <!-- <a class="btn btn-outline-primary mt-3" href="<?php echo $home; ?>/marketing/">詳しくみる</a> -->
        </div>
        </div>
      </div>
      <!-- ▲ リスト - 特徴2 -->

      <!-- ▼ リスト - 特徴3 -->
      <div class="lp__feature__list__inner">
        <div class="lp__feature__list-wrap">
        <!-- イラスト -->
        <div class="lp__feature__list-img">
        <img src="<?php echo $img_url; ?>lp_feature_3.png" alt="シンプル" srcset="<?php echo $img_url; ?>lp_feature_3.png 1x, <?php echo $img_url; ?>lp_feature_3@2x.png 2x">
        </div>
        <!-- テキスト -->
        <div class="lp__feature__list-text">
        <p class="comment">かんたん！</p>
        <h3 class="lp-ttl2">シンプルで使いやすい注文画面</h3>
        <p>インストールや会員登録がなくすぐに使えて、操作しやすいデザインになっています。</p>
        <!-- <a class="btn btn-outline-primary mt-3" href="<?php echo $home; ?>/features/">詳しくみる</a> -->
        </div>
        </div>
      </div>
      <!-- ▲ リスト - 特徴3 -->

    </div>
    <!-- ▲ リスト -->
  </div>
</section>
<!-- ▲ 特徴 -->

<!-- ▼ CTA -->
<div class="lp__cta mt-5">
  <div class="container">
    <div class="lp__cta__box">
      <a class="smooth-scroll shadow lp__cta__box_btn" href="<?php echo $home; ?>/seminar"><div><span class="min-txt">お悩みの事や質問などお気軽にご相談ください</span><span class="free">無料</span>WEB説明会に参加する</div></a>
      <a class="smooth-scroll shadow lp__cta__box_btn" href="<?php echo $home; ?>/#lpform"><div>今すぐお問い合わせ</div></a>
    </div>
  </div>
</div>
<!-- ▲ CTA -->

<!-- ▼ サポート -->
<section class="py-5 lp__support bg-light">
  <div class="container">
    <h2 class="lp-ttl2 mt-5 mb-5">さらに、TakeEatsが<br class="d-block d-md-none"><span class="marks">無料</span>ですべてサポート！</h2>

    <p class="lp__support-ttl d-block w-100 text-center font-weight-bold">運用サポート</p>

    <!-- ▼ 運用サポート -->
    <div class="lp__support__list d-block d-md-flex">
      <!-- LINE -->
      <div class="lp__support__list-item col-12 col-md-4 d-flex justify-content-between">
        <div class="">
          <img src="<?php echo $img_url; ?>lp_support_1_1.png" alt="LINEでのサポート" srcset="<?php echo $img_url; ?>lp_support_1_1.png 1x, <?php echo $img_url; ?>lp_support_1_1@2x.png 2x">
        </div>
        <div class="col-11">
          <h3 class="lp__support__list-item-ttl">LINEでのサポート</h3>
          <p class="lp__support__list-item-text m-0">サポートセンターのLINEを追加いただくと、お客様のLINEアカウントからお問い合わせいただくことができます。</p>
        </div>
      </div>
      <!-- 電話 -->
      <div class="lp__support__list-item col-12 col-md-4 d-flex justify-content-between">
        <div class="">
          <img src="<?php echo $img_url; ?>lp_support_1_2.png" alt="電話でのサポート" srcset="<?php echo $img_url; ?>lp_support_1_2.png 1x, <?php echo $img_url; ?>lp_support_1_2@2x.png 2x">
        </div>
        <div class="col-11">
          <h3 class="lp__support__list-item-ttl">電話でのサポート</h3>
          <p class="lp__support__list-item-text m-0">サポートセンターへ電話でお問い合わせいただけます。管理している各お客様の状況から迅速に対応いたします。</p>
        </div>
      </div>
      <!-- メール -->
      <div class="lp__support__list-item col-12 col-md-4 d-flex justify-content-between">
        <div class="">
          <img src="<?php echo $img_url; ?>lp_support_1_3.png" alt="メールでのサポート" srcset="<?php echo $img_url; ?>lp_support_1_3.png 1x, <?php echo $img_url; ?>lp_support_1_3@2x.png 2x">
        </div>
        <div class="col-11">
          <h3 class="lp__support__list-item-ttl">メールでのサポート</h3>
          <p class="lp__support__list-item-text m-0">サポートセンターへメールでお問い合わせいただけます。お問い合わせを確認しましら担当者が迅速に返信いたします。</p>
        </div>
      </div>
    </div>
    <p class="small text-center w-100 d-block mt-3">サポート対応時間 平日　10:00〜18:00<br>メール及びLINEでの受付のみ365日24時間可能</p>
    <!-- ▲ 運用サポート -->

    <p class="lp__support-ttl d-block w-100 text-center font-weight-bold mt-5">販促支援・コンサルティング</p>

    <!-- ▼ 運用サポート -->
    <div class="lp__support__list d-block d-md-flex">
      <!-- 無料相談会 -->
      <div class="lp__support__list-item col-12 col-md-4 d-flex justify-content-between">
        <div class="">
          <img src="<?php echo $img_url; ?>lp_support_2_1.png" alt="無料相談会" srcset="<?php echo $img_url; ?>lp_support_2_1.png 1x, <?php echo $img_url; ?>lp_support_2_1@2x.png 2x">
        </div>
        <div class="col-11">
          <h3 class="lp__support__list-item-ttl">無料相談会</h3>
          <p class="lp__support__list-item-text m-0">管理画面から無料相談会を予約いただくと、ZOOMにて弊社コンサルタントが現状の分析と改善案のご提案を行います。</p>
        </div>
      </div>
      <!-- WEBセミナーの開催 -->
      <div class="lp__support__list-item col-12 col-md-4 d-flex justify-content-between">
        <div class="">
          <img src="<?php echo $img_url; ?>lp_support_2_2.png" alt="WEBセミナーの開催" srcset="<?php echo $img_url; ?>lp_support_2_2.png 1x, <?php echo $img_url; ?>lp_support_2_2@2x.png 2x">
        </div>
        <div class="col-11">
          <h3 class="lp__support__list-item-ttl">WEBセミナーの開催</h3>
          <p class="lp__support__list-item-text m-0">導入いただいた飲食店様向けの販促セミナーに無料で参加いただけます。WEBで実践的な内容をレクチャー致します。</p>
        </div>
      </div>
      <!-- 販促ツールの追加発注 -->
      <div class="lp__support__list-item col-12 col-md-4 d-flex justify-content-between">
        <div class="">
          <img src="<?php echo $img_url; ?>lp_support_2_3.png" alt="販促ツールの追加発注" srcset="<?php echo $img_url; ?>lp_support_2_3.png 1x, <?php echo $img_url; ?>lp_support_2_3@2x.png 2x">
        </div>
        <div class="col-11">
          <h3 class="lp__support__list-item-ttl">販促ツールの追加発注</h3>
          <p class="lp__support__list-item-text m-0">初回にご提供するチラシなどの販促ツールの追加発注を管理画面より承って発送いたします。</p>
        </div>
      </div>
    </div>
    <!-- ▲ 運用サポート -->

    <!-- ▼ ボタン -->
    <!-- <div class="mt-4 text-center">
      <a class="btn btn-outline-primary" href="<?php echo $home; ?>/marketing/">詳しくみる</a>
    </div> -->
    <!-- ▲ ボタン -->
  </div>
  </div>
</section>
<!-- ▲ サポート -->

<!-- ▼ 料金 -->
<section class="py-5 lp__price">
  <div class="container">
    <h2 class="lp-ttl2"><span class="marks">料金について</span></h2>
    <!-- ▼ コンテンツ -->
    <div class="lp__price__wrap shadow">
      <div class="lp__price__wrap-imgwrap">
        <img src="<?php echo $img_url; ?>lp_price_illust.png" alt="初期費用・月額利用料¥0で導入可能！" srcset="<?php echo $img_url; ?>lp_price_illust.png 1x, <?php echo $img_url; ?>lp_price_illust@2x.png 2x">
      </div>
      <div class="lp__price__wrap-txtwrap">
        <img src="<?php echo $img_url; ?>lp_price.png" alt="初期費用・月額利用料¥0で導入可能！" srcset="<?php echo $img_url; ?>lp_price.png 1x, <?php echo $img_url; ?>lp_price@2x.png 2x">
        <p class="small my-3 text-md-center">※オプションをご選択の場合は別途費用がかかります。
        <br>※クレジットカードでの決済の場合手数料3.6%が別途発生します。</p>

        <!-- ▼ ボタン -->
        <!-- <div class="mt-2 text-center">
          <a class="btn btn-outline-primary" href="<?php echo $home; ?>/price/">詳しくみる</a>
        </div> -->
        <!-- ▲ ボタン -->

      </div>
    </div>
    <!-- ▲ コンテンツ -->
  </div>
</section>
<!-- ▲ 料金 -->

<!-- ▼ 特別プラン -->
<section class="lp__special">
  <div class="container">
    <p class="text-center font-weight-bold py-3 h5">店舗数やご利用状況によって<br><span class="marks">特別プラン</span>をご提案いたします。<br>詳しくはお問い合わせ下さい。</p>
  </div>
</section>
<!-- ▲ 特別プラン -->

<!-- ▼ 流れ -->
<section id="flow" class="sec home__flow mb-5">
  <div class="container">
    <h2 class="lp-ttl2">最短1営業日で導入可能</h2>
    <!-- ▼ コンテンツ -->
    <div class="home__flow__wrap">
      <div class="home__flow__wrap-img">
        <img src="<?php echo $img_url; ?>flow_img_1.png" alt="イラスト" srcset="<?php echo $img_url; ?>flow_img_1.png 1x, <?php echo $img_url; ?>flow_img_1@2x.png 2x">
      </div>
      <ol class="home__flow__list">
        <!-- ▼ ステップ -->
        <li class="home__flow__list__inner">
          <div class="home__flow__list__inner-step">STEP<span>01</span></div>
          <div class="home__flow__list__inner-txt">
          <h3>お問い合わせ</h3>
          <p>お問い合わせフォームより必要事項のご入力をお願い致します。<br>担当者よりお電話にてご連絡致します。</p>
          </div>
        </li>
        <!-- ▲ ステップ -->

        <!-- ▼ ステップ -->
        <li class="home__flow__list__inner">
          <div class="home__flow__list__inner-step">STEP<span>02</span></div>
          <div class="home__flow__list__inner-txt">
          <h3>アカウント発行</h3>
          <p>お店の専用サイトを作成しアカウントを発行致します。</p>
          </div>
        </li>
        <!-- ▲ ステップ -->

        <!-- ▼ ステップ -->
        <li class="home__flow__list__inner">
          <div class="home__flow__list__inner-step">STEP<span>03</span></div>
          <div class="home__flow__list__inner-txt">
          <h3>メニュー登録</h3>
          <p>販売する商品の登録を行います。<br>(※無料代行サービス実施中)</p>
          </div>
        </li>
        <!-- ▲ ステップ -->

        <!-- ▼ ステップ -->
        <li class="home__flow__list__inner">
          <div class="home__flow__list__inner-step">STEP<span>04</span></div>
          <div class="home__flow__list__inner-txt">
          <h3>ご利用スタート</h3>
          <p>準備が整ったら早速注文の受け付けを行いましょう。</p>
          </div>
        </li>
        <!-- ▲ ステップ -->
      </ol>
    </div>
    <!-- ▲ コンテンツ -->

    <!-- ▼ ボタン -->
    <!-- <div class="mt-md-5 my-4 text-center">
      <a class="btn btn-outline-primary" href="<?php echo $home; ?>/flow/">詳しくみる</a>
    </div> -->
    <!-- ▲ ボタン -->

  </div>
</section>
<!-- ▲ 流れ -->

<section id="lpform" class="lp__form mt-5">
  <img src="<?php echo $img_url; ?>icon_cta.png" alt="イラスト" srcset="<?php echo $img_url; ?>icon_cta.png 1x, <?php echo $img_url; ?>icon_cta@2x.png 2x">
  <div class="container">
    <div class="text-center lp__form-top">
      <img src="<?php echo $img_url; ?>cta_top.png" alt="初期費用0円" srcset="<?php echo $img_url; ?>cta_top.png 1x, <?php echo $img_url; ?>cta_top@2x.png 2x">
    </div>
    <div class="lp__cta">
      <div class="lp__cta__box">
        <a class="smooth-scroll shadow" href="<?php echo $home; ?>/seminar"><div><span class="min-txt">お悩みの事や質問などお気軽にご相談ください</span><span class="free">無料</span>WEB説明会に参加する</div></a>
        <a class="smooth-scroll shadow" href="<?php echo $home; ?>/#lpform"><div>今すぐお問い合わせ</div></a>
      </div>
    </div>
    <h3 class="py-3">お問い合わせフォーム</h3>
    <div class="bg-white p-3">
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
      <script>
        hbspt.forms.create({
      	portalId: "8940987",
      	formId: "8dabe843-f09e-45dd-a5b5-277dcf314768"
      });
      </script>
    </div>
  </div>
</section>

<section class="lp__column pt-5">
  <img class="home__flow-illust" src="<?php echo $img_url; ?>flow_illust_1.png" alt="背景">
  <div class="container">
    <h2 class="lp-ttl2"><span class="marks">お役立ちガイド</span></h2>
    <p>モバイルオーダーを始める上で知っておきたい情報から売上アップのノウハウをお届け</p>
    <div class="lp__column__wrap">
      <?php
      $args = [
          'posts_per_page' => 3,
          'post_type' => 'blog',
          'orderby' => 'date',
          'order' => 'ASC',
      ];
      $my_posts = get_posts($args);
      foreach ($my_posts as $post):
      setup_postdata($post);
      $id = get_the_ID();
      $thumbnail = get_the_post_thumbnail_url($id, 'large');
      $ttl = get_the_title();
      $permalink = get_the_permalink();
      ?>
      <div class="lp__column-inner">
        <a href="<?php echo $permalink ?>">
        <div class="lp__column-inner-img">
          <img src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl ?>">
        </div>
        <div class="lp__column-inner-txt">
          <p><?php echo $ttl ?></p>
        </div>
        </a>
      </div>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>

    <div class="mt-5 text-center">
    <a class="btn btn-outline-primary" href="<?php echo $home; ?>/column/">一覧をみる</a>
    </div>

  </div>
</section>


<section id="txt-content" class="py-5">
<div class="single">
<div class="container">
<div>
<h2 class="mt-0">今こそ、テイクアウト（お持ち帰り）を始めるチャンス！</h2>
<p>コロナ禍、アフターコロナの影響で外食を控える人が増え、中食に注目が集まっています。</p>
<p>自宅でお店の味を食べることができるテイクアウト（お持ち帰り）をする人も増えており、客足が遠のく飲食店は、今こそテイクアウト（お持ち帰り）を始めるチャンスだと言えるでしょう。</p>
<p>テイクアウト（お持ち帰り）はお客様にとっては、人との接触を最低限にすることで感染対策を行うことができ、また、手軽に利用できることから支持を集めています。</p>
<p>実際にテイクアウト（お持ち帰り）を始める飲食店も増えていますが、店舗運営やテイクアウト（お持ち帰り）のフローの確立、効率化が欠かせません。</p>
<p>また、お客様に安心してごご利用いただけるよう3密を避けるための対策や、食中毒対策を行いながら美味しいお料理を提供する方法を検討していく必要があります。</p>
</div>
<div>
<h2>テイクアウト（お持ち帰り）の需要は拡大中！</h2>
<p>新型コロナウイルスの感染者が増え始めた2020年3月後半あたりから「テイクアウト」や「お持ち帰り」の検索需要が増加しています。</p>
<p>外食を避ける傾向から、家や職場の近くでテイクアウト（お持ち帰り）ができるお店を探す人が増えており、全国の都道府県で緊急事態宣言が発令された4月には通常の約10倍にまで検索数が伸びています。</p>
<p>それほど、テイクアウト（お持ち帰り）の需要は拡大しており、アフターコロナの中でも継続されると予想されます。</p>
<p>新しい生活様式も提示される中で、3密を避けて食事ができるテイクアウト（お持ち帰り）はこれからも注目されるでしょう。</p>
</div>
<div>
<h2>飲食店が注目するモバイルオーダー</h2>
<p>テイクアウトを行っている飲食店や、これから始める飲食店が注目しているのがモバイルオーダーです。</p>
<p>モバイルオーダーは、注文の受付から商品の準備、提供といった店内のオペレーションを効率化できるだけではなく、利用するお客様にとっても便利な仕組みです。</p>
<p>お客様はモバイルオーダーで注文から決済までを、自宅や移動中などいつでもどこでも行うことができます。</p>
<p>コロナ禍で外食を控えたり、3密を防止する生活様式が定着しつつある中、モバイルオーダーもテイクアウト（お持ち帰り）の増加とともに定番場していると言えるでしょう。</p>
<p>大手チェーン店では、マクドナルドやスターバックス、すき家などでモバイルオーダーが導入されており、ピークタイムの混雑や行列の解消を可能にしています。</p>
<p>また、モバイルオーダーで事前決済を行うことで、テイクアウト（お持ち帰り）の課題であった無断キャンセルを防止することができます。</p>
<p>食品ロスや収益化の観点からもモバイルオーダーの仕組みを利用した事前決済を有効だと言えるでしょう。</p>
<p>モバイルオーダーは、すでに顧客が多く店舗数が多い飲食店だけでなく、小規模な飲食店でも利用できます。</p>
<p>モバイルオーダーを導入することで注文履歴や顧客管理をデータで行うことができ、店舗運営の効率化にも繋がります。</p>
<p>少ない人数でお店を回している場合や、オーナーが一人で運営している場合、また、最近増えている一箇所で多店舗を運営するセントラルキッチンやゴーストレストランなどの業態でも便利に使うことができます。</p>
</div>
<!-- <h2>オフィス街でも人気のテイクアウト（お持ち帰り）</h2>
<p>京都のオフィス街では、これまでであれば、お昼時にはオフィスの近くのお店でランチを楽しむ人が大勢いましたが、その姿は一変しました。</p>
<p>外食を避ける人が増えているため、多くのお店がお弁当などのテイクアウト（お持ち帰り）を始め、それを持ち帰って中食をする人が増えています。</p>
<p>今後も感染対策の観点から、中食の需要が増えると考えられるでしょう。</p>
<p>しかし、テイクアウト（お持ち帰り）を始めたばかりの飲食店は集客ができていなかったり、コロナのダメージで広告費をかけられなかったりすることから、お客様にテイクアウト（お持ち帰り）を始めたことを認知されていないということも起こっています。</p>
<p>お客様に見つけてもらえないことから売上や利益につながらないこともあります。</p>
<p>また、自宅での食事用にテイクアウト（お持ち帰り）を行う場合、ネット検索を行う人も多いですが、テイクアウト（お持ち帰り）の情報をネット上で掲載できないことから、集客ができていない飲食店も多いのが現状です。</p>
<p>テイクアウト（お持ち帰り）を始める場合には、集客・宣伝も合わせて検討する必要があります。</p>
<h2>テイクアウト（お持ち帰り）の成功はシステムの導入が鍵</h2>
<p>テイクアウト（お持ち帰り）を始める飲食店が多いですが、お店に来てくださるお客様の対応と平行してテイクアウト（お持ち帰り）の対応も行うのは難しく、手が回らないという声もあります。</p>
<p>特に、新たにテイクアウト（お持ち帰り）を始めた飲食店は、料理の予約・決済のフローが整っておらず、電話での注文受け付けや、手作業での受注管理になっていることが多々あります。</p>
<p>これでは、注文数を増やしたり、利益をアップさせることが難しいため、テイクアウト（お持ち帰り）を成功させるには予約や決済のシステムで、店内の提供までのフローを整えることと、お客様の利便性を高めて、新規顧客とリピーターの両方の獲得を狙うことが重要です。</p>
<h2>予約・決済システムで利益アップ</h2>
<p>テイクアウト（お持ち帰り）の予約・決済ができるTakeEats（テイクイーツ）を利用することで、利益のアップを狙うことができます。</p>
<p>テイクアウト（お持ち帰り）では、予約ができる仕組みを整えることで、お客様の確保が可能です。</p>
<p>お店に取りに行く時間を指定できるので、お店はそれに合わせて料理を準備するだけなので、予約システムは作業の無駄を省くことにつながります。</p>
<p>また、予約と合わせてお客様がスキマ時間にメニューや値段を確認したり、お店の場所を確認したりできるページを作ることで、お客様にとって利便性の高いお店になります。</p>
<p>TakeEatsでは、お店ごとのページを作ることができるため、メニューの掲載やお知らせの掲載など、自社のホームページのように活用いただけます。</p>
<p>また、予約と合わせて決済システムを導入することで、キャンセル防止につながります。</p>
<p>テイクアウト（お持ち帰り）では、お店が用意したお料理を取りに行かないお客様や、取りに行くのを忘れてしまうお客様も一定数いらっしゃいます。</p>
<p>その場合、食品ロスが発生してしまうため、テイクアウト（お持ち帰り）で利益をアップさせたい飲食店にとっては最も避けたいことです。</p>
<p>TakeEatsの決済システムでは、オンライン決済でクレジットカードを使用した事前決済を選択できるため、キャンセルを防止することができます。</p>
<p>予約システムを導入する場合は、合わせて事前決済の導入も考えることで、収益化につながります。</p>
<p>テイクアウト（お持ち帰り）を新たな収益源として、お店の利益を高めましょう。</p>
<h2>店舗のオペレーションを効率化</h2>
<p>テイクアウト（お持ち帰り）を始める際に確認しておきたいのが、店舗のオペレーションです。</p>
<p>お客様から注文を受け、料理を作り、お渡しするまでの店舗でのフローを確立しておきましょう。</p>
<p>TakeEatsでは、Webでの注文の受け付けと受注管理が可能です。</p>
<p>注文があった場合、管理画面で注文日時や顧客情報、受取店舗、注文内容、受取日時を確認することができるので、効率化が可能です。</p>
<p>スマートフォンやタブレットでも確認ができるため、パソコンを置くことが難しい厨房での受注状況の確認も可能です。</p>
<p>シンプルで使いやすい管理画面は、Webでの作業に慣れていない人もスムーズにお使いいただけます。</p>
<p>FAXでの通知もオプションとしてご利用いただけますので、予約・決済システムの導入で店舗運営の効率化が可能です。</p>
<p>また、提供するメニューの登録や修正もお店側で可能です。</p>
<p>旬の食材を使用したお料理の提供のため季節によってメニューが変わる場合には、店舗で修正が可能です。</p>
<h2>テイクアウト（お持ち帰り）の顧客満足度がアップ</h2>
<p>TakeEatsでは、お客様が注文時に使用するオリジナルの店舗ページもご用意可能です。</p>
<p>新しくテイクアウト（お持ち帰り）を始めた飲食店様は、ホームページの制作や改修に費用がかけられなかったり、できたとしても時間がかかってしまい、開始までのスピードが遅れてしまいます。</p>
<p>一刻も早くテイクアウト（お持ち帰り）を始めるには、1営業日対応可能なTakeEatsがおすすめです。</p>
<p>TakeEatsではお客様ごとのページを作成するため、店舗のホームページの代替としてもご利用いただけます。</p>
<p>シンプルなデザインで幅広い年齢層の方が使いやすい店舗ページは、電話などでの予約と比べると手間がかかりにくく、お客様にとってのテイクアウト（お持ち帰り）のハードルを下げることにもつながります。</p>
<p>システムを導入し簡単に予約・注文ができることで、お客様の満足度が高まり、リピーター化にもつながるでしょう。</p>
<h2>システムの導入で人気店の混雑解消で3密を回避</h2>
<p>TakeEatsは外食の人気店の混雑解消にも一役買います。</p>
<p>人気店ではテイクアウト（お持ち帰り）と店内飲食の両方を行っていることも多く、昼食時や夕食時、モーニングを行うカフェでは朝の時間帯などピークタイムにはどうしても混雑が発生してしまいます。</p>
<p>人が集まる3密を避けることが浸透している中では、混雑を理由にたとえテイクアウト（お持ち帰り）であっても飲食店の利用を避けるお客様もいらっしゃいます。</p>
<p>しかし、TakeEatsの予約・決済システムを活用すれば、お客様は事前に注文と決済ができるため、お店では商品を受取るだけです。</p>
<p>お店での滞在時間が短くなるため、3密を避けることにつながります。</p>
<p>より多くのお客様がテイクアウト（お持ち帰り）の事前予約・決済を利用するようになれば、人気店の混雑時にも、商品を受取るのみのお客様で3密を回避できます。</p>
<p>これからの生活様式に対応したメニューの提供を行うには、テイクアウト（お持ち帰り）のシステムの導入が欠かせません。</p>
<h2>テイクアウト（お持ち帰り）はどんな商品が人気？</h2>
<p>テイクアウト（お持ち帰り）は、手軽に食べられるもの、自宅でお店の本格的な味が楽しめるもの、デザート感覚でお持ち帰りできるものなどが人気です。</p>
<p>どんな商品が人気になるか、つまり、どんな商品であれば利益につながるのかは、お店があるエリアの特徴や客層に合わせるのがベストです。</p>
<p>オフィスエリアにある飲食店の場合は、ランチにお手軽に食べることができるお弁当や、一人暮らし層が家に持って帰って食べることができる一人用のお惣菜などが人気です。</p>
<p>住宅街の場合は、ファミリー層に向けて家族で食べることができるお惣菜やオードブルなど大人数を想定したテイクアウト（お持ち帰り）メニューを用意すると良いでしょう。</p>
<p>また、繁華街の場合には、コーヒーや紅茶、ティータイムに食べることができる甘いものなどもおすすめです。</p>
<p>お客様のニーズに合わせたテイクアウト（お持ち帰り）メニューは人気を集めやすく、利益にもつながります。</p>
<p>また、予約や決済のシステムも合わせてお客様に提供することで、利便性を高め、満足度の高いお店を作り上げることができます。</p>
<h2>テイクアウト（お持ち帰り）は販促が重要</h2>
<p>テイクアウト（お持ち帰り）で利益をアップさせるときに、システムの導入と合わせて考えなければいけないのは、販促の方法です。</p>
<p>特に、テイクアウト（お持ち帰り）を始めたばかりの飲食店の場合、集客を行うためには宣伝が欠かせません。</p>
<p>ホームページやSNSをすでに所持している飲食店の場合は、投稿を行ったり、ホームページの改修を行うことでお客様への周知が可能ですが、別途費用が必要になったり、手間がかかってしまいます。</p>
<p>また、チラシやポスターの作成にも時間と費用がかかり、テイクアウト（お持ち帰り）の宣伝をうまくできないという声もあります。</p>
<p>TakeEatsでは、お客様ごとのオリジナルページを作成するため、テイクアウト専用の宣伝用ホームページや、メニュー表の代わりとしてご利用いただけます。</p>
<p>また、集客サポートとして販売促進アイテムの配布を行っており、追加発注も管理画面よりご利用いただけます。</p>
<p>予約・決済のシステムでテイクアウト（お持ち帰り）をサポートするだけでなく、売上アップや収益化を見据えたサポートも合わせてご利用いただけます。</p>
<h2>テイクアウト（お持ち帰り）の集客に欠かせないMEO</h2>
<p>飲食店がテイクアウト（お持ち帰り）の集客を行う場合、MEOが欠かせません。</p>
<p>MEOはMap Engine Optimizationの略称で、Googleで検索された場合に、GoogleMapの上位表示に表示をさせることです。</p>
<p>例えば、飲食店の店名や店舗名で調べた時にマップとともに表示させることで、お客様にお店の場所を伝えやすくなります。</p>
<p>競合の多いラーメン業界などでは、「エリア名＋ラーメン」「近くのラーメン」などで検索された場合にいかに上位に入るかが売上を左右します。</p>
<p>テイクアウト（お持ち帰り）の場合も同様に、「エリア名＋テイクアウト」「近くのテイクアウト」などで検索された場合に正しく表示されるように設定しておくことで、売上アップにつながります。</p>
<p>MEOではGoogleマイビジネスの設定が欠かせません。</p>
<p>お店でテイクアウト（お持ち帰り）をやっていることが表示されるように設定し、情報を正しく入力しておくことが大切です。</p>
<p>Googleマイビジネスの情報は新規顧客の獲得だけでなく、既存顧客の方にも有益な情報を提供することにつながるため、必ず設定を行いましょう。</p> -->
</div>
</div>
</section>

</main>
<!-- #main -->

<footer class="footer mt-0">
<div class="container py-5">
<div class="footer__link__inner">
<h3>サービス紹介</h3>
<ul>
<li><a href="<?php echo $home; ?>/features/">機能紹介</a></li>
<li><a href="<?php echo $home; ?>/price/">料金</a></li>
<li><a href="<?php echo $home; ?>/marketing/">集客・販売促進</a></li>
<li><a href="<?php echo $home; ?>/work/">導入事例</a></li>
<li><a href="<?php echo $home; ?>/flow/">導入の流れ</a></li>
<li><a href="<?php echo $home; ?>/column/">お役立ちガイド</a></li>
<li><a href="<?php echo $home; ?>/request/">お申し込み</a></li>
</ul>
</div>
<!-- footer__link__inner -->
<div class="footer__link__inner">
<h3>企業情報</h3>
<ul>
<li><a href="<?php echo $home; ?>/company/">運営会社</a></li>
<li><a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a></li>
<li><a href="<?php echo $home; ?>/law/">特定商取引法に基づく表記</a></li>
<li><a href="<?php echo $home; ?>/term/">利用規約</a></li>
</ul>
</div>
<!-- footer__link__inner -->
</div>
</div>
<!-- footer__link -->
<div id="toform" class="lp__cta mt-5 footer-ctabtn">
<div class="lp__cta__box">
<a class="smooth-scroll shadow lp__cta__box_btn" href="<?php echo $home; ?>/seminar"><div><span class="free">無料</span>WEB説明会</div></a>
<a class="smooth-scroll shadow lp__cta__box_btn" href="<?php echo $home; ?>/#lpform"><div>お問い合わせ</div></a>
</div>
</div>
<!-- <a class="footer-ctabtn" href="<?php echo $home; ?>/#lpform"><span class="mb-1">＼ 初期・月額費用0円 ／</span>お申し込み</a> -->
</footer>
<!-- #footer -->

<p class="copy">©2020 <?php bloginfo("name"); ?></p>

<script src="<?php echo $wp_url; ?>/dist/js/bundle.js?ver=1.0.1" defer></script>
<?php wp_footer(); ?>
<script>
const toform = document.getElementById("toform");

document.addEventListener("click", e => {
const target = e.target;
if (!target.classList.contains("smooth-scroll")) return;
e.preventDefault();
const targetId = target.hash;
document.querySelector(targetId).scrollIntoView({
behavior: "smooth",
block: "start"
});
});

window.addEventListener("scroll", () => {
const srollVal = window.pageYOffset;
const observer = new IntersectionObserver((entries) => {
if (srollVal < 500) {
toform.style.bottom = '-100%';
} else {
if (entries[0].isIntersecting == true) {
toform.style.bottom = '-100%';
} else {
toform.style.bottom = 0;
}
}
});
observer.observe(document.getElementById("lpform"));
});
</script>
</body>
</html>
