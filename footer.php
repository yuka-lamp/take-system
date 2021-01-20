<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/'; ?>

</main>

<!-- ▼ いますぐTakeEatsを始めよう！ -->
<?php if (!is_page('contact') && !is_page('request')): //フォーム追加ページ以外 ?>

<!-- ▼ 背景 -->
<img class="d-block d-md-none mt-4" src="<?php echo $img_url; ?>cta_bg_sp.png" alt="背景" srcset="<?php echo $img_url; ?>cta_bg_sp.png 1x, <?php echo $img_url; ?>cta_bg_sp@2x.png 2x">
<img class="d-none d-md-block mt-4" src="<?php echo $img_url; ?>cta_bg_pc.png" alt="背景" srcset="<?php echo $img_url; ?>cta_bg_pc.png 1x, <?php echo $img_url; ?>cta_bg_pc@2x.png 2x">
<!-- ▲ 背景 -->

<div class="cta pt-5 pb-5 bg-light">
  <div class="container">
    <h2 class="f-32 font-weight-bold text-center mb-4">いますぐ<br>TakeEatsを始めよう！</h2>
    <p class="mb-5 text-center">あなたのお店オリジナルの<br>モバイルオーダーサイトを無料で簡単に開設。</p>
    <div class="cta__btn d-md-flex justify-content-between">
      <!-- ▼ お問い合わせ -->
      <a class="cta__btn-item contact text-white bg-primary" href="<?php echo $home; ?>/contact/">
        <h3 class="cta__btn-item-ttl f-26 font-weight-bold mb-3">お問い合わせ</h3>
        <p class="f-12 m-0">お悩みごとや導入の質問など<br>お気軽にご相談ください！</p>
      </a>
      <!-- ▲ お問い合わせ -->
      <!-- ▼ 資料請求 -->
      <a class="cta__btn-item doc text-primary" href="<?php echo $home; ?>/seminar/">
        <h3 class="cta__btn-item-ttl f-26 font-weight-bold mb-3">無料相談会</h3>
        <p class="f-12 m-0">導入を検討されている方のために<br>無料で相談会を行います！</p>
      </a>
      <!-- ▲ 資料請求 -->
    </div>
    <!-- ▼ 電話番号 -->
    <div class="text-center mt-5">
      <p class="f-16 text-primary font-weight-bold mb-1">カスタマーサポートセンター</p>
      <a class="cta__phone f-32 font-weight-bold" href="tel:0756002721">075-600-2721</a>
      <p class="f-12 text-muted mt-2">受付時間｜10:00~18:00（土日・祝除く）</p>
    </div>
    <!-- ▲ 電話番号 -->
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
        <dt class="seo__table-item-q font-weight-bold">テイクアウトって？</dt>
        <dd class="seo__table-item-a">カフェやレストランを始め、専門店やスイーツ店など幅広いお店でご利用いただいております。</dd>
      </dl>
      <dl class="seo__table-item ac bg-light mb-2">
        <dt class="seo__table-item-q font-weight-bold">テイクアウトって？</dt>
        <dd class="seo__table-item-a">カフェやレストランを始め、専門店やスイーツ店など幅広いお店でご利用いただいております。</dd>
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
