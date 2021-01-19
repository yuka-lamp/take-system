<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/'; ?>

</main>

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
    </div>
    <!-- ▲ メインページリンク -->
    <!-- ▼ お問い合わせ ・ 資料請求 -->
    <div class="ctabtn">
      <div class="ctabtn__wrap d-flex w-100">
        <a class="ctabtn__item col-6 bg-primary text-white font-weight-bold" href="<?php echo $home; ?>/contact/">
          <img class="mr-2" src="<?php echo $img_url; ?>/icon_contact.svg" alt="お問い合わせアイコン">
          お問い合わせ
        </a>
        <a class="ctabtn__item col-6 bg-secondary text-white font-weight-bold" href="<?php echo $home; ?>/contact/">
          <img class="mr-2" src="<?php echo $img_url; ?>/icon_doc.svg" alt="資料請求アイコン">
          資料請求
        </a>
      </div>
    </div>
    <!-- ▲ お問い合わせ ・ 資料請求 -->
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
