<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>
<section class="sec price">
<div class="container">
<div class="price__card">
<img src="<?php echo $img_url; ?>price_card_1.png" alt="初期費用" srcset="<?php echo $img_url; ?>price_card_1.png 1x, <?php echo $img_url; ?>price_card_1@2x.png 2x">
<p class="text-md-center mb-0 small mt-3">※オプション料・通信料・振込手数料はお客様負担となります。<br>※クレジットカードでの決済の場合手数料3.6%が別途発生します。</p>
</div>
<!-- <div class="price__card mb-0">
<img src="<?php echo $img_url; ?>price_card_2.png" alt="決済手数料" srcset="<?php echo $img_url; ?>price_card_2.png 1x, <?php echo $img_url; ?>price_card_2@2x.png 2x">
</div> -->
<!-- <p class="text-md-center m-0 small mt-3">※クレジットカードでの決済の場合手数料3.6%+¥20が別途発生します。</p> -->

<h2 class="price-ttl">手数料について</h2>
<p>下記の決済方法がご利用いただけます。</p>
<div class="text-center">
<img class="d-md-block d-none mx-auto" src="<?php echo $img_url; ?>price_table_pc.png" alt="" srcset="<?php echo $img_url; ?>price_table_pc.png 1x, <?php echo $img_url; ?>price_table_pc@2x.png 2x">
<img class="d-md-none d-block mx-auto" src="<?php echo $img_url; ?>price_table_sp.png" alt="" srcset="<?php echo $img_url; ?>price_table_sp.png 1x, <?php echo $img_url; ?>price_table_sp@2x.png 2x">
</div>

<p class="text-center font-weight-bold h5 mt-4 mb-0">店舗数やご利用状況によって<br><span class="marks">特別プラン</span>をご提案いたします。<br>詳しくはお問い合わせ下さい。</p>

<div class="">
<h2 class="price-ttl">クレジットカード支払い分ご入金について</h2>
<p>個別の決済会社との契約は一切不要！ご指定の銀行口座に入金をいたします。</p>
<table class="table my-md-5 my-4">
<tbody>
<tr>
<th class="text-nowarp">銀行</th>
<td>指定なし</td>
</tr>
<tr>
<th class="text-nowarp">売上締め</th>
<td>指定なし</td>
</tr>
<tr>
<th class="text-nowarp">入金タイミング</th>
<td>翌月末払い※</td>
</tr>
<tr>
<th class="text-nowarp">振込手数料</th>
<td>¥440</td>
</tr>
</tbody>
</table>
</div>

<div>
<h3 class="h5 font-weight-bold mb-3">ご注意事項</h3>
<p>入金額が¥5,000を超えている場合に振込となります。¥5,000に満たない場合は、¥5,000を超える月まで振込保留となります。<br>（最大6ヶ月を預り期間上限として、期間経過時は、¥5,000に満たなくても振込）</p>
<div class="row justify-content-center mt-4">
<div class="col-md mr-md-3 mb-md-0 mb-3">
<img class="d-block mx-auto" src="<?php echo $img_url; ?>price_sample_1.png" alt="" srcset="<?php echo $img_url; ?>price_sample_1.png 1x, <?php echo $img_url; ?>price_sample_1@2x.png 2x">
</div>
<div class="col-md">
<img class="d-block mx-auto" src="<?php echo $img_url; ?>price_sample_2.png" alt="" srcset="<?php echo $img_url; ?>price_sample_2.png 1x, <?php echo $img_url; ?>price_sample_2@2x.png 2x">
</div>
</div>
</div>

</div>
</section>
<?php get_footer();
