<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>

<!-- ▼ 基本プラン -->
<section class="price__plan">
    <div class="container">
        <div class="price__plan-img text-center pb-4">
            <img src="<?php echo $img_url; ?>plan_ttl.png" alt="テイクイーツは¥0で始められる" srcset="<?php echo $img_url; ?>plan_ttl.png 1x, <?php echo $img_url; ?>plan_ttl@2x.png 2x">
        </div>
        <div class="price__plan d-md-flex justify-content-between pt-5">    
            <!-- ▼ 初期費用 -->
            <div class="price__plan-item p-0 text-center bg-white shadow">
            <h3 class="price__plan-item-ttl bg-secondary text-white f-20 font-weight-bold"><span>無料</span>初期費用</h3>
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
            <h3 class="price__plan-item-ttl bg-secondary text-white f-20 font-weight-bold"><span>無料</span>月額費用</h3>
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

<section class="price__plan__attn pt-main">
    <div class="container">
    <h2 class="font-weight-bold text-center f-36 mb-4">ご注意事項</h2>
    <?php the_content(); ?>
    </div>
</section>

<?php get_footer();
