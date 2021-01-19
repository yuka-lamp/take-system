<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<!-- ▼ メインビジュアル -->
<div class="home__mv">
  <div class="container">
  </div>
</div>
<!-- ▲ メインビジュアル -->

<!-- ▼ TakeEatsが選ばれる理由 -->
<div class="home__reason bg-light">
  <div class="container py-main">
    <h2 class="f-32 font-weight-bold text-center mb-5">TakeEatsが選ばれる理由</h2>
    <div class="home__reason__wrap d-md-flex flex-wrap">
      <!-- ▼ 理由① -->
      <div class="home__reason__item d-flex align-items-center col-md-6">
        <img class="" src="<?php echo $img_url; ?>reason_tablet.png" alt="タブレット不要！スマホだけでも運用可能" srcset="<?php echo $img_url; ?>reason_tablet.png 1x, <?php echo $img_url; ?>reason_tablet@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-3">
          タブレット不要！
          <br><span>スマホだけ</span>でも運用可能
        </h3>
      </div>
      <!-- ▲ 理由① -->
      <!-- ▼ 理由② -->
      <div class="home__reason__item d-flex align-items-center col-md-6 mt-4">
        <img class="" src="<?php echo $img_url; ?>reason_free.png" alt="初期費用・月額費用が無料で利用できる" srcset="<?php echo $img_url; ?>reason_free.png 1x, <?php echo $img_url; ?>reason_free@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-3">
          初期費用・月額費用が
          <br><span>無料</span>で利用できる
        </h3>
      </div>
      <!-- ▲ 理由② -->
      <!-- ▼ 理由③ -->
      <div class="home__reason__item d-flex align-items-center col-md-6 mt-4">
        <img class="" src="<?php echo $img_url; ?>reason_up.png" alt="注文のデジタル化で売上アップ！" srcset="<?php echo $img_url; ?>reason_up.png 1x, <?php echo $img_url; ?>reason_up@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-3">
          注文のデジタル化で
          <br><span>売上アップ</span>！
        </h3>
      </div>
      <!-- ▲ 理由③ -->
      <!-- ▼ 理由④ -->
      <div class="home__reason__item d-flex align-items-center col-md-6 mt-4">
        <img class="" src="<?php echo $img_url; ?>reason_line.png" alt="お店もお客様も安心の並ばない注文" srcset="<?php echo $img_url; ?>reason_line.png 1x, <?php echo $img_url; ?>reason_line@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-3">
          お店もお客様も安心の
          <br><span>並ばない</span>注文
        </h3>
      </div>
      <!-- ▲ 理由④ -->
    </div>
  </div>
</div>
<!-- ▲ TakeEatsが選ばれる理由 -->

<!-- ▼ 商品お渡しまでの流れ -->
<div class="home__about">
  <div class="container py-main">
    <h2 class="f-32 font-weight-bold text-center mb-5">TakeEatsが選ばれる理由</h2>
    <p class="mb-5 text-center">お客様が注文してから店舗受取に来るまでの<br>全体の流れを紹介いたします。</p>

    <div class="home__about__wrap d-md-flex flex-wrap justify-content-between">
      <!-- ▼ 流れ① -->
      <div class="home__about__item bg-light">
        <div class="home__about__item-text">
          <h3 class="home__about__item-ttl f-26 text-center py-4 text-primary font-weight-bold m-0">サイト流入</h3>
          <p class="text-center py-4 m-0">モールとは違い、店舗様独自のサイトを作成できます。<br>SNSやチラシなどで宣伝し流入を増やしましょう！</p>
        </div>
        <div class="text-center">
          <img class="" src="<?php echo $img_url; ?>about_1.png" alt="サイト流入" srcset="<?php echo $img_url; ?>about_1.png 1x, <?php echo $img_url; ?>about_1@2x.png 2x">
        </div>
      </div>
      <!-- ▲ 流れ① -->
      <!-- ▼ 流れ② -->
      <div class="home__about__item bg-light">
        <div class="home__about__item-text">
          <h3 class="home__about__item-ttl f-26 text-center py-4 text-primary font-weight-bold m-0">予約 / 決済</h3>
          <p class="text-center py-4 m-0">カートから予約完了までは最短30秒！<br>ストレスなく注文いただけます。</p>
        </div>
        <div class="text-center">
          <img class="" src="<?php echo $img_url; ?>about_2.png" alt="予約 / 決済" srcset="<?php echo $img_url; ?>about_2.png 1x, <?php echo $img_url; ?>about_2@2x.png 2x">
        </div>
      </div>
      <!-- ▲ 流れ② -->
      <!-- ▼ 流れ③ -->
      <div class="home__about__item bg-light">
        <div class="home__about__item-text">
          <h3 class="home__about__item-ttl f-26 text-center py-4 text-primary font-weight-bold m-0">店舗へ通知</h3>
          <p class="f-24 text-center font-weight-bold pt-4">選べる通知方法で<br>注文スルーを防止！</p>
          <p class="text-center pb-4 m-0">専用タブレットは必要ありません！
            <br>店舗やオーナー様の電話番号・メールに
            <br>直接通知でお知らせします。</p>
            <!-- ▼ 通知方法 -->
            <div class="d-flex pb-4">
              <div class="col-6 pl-0">
                <div class="text-center">
                  <img class="" src="<?php echo $img_url; ?>about_3_1.png" alt="電話で通知" srcset="<?php echo $img_url; ?>about_3_1.png 1x, <?php echo $img_url; ?>about_3_1@2x.png 2x">
                </div>
                <h4 class="f-16 font-weight-bold text-center text-primary py-3 m-0">電話で通知</h4>
                <p class="f-12 m-0">お店の電話が鳴り自動音声でお知らせします。</p>
              </div>
              <div class="col-6 pl-0">
                <div class="text-center">
                  <img class="" src="<?php echo $img_url; ?>about_3_2.png" alt="メールで通知" srcset="<?php echo $img_url; ?>about_3_2.png 1x, <?php echo $img_url; ?>about_3_2@2x.png 2x">
                </div>
                <h4 class="f-16 font-weight-bold text-center text-primary py-3 m-0">メールで通知</h4>
                <p class="f-12 m-0">お店の電話が鳴り自動音声でお知らせします。</p>
              </div>
            </div>
            <!-- ▲ 通知方法 -->
        </div>
      </div>
      <!-- ▲ 流れ③ -->
      <!-- ▼ 流れ② -->
      <div class="home__about__item bg-light">
        <div class="home__about__item-text">
          <h3 class="home__about__item-ttl f-26 text-center py-4 text-primary font-weight-bold m-0">受け渡し</h3>
          <p class="text-center py-4 m-0">予定の時間に受け取りにきたお客様に<br>商品をお渡しします。</p>
        </div>
        <div class="text-center">
          <img class="" src="<?php echo $img_url; ?>about_4.png" alt="受け渡し" srcset="<?php echo $img_url; ?>about_4.png 1x, <?php echo $img_url; ?>about_4@2x.png 2x">
        </div>
      </div>
      <!-- ▲ 流れ② -->
    </div>

  </div>
