<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>

<!-- ▼ 基本プラン -->
<section class="price__plan pb-main">
    <div class="container">
        <div class="price__plan-img text-center pb-4 col-12">
            <img src="<?php echo $img_url; ?>plan_ttl.png" alt="テイクイーツは¥0で始められる" srcset="<?php echo $img_url; ?>plan_ttl.png 1x, <?php echo $img_url; ?>plan_ttl@2x.png 2x">
        </div>
        <div class="price__plan d-md-flex justify-content-between pt-5">    
            <!-- ▼ 初期費用 -->
            <div class="price__plan-item p-0 text-center bg-white shadow">
            <h3 class="price__plan-item-ttl bg-secondary text-white f-20 font-weight-bold">初期費用<span class="ml-2">無料</span></h3>
            <div class="price__plan-item-content">
                <ul class="price__plan-item-list">
                    <li class="font-weight-bold text-center bg-light">サイト制作</li>
                    <li class="font-weight-bold text-center bg-light">システム導入</li>
                    <li class="font-weight-bold text-center bg-light">設定サポート</li>
                </ul>
            </div>
            </div>
            <!-- ▲ 初期費用 -->
            <!-- ▼ 月額費用 -->
            <div class="price__plan-item p-0 text-center bg-white shadow">
            <h3 class="price__plan-item-ttl bg-secondary text-white f-20 font-weight-bold">月額費用<span class="ml-2">無料</span></h3>
            <div class="price__plan-item-content">
                <ul class="price__plan-item-list">
                    <li class="font-weight-bold text-center bg-light">システム保守運用</li>
                    <li class="font-weight-bold text-center bg-light">カスタマーサポート</li>
                    <li class="font-weight-bold text-center bg-light">コンサルティング</li>
                </ul>
            </div>
            </div>
            <!-- ▲ 月額費用 -->
            <!-- ▼ サービス手数料 -->
            <div class="price__plan-item p-0 text-center bg-white shadow">
                <h3 class="price__plan-item-ttl bg-primary text-white f-20 font-weight-bold">サービス手数料</h3>
                <div class="price__plan-item-content text-center">
                    <div>
                    <p class="font-weight-bold mb-0">１回の注文につき</p>
                    <p class="text-primary font-weight-bold mb-0"><span class="percent">8</span><span class="f-36">%</span></p>
                    <p class="f-12 text-muted">※クレジットカードでの決済の場合手数料3.6%が別途発生します。</p>
                    </div>
                </div>
            </div>
            <!-- ▲ サービス手数料 -->
        </div>
    </div>
</section>
<!-- ▲ 基本プラン -->

<!-- ▼ 特別プラン -->
<section id="special" class="price__special py-main">
    <div class="container">
        <h2 class="price__special-ttl font-weight-bold text-center f-32 mb-4"><span>特別プラン</span>を<br>ご用意しております</h2> 
        <div class="d-sm-flex justify-content-center px-3">
        <div class="d-flex col-md-5 align-items-center py-3 px-0">
            <div class="col-4">
                <img src="<?php echo $img_url; ?>basic_6.png" alt="テイクイーツは¥0で始められる" srcset="<?php echo $img_url; ?>basic_6.png 1x, <?php echo $img_url; ?>basic_6@2x.png 2x">
            </div>
            <div class="px-1">
                <p class="f-16 font-weight-bold mb-1">店舗管理</p>
                <p class="f-12 text-muted mb-0">店舗ごとの営業時間や住所を設定できます。</p>
            </div>
        </div>
        <div class="d-flex col-md-5 align-items-center py-3 px-0">
            <div class="col-4">
                <img src="<?php echo $img_url; ?>sale_7.png" alt="テイクイーツは¥0で始められる" srcset="<?php echo $img_url; ?>sale_7.png 1x, <?php echo $img_url; ?>sale_7@2x.png 2x">
            </div>
            <div class="px-1">
                <p class="f-16 font-weight-bold mb-1">店舗限定商品</p>
                <p class="f-12 text-muted mb-0">特定の店舗限定の商品を販売できます。</p>
            </div>
        </div>
            
        </div>
        
        <div class="price__special-contact bg-white mt-4">
            <h3 class="f-20 pb-3">店舗数に応じて<br>特別プランをご提案いたします。</h3>
            <a class="btn btn-border btn-center d-block mt-3" href="<?php echo $home; ?>/#toform">お問い合わせはこちら</a>
        </div>
    </div>
</section>
<!-- ▲ 特別プラン -->

<section class="price__attn pt-5">
    <div class="container">
    <div class="ttl-line">
     <h2 class="font-weight-bold f-28 mb-4">ご注意事項</h2>
    </div>
    <?php the_content(); ?>
    </div>
</section>

<?php get_footer();
