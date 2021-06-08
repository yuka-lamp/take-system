<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>
<section class="sec seminar">
<div class="container">
<p class="text-md-center mb-5">お悩みやお申し込み方法などお気軽にご相談いただけます。<br>カレンダーから空いている日時を選択肢お申し込みフォームに進んでください。</p>

<div class="seminar-wrap">
<iframe src="https://takeeats.youcanbook.me/?noframe=true&skipHeaderFooter=true" id="ycbmiframetakeeats" style="width:100%;height:1000px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true">
</iframe>
<script>window.addEventListener && window.addEventListener("message", function(event){if (event.origin === "https://takeeats.youcanbook.me"){document.getElementById("ycbmiframetakeeats").style.height = event.data + "px";}}, false);
</script>
</div>

</div>
</section>
<?php get_footer();
