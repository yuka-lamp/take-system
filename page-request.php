<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); the_post(); ?>
<section class="sec form">
<div class="container">
<p class="text-md-center font-weight-bold mb-5">送信内容を確認し、担当者より順次ご連絡致します。

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
