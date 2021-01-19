<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/'; ?>
</main>

<footer class="footer">
<?php if (!is_page('contact') && !is_page('request')): ?>
<div class="container">
<div class="footer__cta">
<div class="footer__cta-wrap">
<div class="row align-items-center mb-4">
<div class="col-md-8">
<h2 class="footer__cta-ttl">あなたのお店でも<br><span>テイクアウト</span>を始めましょう！</h2>
<p class="footer__cta-txt">TakeEatsはお申込みからご利用スタートまで最短即日！<br>あなたのお店オリジナルのテイクアウトサイトを無料で簡単に開設。</p>
</div>
<div class="col-md-4 mt-md-0 mt-3 text-center">
<img src="<?php echo $wp_url; ?>/dist/images/cta_pict_01.png" alt="人物イラスト" srcset="<?php echo $wp_url; ?>/dist/images/cta_pict_01.png 1x, <?php echo $wp_url; ?>/dist/images/cta_pict_01@2x.png 2x">
</div>
</div>
<div class="footer__cta__links">
<a class="footer__cta__links-request" href="<?php echo $home; ?>/#lpform">お問い合わせ</a>
<a class="footer__cta__links-tel" href="tel:075-600-2721">
<span>TEL</span>
<span>075-600-2721</span>
<small>10：00〜18：00（土日祝除く）</small>
</a>
<a class="footer__cta__links-contact" href="<?php echo $home; ?>/seminar/"><span>無料相談はこちら</span></a>
</div>
</div>
<img class="footer__cta-icon" src="<?php echo $wp_url; ?>/dist/images/bg_cta_icon.png" alt="takeeats">
</div>
<!-- cta -->
</div>
<?php endif; ?>
<div class="footer__link<?php if (is_page('contact') || is_page('request')) {
    echo " pt-5";
} ?>">
<div class="container">
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
<li><a href="<?php echo $home; ?>/privacy-policy/">プライバシーポリシー</a></li>
<li><a href="<?php echo $home; ?>/law/">特定商取引法に基づく表記</a></li>
<li><a href="https://lamp.jp" target="_blank">運営会社</a></li>
<li><a href="<?php echo $home; ?>/term/">利用規約</a></li>
</ul>
</div>
<!-- footer__link__inner -->
</div>
</div>
<!-- footer__link -->
<?php if(!is_page(['request', 'contact'])): ?>


<?php endif; ?>
</footer>

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
  if (srollVal < 500) {
      toform.style.bottom = '-100%';
    } else {
      toform.style.bottom = 0;
    }
});
</script>
</body>
</html>
