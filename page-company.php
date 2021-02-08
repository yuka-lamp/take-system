<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>
<section class="sec company">
<div class="container">
<table class="table table-striped table-borderless mx-auto">
<tbody>
<tr>
<th>社名</th>
<td>株式会社ランプ</td>
</tr>
<tr>
<th>TEL</th>
<td>075-600-2721<br>
<a href="https://lamp.jp/contact/">お問い合わせはこちら&nbsp;&gt;</a></td>
</tr>
<tr>
<th>事業内容</th>
<td>・テイクアウト専用プラットフォーム「テイクイーツ」の開発・運営
<br>・全国のテイクアウトできるお店検索メディア「テイクアウトお店検索」の企画・運営
<br><a href="https://lamp.jp/service/">サービス一覧&nbsp;&gt;</a></td>
</tr>
<tr>
<th>代表者</th>
<td>代表取締役　河野 匠</td>
</tr>
<tr>
<th>設立</th>
<td>2017年2月（創業2011年5月）</td>
</tr>
</tbody>
</table>
</div>
</section>
<?php get_footer();
