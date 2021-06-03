<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>
<section class="sec features pb-0">
<div class="container">
<div class="sub__ttl">
<h2 class="text-center font-weight-bold f-32">お客様向け注文画面</h2>
</div>
<div class="features__about">
<img src="<?php echo $img_url; ?>/system_shop_about.png" alt="会員登録なしでいますぐ注文できる！">
<div class="features__about-txt">
<h3>会員登録なしで<br><span class="marks">いますぐ注文</span>できる！</h3>
<p>インストールや会員登録がなくすぐに使えて、ユーザーからも高く評価いただいています。</p>
<a href="https://system.take-eats.jp/demo-shop/" target="_blank">デモページでテイクイーツをお試し</a>
</div>
</div>
<div class="features__flow">
<div class="container bg-light">
<h3>注文の流れ</h3>
<div  id="system-flow" class="features__flow__wrap">
<div class="features__flow__wrap-inner">
<img src="<?php echo $img_url; ?>/system_order_flow_1.png" alt="商品を選択">
<p class="ttl bg-white">商品を選択</p>
<p>注文画面トップで商品の一覧を見ることができます。</p>
</div>
<div class="features__flow__wrap-inner">
<img src="<?php echo $img_url; ?>/system_order_flow_2.png" alt="商品をカートへ">
<p class="ttl bg-white">商品をカートへ</p>
<p>注文したい商品をタップし、数量・オプションを選択しカートに入れます。</p>
</div>
<div class="features__flow__wrap-inner">
<img src="<?php echo $img_url; ?>/system_order_flow_3.png" alt="商品を選択">
<p class="ttl bg-white">情報入力</p>
<p>お届け先とお支払情報を入力するだけなので数分で入力が完了します。</p>
</div>
<div class="features__flow__wrap-inner">
<img src="<?php echo $img_url; ?>/system_order_flow_4.png" alt="商品をカートへ">
<p class="ttl bg-white">注文完了！</p>
<p>入力情報を確認したら注文完了です。メールでも詳細が確認できます。</p>
</div>
</div>
</div>
</div>
</div>
<!-- お客様向け注文画面 -->
<div class="bg-light">
<div class="container py-5 mt-5">
<div class="sub__ttl">
<h2 class="text-center font-weight-bold f-32">飲食店向け管理画面</h2>
</div>

<div class="features__about">
<img src="<?php echo $img_url; ?>/system_admin_about.png" alt="会員登録なしでいますぐ注文できる！">
<div class="features__about-txt">
<h3>パソコン・スマホからでも<br><span class="marks">簡単操作</span></h3>
<p>管理画面はスマホ・パソコンどちらにも対応しており、操作しやすいデザインになっています。</p>
<a href="https://system.take-eats.jp/demo-admin/" target="_blank">デモページでテイクイーツをお試し</a>
</div>
</div>

<div class="features__main mb-4">
<div class="container bg-white mb-3">
<h3>メイン機能</h3>
<div class="features__main__wrap mt-3">
<div class="features__main__wrap-inner">
<img src="<?php echo $img_url; ?>/system_admin_main_1.png" alt="商品管理">
<p>商品管理</p>
</div>
<div class="features__main__wrap-inner">
<img src="<?php echo $img_url; ?>/system_admin_main_2.png" alt="注文管理">
<p>注文管理</p>
</div>
<div class="features__main__wrap-inner">
<img src="<?php echo $img_url; ?>/system_admin_main_3.png" alt="お知らせ更新">
<p>お知らせ更新</p>
</div>
<div class="features__main__wrap-inner">
<img src="<?php echo $img_url; ?>/system_admin_main_4.png" alt="在庫管理">
<p>在庫管理</p>
</div>
<div class="features__main__wrap-inner">
<img src="<?php echo $img_url; ?>/system_admin_main_5.png" alt="店舗管理">
<p>店舗管理</p>
</div>
<div class="features__main__wrap-inner">
<img src="<?php echo $img_url; ?>/system_admin_main_6.png" alt="会員管理">
<p>会員管理</p>
</div>
</div>
</div>
<div id="customize" class="features__main__support container">
<h3 class="mt-5">サポートサービス</h3>
<div class="features__main__support__wrap">
<div class="features__main__support__wrap-inner">
<img src="<?php echo $img_url; ?>/system_admin_main_7.png" alt="無料相談会の申込み">
<div class="features__main__support__wrap-inner-txt">
<p class="bg-white">無料相談会の<br>申込み</p>
<p>管理画面からご希望の日にちで予約することが出来ます。</p>
</div>
</div>
<div class="features__main__support__wrap-inner">
<img src="<?php echo $img_url; ?>/system_admin_main_8.png" alt="分析レポート">
<div class="features__main__support__wrap-inner-txt">
<p class="bg-white">分析レポート</p>
<p>GoogleAnalyticsと連携し、レポートを作成します。</p>
</div>
</div>

</div>
</div>
</div>

<div class="features__flow">
<div class="container">
<h3>注文の流れ</h3>
<div  id="system-flow" class="features__flow__wrap">
<div class="features__flow__wrap-inner">
<img src="<?php echo $img_url; ?>/system_admin_flow_1.png" alt="メール / FAXで注文通知">
<p class="ttl bg-white"><span class="marks">メール / 電話<br>で注文通知</p>
<p>注文時の通知方法は店舗ごとに指定していただくことが出来ます。</p>
</div>
<div class="features__flow__wrap-inner">
<img src="<?php echo $img_url; ?>/system_admin_flow_2.png" alt="料理の準備">
<p class="ttl bg-white">料理の準備</p>
<p>管理画面やメールから注文を確認し、時間に合わせて料理を準備します。</p>
</div>
<div class="features__flow__wrap-inner">
<img src="<?php echo $img_url; ?>/system_admin_flow_3.png" alt="お客様に商品をお渡し">
<p class="ttl bg-white">商品のお渡し</p>
<p>事前に決済が完了しているので、あとは商品を渡すだけです。</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- 飲食店向け管理画面 -->
</section>

<?php get_footer();
