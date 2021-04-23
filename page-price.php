<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>

<section class="sub__intro pt-main">
    <div class="container">
        <div class="sub__intro-text">
            <p class="text-primary font-weight-bold">料金について</p>
            <h2 class="sub__intro-text-ttl f-36">テイクイーツは<br>0円で始められる！</h2>
            <p class="f-16">テイクイーツはサイト制作費や導入費用など初期費用がかかりません。<br>お支払いいただくのはお客様の注文毎に発生する手数料のみなのでお気軽にスタートしていただけます。</p>
        </div>
        <div class="sub__intro-img">
            <img class="" src="<?php echo $img_url; ?>price_intro.png" alt="タブレット不要！スマホだけでも運用可能" srcset="<?php echo $img_url; ?>price_intro.png 1x, <?php echo $img_url; ?>price_intro@2x.png 2x">
        </div>
        <p class="sub__intro-bg">Get started<br>for free</p>
    </div>
</section>

<section class="price__plan pt-main">
    <div class="container">
        <h2 class="font-weight-bold text-center f-36 mb-4">2つのプランから<br class="d-md-none">お選びください</h2>
        <p class="f-16 text-center mb-5">店舗の数や機能にあわせてお選びいただける<br class="d-none d-md-block">2つのプランをご用意しております。</p>
        <div class="price__plan__list-wrap d-sm-flex justify-content-between">
            <!-- ▼ スタンダードプラン -->
            <div class="price__plan__list">
                <p class="text-center font-weight-bold mb-5 f-20">シンプルな機能を低価格で</p>
                <div class="price__plan__list__table bg-light">                    
                    <h3 class="price__plan__list__table-name text-center f-28 bg-secondary text-white">スタンダードプラン</h3>
                    <!-- ▼ 料金 -->
                    <div class="price__plan__list__table-box text-center">
                        <p class="font-weight-bold f-16">1回の注文につき</p>
                        <p class="price__plan__list__table-percent text-secondary"><span>8</span>%</p>
                        <p class>※ オンライン決済をご利用の場合は+3.6%</p>
                    </div>
                    <!-- ▲ 料金 -->
                    <!-- ▼ こんな方におすすめ -->
                    <div class="price__plan__list__table-box text-center d-flex justify-content-center">
                        <div>
                            <p class="price__plan__list__table-check">店舗数<span class="text-secondary">1~49</span>の店舗である</p>
                            <p class="price__plan__list__table-check">複雑な機能はいらない</p>
                        </div>
                    </div>
                    <!-- ▲ こんな方におすすめ -->
                    <!-- ▼ 機能 -->
                    <div class="price__plan__list__table-box text-center">
                        <p class="price__plan__list__table-func-ttl　text-center font-weight-bold mb-3 f-18">標準機能が<span>全て</span>ご利用いただけます</p>
                        <a class="price__plan__list__table-func-btn" href="<?php echo $home; ?>/features/">機能を詳しくみる</a>
                    </div>
                    <!-- ▲ 機能 -->
                    <!-- ▼ ポイント -->
                    <div class="price__plan__list__table-point text-center">
                        <p class="text-center font-weight-bold mb-3 f-20"><i class="ri-thumb-up-line text-secondary mr-2"></i>商品の登録数無制限</p>
                        <p class="f-13 text-dark">商品の登録数に制限はありません。<br>たくさんのメニューを追加料金なく<br class="d-md-none">追加いただけます。</p>
                    </div>
                    <!-- ▲ ポイント -->
                </div>
            </div>
            <!-- ▲ スタンダードプラン -->
            <!-- ▼ エンタープライズプラン -->
            <div class="price__plan__list ent">
                <p class="text-center font-weight-bold mb-5 f-20">複数店舗の管理機能に特化</p>
                <div class="price__plan__list__table bg-light">                    
                    <h3 class="price__plan__list__table-name text-center f-28 bg-info text-white">エンタープライズプラン</h3>
                    <!-- ▼ 料金 -->
                    <div class="price__plan__list__table-box text-center">
                        <p class="font-weight-bold f-16">1回の注文につき</p>
                        <p class="price__plan__list__table-percent text-info"><span>8</span>%</p>
                        <p class>※ オンライン決済をご利用の場合は+3.6%</p>
                    </div>
                    <!-- ▲ 料金 -->
                    <!-- ▼ こんな方におすすめ -->
                    <div class="price__plan__list__table-box text-center d-flex justify-content-center">
                        <div>
                            <p class="price__plan__list__table-check">店舗数<span class="text-info">50以上</span>の店舗である</p>
                            <p class="price__plan__list__table-check">機能をカスタマイズしたい</p>
                        </div>
                    </div>
                    <!-- ▲ こんな方におすすめ -->
                    <!-- ▼ 機能 -->
                    <div class="price__plan__list__table-box text-center">
                        <p class="price__plan__list__table-func-ttl　text-center font-weight-bold mb-3 f-18">標準機能が<span>全て</span>ご利用いただけます</p>
                        <a class="price__plan__list__table-func-btn" href="<?php echo $home; ?>/features/">機能を詳しくみる</a>
                    </div>
                    <!-- ▲ 機能 -->
                    <!-- ▼ ポイント -->
                    <div class="price__plan__list__table-point text-center">
                        <p class="text-center font-weight-bold mb-3 f-20"><i class="ri-thumb-up-line text-info mr-2"></i>商品の登録数無制限</p>
                        <p class="f-13 text-dark">商品の登録数に制限はありません。<br>たくさんのメニューを追加料金なく<br class="d-md-none">追加いただけます。</p>
                    </div>
                    <!-- ▲ ポイント -->
                </div>
            </div>
            <!-- ▲ エンタープライズプラン -->
        </div>
    </div>
</section>

<section class="price__plan__attn pt-main">
    <div class="container">
    <h2 class="font-weight-bold text-center f-36 mb-4">ご注意事項</h2>
    <?php the_content(); ?>
    </div>
</section>

<?php get_footer();
