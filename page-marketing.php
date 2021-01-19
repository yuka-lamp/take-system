<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>
<section class="sec marketing pb-5">
<div class="marketing__bg pb-5">
<div class="container">
<div class="sub__ttl">
<img src="<?php echo $img_url; ?>icon_support_1.svg" alt="運営サポート" >
<h2 class="text-center">運営サポート</h2>
<p>充実のサポートで時間がない飲食店様でも<br>安心して始められます。</p>
<p></p>
</div>
<div class="marketing__wrap">
<div class="marketing__wrap-inner shadow">
<img src="<?php echo $img_url; ?>/support_1_1.png" alt="安心の無料相談" srcset="<?php echo $img_url; ?>/support_1_1.png 1x, <?php echo $img_url; ?>/support_1_1@2x.png 2x">
<h3>安心の無料相談</h3>
<p>電話やメールだけでなくLINEでもサポートを行っております。<br>相談は無料ですのでお気軽にご連絡ください。</p>
</div>
<div class="marketing__wrap-inner shadow">
<img src="<?php echo $img_url; ?>/support_1_2.png" alt="登録作業の代行" srcset="<?php echo $img_url; ?>/support_1_2.png 1x, <?php echo $img_url; ?>/support_1_2@2x.png 2x">
<h3>登録作業の代行</h3>
<p>忙しくなかなか時間が取れない飲食店様も安心。<br>導入後の商品登録や初期設定はTakeEatsにお任せください。</p>
</div>
<div class="marketing__wrap-inner shadow">
<img src="<?php echo $img_url; ?>/support_1_3.png" alt="機能の充実した管理画面" srcset="<?php echo $img_url; ?>/support_1_3.png 1x, <?php echo $img_url; ?>/support_1_3@2x.png 2x">
<h3>機能の充実した管理画面</h3>
<p>スマホにも対応した管理画面でいつでもどこでも注文の確認やサイトの更新を行うことが出来ます。<br><a href="<?php echo $home; ?>/features/">詳しくはこちら</a></p>
</div>
</div>
</div>
</div>
<div class="marketing__bg py-5">
<div class="container">
<div class="sub__ttl">
<img src="<?php echo $img_url; ?>icon_support_2.svg" alt="収益サポート" >
<h2 class="text-center">収益サポート</h2>
<p>店舗ごとに収益を上げるための<br>サポートを行っています。</p>
</div>
<div class="marketing__wrap">
<div class="marketing__wrap-inner shadow">
<img src="<?php echo $img_url; ?>/support_2_1.png" alt="安心の無料相談" srcset="<?php echo $img_url; ?>/support_2_1.png 1x, <?php echo $img_url; ?>/support_2_1@2x.png 2x">
<h3>お店検索サイトへの掲載</h3>
<p>テイクアウトに特化した<a href="https://media.take-eats.jp/" target="_blank">お店を検索できるポータルサイト<i class="fas fa-external-link-alt"></i></a>へ自動的に掲載されます。</p>
</div>
<div class="marketing__wrap-inner shadow">
<img src="<?php echo $img_url; ?>/support_2_2.png" alt="GoogleMapへの登録" srcset="<?php echo $img_url; ?>/support_2_2.png 1x, <?php echo $img_url; ?>/support_2_2@2x.png 2x">
<h3>GoogleMapへの登録</h3>
<p>Googleマイビジネスを用いて GoogleMapのテイクアウト店舗としての登録をサポートいたします。</p>
</div>
<div class="marketing__wrap-inner shadow">
<img src="<?php echo $img_url; ?>/support_2_3.png" alt="機能の充実した管理画面" srcset="<?php echo $img_url; ?>/support_2_3.png 1x, <?php echo $img_url; ?>/support_2_3@2x.png 2x">
<h3>販促物の無料配布</h3>
<p>店舗のロゴやメニューが入ったポスター ステッカー・チラシ・卓上POPを各店舗に 無料で配布いたします。</p>
</div>
</div>
</div>
</div>
</section>
<?php get_footer();
