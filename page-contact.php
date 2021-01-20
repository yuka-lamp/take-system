<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>
<section class="sec form">
<div class="container">
<p class="text-md-center mb-5">お問い合わせご希望の方は下記フォームよりどうぞ。
<br>送信内容を確認させていただき、担当者よりご連絡させていただきます。
<span class="d-block small mt-3"><i class="text-danger small mr-1">※</i>は入力必須項目です。</span></p>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
<script>
  hbspt.forms.create({
	portalId: "8940987",
	formId: "8dabe843-f09e-45dd-a5b5-277dcf314768"
});
</script>
</div>
</section>
<?php get_footer();
