<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/'; ?>

</main>

<!-- ▼ いますぐTakeEatsを始めよう！ -->
<?php if ( is_front_page() || is_home() || is_page(array('features', 'price', 'marketing')) ): //フォーム追加ページ以外 ?>

<!-- ▼ カーブ画像 -->
<img class="d-block d-md-none mt-4 w-100" src="<?php echo $img_url; ?>cta_bg_sp.png" alt="背景" srcset="<?php echo $img_url; ?>cta_bg_sp.png 1x, <?php echo $img_url; ?>cta_bg_sp@2x.png 2x">
<img class="d-none d-md-block mt-4 w-100" src="<?php echo $img_url; ?>cta_bg_pc.png" alt="背景" srcset="<?php echo $img_url; ?>cta_bg_pc.png 1x, <?php echo $img_url; ?>cta_bg_pc@2x.png 2x">
<!-- ▲ カーブ画像 -->

<div id="toform" class="cta pt-5 pb-5 bg-light">
  <div class="container">
    <h2 class="f-32 font-weight-bold text-center mb-4">いますぐ<br class="d-block d-md-none">テイクイーツを始めよう！</h2>
    <!-- <p class="mb-5 text-center">あなたのお店オリジナルの<br>モバイルオーダーサイトを無料で簡単に開設。</p> -->
    <!-- ▼ 電話番号 -->
    <div class="text-center mt-3">
      <p class="f-16 text-primary font-weight-bold mb-1">カスタマーサポートセンター</p>
      <a class="cta__phone f-32 font-weight-bold" href="tel:0120538205">0120-538-205</a>
      <p class="f-12 text-muted mb-4">受付時間｜10:00~18:00（土日・祝除く）</p>
    </div>
    <!-- ▲ 電話番号 -->
    <div class="cta__btn d-md-flex flex-wrap justify-content-center">
      <!-- ▼ お問い合わせ -->
      <a class="cta__btn-item request text-white bg-primary" href="<?php echo $home; ?>/request/">
        <h3 class="cta__btn-item-ttl f-18 font-weight-bold text-center mb-0">お申し込み</h3>
      </a>
      <!-- ▲ お問い合わせ -->
      <!-- ▼ 資料請求 -->
      <a class="cta__btn-item doc text-primary" href="<?php echo $home; ?>/seminar/">
        <h3 class="cta__btn-item-ttl f-18 font-weight-bold text-center mb-0">無料相談会を予約</h3>
      </a>
      <!-- ▲ 資料請求 -->
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

  <div class="footer__main d-block d-lg-flex flex-wrap  justify-content-between align-items-center">
    <!-- ▼ メインページリンク -->
    <div class="">
      <a class="footer__main-item d-block d-lg-inline font-weight-bold text-dark mr-4 f-16" href="<?php echo $home; ?>/features/">
        <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
        機能紹介
      </a>
      <a class="footer__main-item d-block d-lg-inline font-weight-bold text-dark mr-4 f-16" href="<?php echo $home; ?>/price/">
        <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
        料金
      </a>
      <a class="footer__main-item d-block d-lg-inline font-weight-bold text-dark mr-4 f-16" href="<?php echo $home; ?>/marketing/">
        <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
        集客・販売促進
      </a>
      <a class="footer__main-item d-block d-lg-inline font-weight-bold text-dark mr-4 f-16" href="<?php echo $home; ?>/work/">
        <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
        導入事例
      </a>
      <a class="footer__main-item d-block d-lg-inline font-weight-bold text-dark mr-4 f-16" href="<?php echo $home; ?>/column/">
        <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
        お役立ちガイド
      </a>
      <a class="footer__main-item d-block d-lg-inline font-weight-bold text-dark mr-4 f-16" href="<?php echo $home; ?>/request/">
        <img class="mr-2" src="<?php echo $img_url; ?>/arrow_or.svg" alt="矢印">
        お申し込み
      </a>
    </div>
    <!-- ▲ メインページリンク -->
  </div>

  <div class="d-block d-lg-flex justify-content-between py-4">
    <!-- ▼ 会社情報リンク -->
    <div class="footer__link__inner">
    <p class="font-weight-bold mb-2">企業情報</p>
    <a class="text-dark mr-4" href="<?php echo $home; ?>/company/">運営会社</a>
    <a class="text-dark mr-4" href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a>
    <br class="d-block d-md-none">
    <a class="text-dark mr-4" href="<?php echo $home; ?>/law/">特定商取引法に基づく表記</a>
    <a class="text-dark mr-4" href="<?php echo $home; ?>/term/">利用規約</a>
    </div>
    <!-- ▼ 会社情報リンク -->
    <!-- ▼ コピーライト -->
    <p class="f-10 text-muted mt-3">©2020 <?php bloginfo("name"); ?></p>
    <!-- ▲ コピーライト -->
  </div>

</footer>
<!-- ▲ フッター -->


<script src="<?php echo $wp_url; ?>/dist/js/bundle.js?ver=1.0.1" defer></script>
<?php wp_footer(); ?>
</body>
</html>
