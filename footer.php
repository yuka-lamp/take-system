<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/'; ?>

</main>

<!-- ▼ いますぐテイクイーツを始めよう！ -->
<?php if ( !is_front_page() && !is_home() && !is_page(array('request', 'seminar')) ): //トップページのみ ?>

<section class="pt-main">
  <div class="footer__cta container bg-light">
    <div class="">
      <h2 class="footer__cta-ttl f-28 font-weight-bold text-center mb-5">いますぐ<br class="d-md-none">テイクイーツを始めよう！</h2>
      <div class="footer__cta-wrap d-md-flex align-items-center">
        <div class="col-md-6">
          <!-- ▼ 電話番号 -->
          <div class="text-center">
            <p class="f-16 text-primary font-weight-bold mb-1">カスタマーサポートセンター</p>
            <a class="footer__cta-phone f-36 font-weight-bold" href="tel:0120538205">
              <span class="footer__cta-phone-icon"><i class="ri-phone-fill ri-md"></i></span>
              0120-538-205
            </a>
            <p class="f-12 text-muted mb-4">受付時間｜10:00~18:00（土日・祝除く）</p>
          </div>
          <!-- ▲ 電話番号 -->
        </div>
        <div class="col-md-6 footer__cta-btn text-center">
        <a class="w-100 btn btn-primary f-16 text-center rounded shadow px-5 mb-3 mx-2" href="<?php echo $home; ?>/consultation/">
          <span class="bg-white text-primary p-1 mr-2">無料</span>まずはオンライン相談</h3>
        </a>
        <a class="w-100 btn btn-white f-16 text-center rounded shadow px-5 mb-3 mx-2" href="<?php echo $home; ?>/request/">
          お申し込み
        </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endif; ?>
<!-- ▲ いますぐテイクイーツを始めよう！ -->

<!-- ▼ サービス情報 -->

<!-- ▼ パンくず -->
<div class="pt-main pb-3">
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div id="breadcrumbs" class="container">', '</div>');
}
?>
</div>
<!-- ▲ パンくず -->

<!-- ▼ フッター -->
<div class="">
  <footer class="footer">
    <div class="container">
      <div class="d-lg-flex justify-content-between">
        <!-- ▼ サービス情報 -->
        <div class="footer__service">
          <img src="<?php echo $img_url; ?>logo.png" alt="<?php bloginfo("name"); ?>" srcset="<?php echo $img_url; ?>logo.png 1x, <?php echo $img_url; ?>logo@2x.png 2x">
          <p></p>
        </div>
        <!-- ▲ サービス情報 -->

        <!-- ▼ リンク一覧 -->
        <div class="footer__link d-md-flex p-0">
          <!-- ▼ リンクリスト -->
          <div class="d-flex flex-wrap w-100">
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
              <a class="footer__link-line-item" href="<?php echo $home; ?>/consultation/">オンライン相談会</a>
            </div>
            <div class="footer__link-line">
            <a class="footer__link-line-item" href="https://takeeats.zendesk.com/hc/ja/categories/900000324626-%E9%A3%B2%E9%A3%9F%E5%BA%97%E5%90%91%E3%81%91%E3%83%98%E3%83%AB%E3%83%97/" target="_blank">よくある質問<i class="ri-external-link-line ml-1"></i></a>
              <a class="footer__link-line-item" href="https://media.take-eats.jp/" target="_blank">テイクイーツ注文<i class="ri-external-link-line ml-1"></i></a>
              <!-- <a class="footer__link-line-item" href="<?php echo $home; ?>/" target="_blank">パートナープログラム<i class="ri-external-link-line ml-1"></i></a> -->
              <a class="footer__link-line-item" href="https://takuhai.take-eats.jp/" target="_blank">タク配<i class="ri-external-link-line ml-1"></i></a>
              <!-- <a class="footer__link-line-item" href="<?php echo $home; ?>/work/" target="_blank">管理画面ログイン<i class="ri-external-link-line ml-1"></i></a> -->
              <a class="footer__link-line-item" href="https://lamp.jp/" target="_blank">運営会社<i class="ri-external-link-line ml-1"></i></a>
            </div>
          </div>
          <!-- ▲ リンクリスト -->
        </div>


      </div>
      <!-- ▲ リンク一覧 -->
      
      <div class="footer__bottom d-flex justify-content-between mt-5">
        <div class="d-lg-flex text-center">
          <div class="footer__bottom-sns">
            <a style="color: #1da1f2" href="https://twitter.com/take_eats" target="_blank" rel="noopener"><i class="ri-twitter-fill ri-lg"></i></a>
            <a style="color: #c13584" class="mx-3" href="https://www.instagram.com/take.eats_official/" target="_blank" rel="noopener"><i class="ri-instagram-fill ri-lg"></i></a>
            <a style="color: #1877f2" href="https://www.facebook.com/TakeEats.LAMP/" target="_blank" rel="noopener"><i class="ri-facebook-circle-fill ri-lg"></i></a>
          </div>
          <!-- ▼ コピーライト -->
          <p class="f-12 text-muted my-0 ml-4">©2020 <?php bloginfo("name"); ?></p>
          <!-- ▲ コピーライト -->
        </div>
        <div class="footer__bottom-link">
          <a class="d-inline-block text-muted f-12" href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a>
          <a class="d-inline-block text-muted f-12" href="<?php echo $home; ?>/law/">特定商取引法に基づく表記</a>
          <a class="d-inline-block text-muted f-12" href="<?php echo $home; ?>/term/">利用規約</a>
        </div>
      </div>
      
    </div>
  </footer>
</div>
<!-- ▲ フッター -->


<script src="<?php echo $wp_url; ?>/dist/js/bundle.js?ver=1.0.1" defer></script>
<?php wp_footer(); ?>
</body>
</html>