</div>
<!-- ▲ 商品お渡しまでの流れ -->

<!-- ▼ 導入店舗 -->
<div class="home__case bg-success py-5">
  <div class="container py-main w-75 bg-white">
    <h2 class="f-32 font-weight-bold text-center mb-5">全国<span>350</span>店舗で導入</h2>
    <p class="mb-5 text-center">カフェやレストランを始め、専門店やスイーツ店など幅広いお店で<br>ご利用いただいております。</p>
    <!-- ▼ ロゴ -->
    <div class="home__case__wrap d-flex flex-wrap justify-content-center">
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_shigeyoshi.png" alt="しげよし" srcset="<?php echo $img_url; ?>lp_logo_shigeyoshi.png 1x, <?php echo $img_url; ?>lp_logo_shigeyoshi@2x.png 2x">
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_mb.png" alt="マールブランシュ" srcset="<?php echo $img_url; ?>lp_logo_mb.png 1x, <?php echo $img_url; ?>lp_logo_mb@2x.png 2x">
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_musashi.png" alt="寿司のむさし" srcset="<?php echo $img_url; ?>lp_logo_musashi.png 1x, <?php echo $img_url; ?>lp_logo_musashi@2x.png 2x">
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_daidomon.png" alt="大同門" srcset="<?php echo $img_url; ?>lp_logo_daidomon.png 1x, <?php echo $img_url; ?>lp_logo_daidomon@2x.png 2x">
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_umezono.png" alt="梅園" srcset="<?php echo $img_url; ?>lp_logo_umezono.png 1x, <?php echo $img_url; ?>lp_logo_umezono@2x.png 2x">
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_pourqui.png" alt="pourquoi" srcset="<?php echo $img_url; ?>lp_logo_pourqui.png 1x, <?php echo $img_url; ?>lp_logo_pourqui@2x.png 2x">
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_saiki.png" alt="さいき家" srcset="<?php echo $img_url; ?>lp_logo_saiki.png 1x, <?php echo $img_url; ?>lp_logo_saiki@2x.png 2x">
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_banana.png" alt="バナナの神様" srcset="<?php echo $img_url; ?>lp_logo_banana.png 1x, <?php echo $img_url; ?>lp_logo_banana@2x.png 2x">
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_hana.png" alt="花たぬき" srcset="<?php echo $img_url; ?>lp_logo_hana.png 1x, <?php echo $img_url; ?>lp_logo_hana@2x.png 2x">
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_200.png" alt="200円カレー" srcset="<?php echo $img_url; ?>lp_logo_200.png 1x, <?php echo $img_url; ?>lp_logo_200@2x.png 2x">
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_mughal.png" alt="MUGHAL" srcset="<?php echo $img_url; ?>lp_logo_mughal.png 1x, <?php echo $img_url; ?>lp_logo_mughal@2x.png 2x">
    </div>
    <!-- ▲ ロゴ -->
  </div>
</div>
<!-- ▲ 導入店舗 -->

<?php get_footer();
