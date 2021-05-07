<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/'; ?>

</main>

<!-- ▼ いますぐテイクイーツを始めよう！ -->
<?php if ( !is_front_page() && !is_home() && !is_page(array('request', 'seminar')) ): //トップページのみ ?>

<section class="pt-main bg-white">
  <div class="container">
    <div class="footer__cta bg-light">
      <h2 class="footer__cta-ttl f-32 font-weight-bold text-center">いますぐ<br class="d-md-none">テイクイーツを始めよう！</h2>
      <div class="footer__cta-wrap d-md-flex">
        <div class="col-md-6">
          <!-- ▼ 電話番号 -->
          <div class="text-center">
            <p class="f-16 text-primary font-weight-bold mb-1">カスタマーサポートセンター</p>
            <a class="footer__cta-phone f-32 font-weight-bold" href="tel:0120538205">
              <span class="footer__cta-phone-icon"><i class="ri-phone-fill ri-xs text-white"></i></span>
              0120-538-205
            </a>
            <p class="f-12 text-muted mb-4">受付時間｜10:00~18:00（土日・祝除く）</p>
          </div>
          <!-- ▲ 電話番号 -->
        </div>
        <div class="col-md-6 footer__cta-btn text-center">
          <a class="btn btn-primary d-block mb-2" href="<?php echo $home; ?>/request/">
            <span class="d-block">
              無料お申し込み
            </span>
          </a>
          <a class="btn btn-primary d-block text-secondary bg-white" href="<?php echo $home; ?>#toform">
            <span class="d-block"> 
              導入のご相談はこちら
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>
<!-- ▲ いますぐテイクイーツを始めよう！ -->

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
<div class="bg-white pt-main">
  <footer class="footer">
    <div class="footer__wrap d-flex">

      <!-- ▼ サービス情報 -->
      <div class="footer__service">
        <img src="<?php echo $img_url; ?>logo.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>logo.png 1x, <?php echo $img_url; ?>logo@2x.png 2x">
        <div class="footer__service__under">
          <!-- ▼ SNSリンク -->
          <div class="footer__service__sns p-0 mt-4">
            <a style="color: #3B5998" href="https://www.facebook.com/TakeEats.LAMP/" target="_blank" rel="noopener"><i class="ri-facebook-circle-fill ri-lg"></i></a>
            <a style="color: #1da1f2" class="mx-3" href="https://twitter.com/take_eats" target="_blank" rel="noopener"><i class="ri-twitter-fill ri-lg"></i></a>
            <a style="color: #c13584" href="https://www.instagram.com/take.eats_official/" target="_blank" rel="noopener"><i class="ri-instagram-fill ri-lg"></i></a>
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
          <p class="footer__link__ttl font-weight-bold text-muted mb-4 f-16">テイクイーツについて</p>
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
          <p class="footer__link__ttl font-weight-bold text-muted mb-4 f-16">運営会社</p>
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
</div>
<!-- ▲ フッター -->


<script src="<?php echo $wp_url; ?>/dist/js/bundle.js?ver=1.0.1" defer></script>
<?php wp_footer(); ?>
</body>
</html>
