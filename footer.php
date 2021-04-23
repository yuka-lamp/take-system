<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/'; ?>

</main>

<!-- ▼ いますぐTakeEatsを始めよう！ -->
<?php if ( !is_front_page() && !is_home() && !is_page(array('request', 'seminar')) ): //トップページのみ ?>

<!-- ▼ カーブ画像 -->
<img class="d-block d-md-none mt-4 w-100" src="<?php echo $img_url; ?>cta_bg_sp.png" alt="背景" srcset="<?php echo $img_url; ?>cta_bg_sp.png 1x, <?php echo $img_url; ?>cta_bg_sp@2x.png 2x">
<img class="d-none d-md-block mt-4 w-100" src="<?php echo $img_url; ?>cta_bg_pc.png" alt="背景" srcset="<?php echo $img_url; ?>cta_bg_pc.png 1x, <?php echo $img_url; ?>cta_bg_pc@2x.png 2x">
<!-- ▲ カーブ画像 -->

<div id="toform" class="cta pt-5 pb-5 bg-light">
  <div class="container">
    <h2 class="f-32 font-weight-bold text-center mb-4">いますぐ<br>テイクイーツを始めよう！</h2>
    <!-- <p class="mb-5 text-center">あなたのお店オリジナルの<br>モバイルオーダーサイトを無料で簡単に開設。</p> -->
    <!-- ▼ 電話番号 -->
    <div class="text-center mt-3">
      <p class="f-16 text-primary font-weight-bold mb-1">カスタマーサポートセンター</p>
      <a class="cta__phone f-32 font-weight-bold" href="tel:0120538205">0120-538-205</a>
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

<?php endif; ?>
<!-- ▲ いますぐTakeEatsを始めよう！ -->

<!-- ▼ seoテキスト -->
<?php if (  is_front_page() ||  is_home() ) : ?>

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

<?php endif; ?>
<!-- ▲ seoテキスト -->


<!-- ▼ フッター -->
<footer class="footer">
  <div class="footer__wrap d-flex">

    <!-- ▼ サービス情報 -->
    <div class="footer__service">
      <img src="<?php echo $img_url; ?>logo_white.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>logo_white.png 1x, <?php echo $img_url; ?>logo_white@2x.png 2x">
      <div class="footer__service__under">
        <!-- ▼ SNSリンク -->
        <div class="p-0 mt-4">
          <a class="text-white" href="https://www.facebook.com/TakeEats.LAMP/" target="_blank" rel="noopener"><i class="ri-facebook-circle-fill ri-2x"></i></a>
          <a class="text-white mx-3" href="https://twitter.com/take_eats" target="_blank" rel="noopener"><i class="ri-twitter-fill ri-2x"></i></a>
          <a class="text-white" href="https://www.instagram.com/take.eats_official/" target="_blank" rel="noopener"><i class="ri-instagram-fill ri-2x"></i></a>
        </div>
        <!-- ▲ SNSリンク -->
        <!-- ▼ コピーライト -->
        <p class="f-10 text-muted mt-4">©2020 <?php bloginfo("name"); ?></p>
        <!-- ▲ コピーライト -->
      </div>
    </div>
    <!-- ▲ サービス情報 -->

    <!-- ▼ リンク一覧 -->
    <div class="footer__link d-md-flex w-100 p-0">
      <!-- ▼ テイクイーツについて -->
      <div class="footer__link__takeeats">
        <p class="footer__link__ttl font-weight-bold text-white mb-4 f-16">テイクイーツについて</p>
        <div class="d-flex flex-wrap">
          <div class="footer__link-line">
            <a class="footer__link-line-item" href="<?php echo $home; ?>/features/">機能紹介</a>
            <a class="footer__link-line-item" href="<?php echo $home; ?>/price/">料金</a>
            <a class="footer__link-line-item" href="<?php echo $home; ?>/work/">導入事例</a>
            <a class="footer__link-line-item" href="<?php echo $home; ?>/column/">お役立ちガイド</a>
          </div>
          <div class="footer__link-line">
            <a class="footer__link-line-item" href="<?php echo $home; ?>/systeminfo/">ニュース</a>
            <a class="footer__link-line-item" href="<?php echo $home; ?>#toform">お問い合わせ</a>
            <a class="footer__link-line-item" href="<?php echo $home; ?>/request/">お申し込み</a>
            <a class="footer__link-line-item" href="<?php echo $home; ?>/seminar/">無料相談会</a>
          </div>
          <div class="footer__link-line">
            <a class="footer__link-line-item" href="https://takeeats.zendesk.com/hc/ja/categories/900000324626-%E9%A3%B2%E9%A3%9F%E5%BA%97%E5%90%91%E3%81%91%E3%83%98%E3%83%AB%E3%83%97/" target="_blank">よくある質問<i class="ri-external-link-line ml-1"></i></a>
            <!-- <a class="footer__link-line-item" href="<?php echo $home; ?>/" target="_blank">パートナープログラム<i class="ri-external-link-line ml-1"></i></a>
            <a class="footer__link-line-item" href="<?php echo $home; ?>/marketing/" target="_blank">タク配について<i class="ri-external-link-line ml-1"></i></a>
            <a class="footer__link-line-item" href="<?php echo $home; ?>/work/" target="_blank">管理画面ログイン<i class="ri-external-link-line ml-1"></i></a> -->
          </div>
        </div>
      </div>
      <!-- ▲ テイクイーツについて -->
      <!-- ▼ 運営会社 -->
      <div class="footer__link__campany">
        <p class="footer__link__ttl font-weight-bold text-white mb-4 f-16">運営会社</p>
        <div class="footer__link-line">
          <a class="footer__link-line-item" href="https://lamp.jp/" target="_blank">株式会社ランプ<i class="ri-external-link-line ml-1"></i></a>
          <a class="footer__link-line-item" href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a>
          <a class="footer__link-line-item" href="<?php echo $home; ?>/law/">特定商取引法に基づく表記</a>
          <a class="footer__link-line-item" href="<?php echo $home; ?>/term/">利用規約</a>
        </div>
      </div>
      <!-- ▲ 運営会社 -->
    </div>
    <!-- ▲ リンク一覧 -->

  </div>
</footer>
<!-- ▲ フッター -->


<script src="<?php echo $wp_url; ?>/dist/js/bundle.js?ver=1.0.1" defer></script>
<?php wp_footer(); ?>
</body>
</html>
