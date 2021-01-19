<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); the_post(); ?>
<section class="sec form">
<div class="container">
<p class="text-md-center font-weight-bold mb-5">送信内容を確認させていただき、担当者よりご連絡させていただきます。
<div class="footer__cta__tel text-center mb-4">
<div class="lp__cta__box">
<a class="smooth-scroll shadow lp__cta__box_btn" href="<?php echo $home; ?>/seminar"><span class="min-txt">お悩みの事や質問などお気軽にご相談ください</span><span class="free">無料</span>WEB説明会に参加する</a>
<a class="smooth-scroll shadow lp__cta__box_btn" href="tel:075-600-2721">TEL 075-600-2721<span class="min-txt">10：00〜18：00（土日祝除く）</span></a>
</div>
<p class="small">10：00〜18：00（土日祝除く）</p>
</div>

<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
<script>
  hbspt.forms.create({
  portalId: "8940987",
  formId: "b0b9f1d4-15ca-4d39-a41e-96c0db37312c"
});
</script>

</div>
</section>
<?php get_footer();
