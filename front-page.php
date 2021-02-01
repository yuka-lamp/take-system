<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<!-- ▼ メインビジュアル -->
<div class="home__mv">
  <div class="home__mv-wrap">
    <div class="home__mv__text">
      <div class="home__mv__text-wrap">
        <h2 class="home__mv__text-ttl font-weight-bold f-36">
          お店独自の
          <br>モバイルオーダー導入で
          <br><span>売上アップ！</span>
        </h2>
        <p class="d-none d-md-block mt-5">
          高機能なTakeEastsは初期費用・導入費無料！
          <br>あなたのお店でもいますぐモバイルオーダーをスタート。
        </p>
      </div>
    </div>
    <div class="home__mv__photo">
      <div class="home__mv__photo-bg">
        <img class="" src="<?php echo $img_url; ?>mv_iphone_pc.png" alt="タブレット不要！スマホだけでも運用可能" srcset="<?php echo $img_url; ?>mv_iphone_pc.png 1x, <?php echo $img_url; ?>mv_iphone_pc@2x.png 2x">
      </div>
    </div>

  </div>
</div>
<!-- ▲ メインビジュアル -->

<!-- ▼ テイクイーツが選ばれる理由 -->
<div class="home__reason bg-light">
  <div class="container py-main">
    <h2 class="f-32 font-weight-bold text-center mb-5">テイクイーツが<br class="d-none d-md-block">選ばれる理由</h2>
    <div class="home__reason__wrap d-md-flex flex-wrap">
      <!-- ▼ 理由① -->
      <div class="home__reason__item d-flex align-items-center col-md-6 mt-4">
        <img class="" src="<?php echo $img_url; ?>reason_free.png" alt="初期費用・月額費用が無料で利用できる" srcset="<?php echo $img_url; ?>reason_free.png 1x, <?php echo $img_url; ?>reason_free@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-3">
          初期費用・月額費用・導入費が
          <br><span>完全無料</span>で利用できる
        </h3>
      </div>
      <!-- ▲ 理由① -->
      <!-- ▼ 理由② -->
      <div class="home__reason__item d-flex align-items-center col-md-6 mt-4">
        <img class="" src="<?php echo $img_url; ?>reason_up.png" alt="注文のデジタル化で売上アップ！" srcset="<?php echo $img_url; ?>reason_up.png 1x, <?php echo $img_url; ?>reason_up@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-3">
          WEB予約を導入することで
          <br><span>売上アップ</span>！
        </h3>
      </div>
      <!-- ▲ 理由② -->
      <!-- ▼ 理由③ -->
      <div class="home__reason__item d-flex align-items-center col-md-6">
        <img class="" src="<?php echo $img_url; ?>reason_tablet.png" alt="タブレット不要！スマホだけでも運用可能" srcset="<?php echo $img_url; ?>reason_tablet.png 1x, <?php echo $img_url; ?>reason_tablet@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-3">
          専用タブレット不要!
          <br><span>スペースを取らず</span>運用可能
        </h3>
      </div>
      <!-- ▲ 理由③ -->
      <!-- ▼ 理由④ -->
      <div class="home__reason__item d-flex align-items-center col-md-6 mt-4">
        <img class="" src="<?php echo $img_url; ?>reason_line.png" alt="お店もお客様も安心の並ばない注文" srcset="<?php echo $img_url; ?>reason_line.png 1x, <?php echo $img_url; ?>reason_line@2x.png 2x">
        <h3 class="home__reason__item-ttl f-24 font-weight-bold ml-3">
          お客様も安心で嬉しい
          <br><span>並ばずに</span>受け取り
        </h3>
      </div>
      <!-- ▲ 理由④ -->
    </div>
  </div>
</div>
<!-- ▲ テイクイーツが選ばれる理由 -->

<!-- ▼ 商品お渡しまでの流れ -->
<div class="home__about">
  <div class="container py-main">
    <h2 class="f-32 font-weight-bold text-center mb-4">注文受付から<br>商品お渡しまでの流れ</h2>
    <p class="mb-5 text-center">お客様からの注文を受付てから店頭で<br>商品をお渡しするまでの流れをご紹介致します。</p>

    <div class="home__about__wrap d-md-flex flex-wrap justify-content-between">
      <!-- ▼ 流れ① -->
      <div class="home__about__item bg-light">
        <div class="home__about__item-text">
          <h3 class="home__about__item-ttl f-26 text-center py-4 text-primary font-weight-bold m-0">店舗独自の<br>予約サイトへ流入</h3>
          <p class="py-4 m-0">媒体に掲載するのではなく、店舗独自の予約サイトを開設できます。<br>SNSやチラシなどからの流入増加をサポートいたします!</p>
        </div>
        <div class="text-center">
          <img class="" src="<?php echo $img_url; ?>about_1.png" alt="サイト流入" srcset="<?php echo $img_url; ?>about_1.png 1x, <?php echo $img_url; ?>about_1@2x.png 2x">
        </div>
      </div>
      <!-- ▲ 流れ① -->
      <!-- ▼ 流れ② -->
      <div class="home__about__item bg-light">
        <div class="home__about__item-text">
          <h3 class="home__about__item-ttl f-26 text-center py-4 text-primary font-weight-bold m-0">メニューを選択して<br>30秒で予約/決済</h3>
          <p class="text-center py-4 m-0">お客様には会員登録やアプリのインストールをすることなく注文いただけます。</p>
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
          <p class="f-24 text-center font-weight-bold pt-4">専用タブレットは不要!</p>
          <p class="text-center pb-4 m-0">店舗の電話番号・メールに直接通知でお知らせします。</p>
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
                <p class="f-12 m-0">任意のメールアドレスにお知らせします。</p>
              </div>
            </div>
            <!-- ▲ 通知方法 -->
        </div>
      </div>
      <!-- ▲ 流れ③ -->
      <!-- ▼ 流れ② -->
      <div class="home__about__item bg-light">
        <div class="home__about__item-text">
          <h3 class="home__about__item-ttl f-26 text-center py-4 text-primary font-weight-bold m-0"> 商品のお渡し</h3>
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
  <div class="home__case__wrap container pt-5 bg-white pl-0 pr-0 text-center">
    <h2 class="home__case__ttl f-32 font-weight-bold  mb-3 d-flex align-items-center justify-content-center">全国<span>500</span>店舗で導入</h2>
    <p class="mb-5">カフェやレストランを始め、<br class="d-block d-md-none">専門店やスイーツ店など幅広いお店で<br>ご利用いただいております。</p>
    <!-- ▼ ロゴ -->
    <div class="home__case__inner d-flex flex-wrap justify-content-center">
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_200.png" alt="200円カレー" srcset="<?php echo $img_url; ?>lp_logo_200.png 1x, <?php echo $img_url; ?>lp_logo_200@2x.png 2x">
      <!-- 200円カレー -->
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_mb.png" alt="マールブランシュ" srcset="<?php echo $img_url; ?>lp_logo_mb.png 1x, <?php echo $img_url; ?>lp_logo_mb@2x.png 2x">
      <!-- マールブランシュ -->
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_musashi.png" alt="寿司のむさし" srcset="<?php echo $img_url; ?>lp_logo_musashi.png 1x, <?php echo $img_url; ?>lp_logo_musashi@2x.png 2x">
      <!-- 寿司のむさし -->
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_daidomon.png" alt="大同門" srcset="<?php echo $img_url; ?>lp_logo_daidomon.png 1x, <?php echo $img_url; ?>lp_logo_daidomon@2x.png 2x">
      <!-- 大同門 -->
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_umezono.png" alt="梅園" srcset="<?php echo $img_url; ?>lp_logo_umezono.png 1x, <?php echo $img_url; ?>lp_logo_umezono@2x.png 2x">
      <!-- 梅園 -->
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_pourqui.png" alt="pourquoi" srcset="<?php echo $img_url; ?>lp_logo_pourqui.png 1x, <?php echo $img_url; ?>lp_logo_pourqui@2x.png 2x">
      <!-- pourquoi -->
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_saiki.png" alt="さいき家" srcset="<?php echo $img_url; ?>lp_logo_saiki.png 1x, <?php echo $img_url; ?>lp_logo_saiki@2x.png 2x">
      <!-- さいき家 -->
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_banana.png" alt="バナナの神様" srcset="<?php echo $img_url; ?>lp_logo_banana.png 1x, <?php echo $img_url; ?>lp_logo_banana@2x.png 2x">
      <!-- バナナの神様 -->
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_eirakuya.png" alt="永楽屋" srcset="<?php echo $img_url; ?>lp_logo_eirakuya.png 1x, <?php echo $img_url; ?>lp_logo_eirakuya@2x.png 2x">
      <!-- 永楽屋 -->
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_hana.png" alt="花たぬき" srcset="<?php echo $img_url; ?>lp_logo_hana.png 1x, <?php echo $img_url; ?>lp_logo_hana@2x.png 2x">
      <!-- 花たぬき -->
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_shigeyoshi.png" alt="しげよし" srcset="<?php echo $img_url; ?>lp_logo_shigeyoshi.png 1x, <?php echo $img_url; ?>lp_logo_shigeyoshi@2x.png 2x">
      <!-- しげよし -->
      <img class="home__case__item" src="<?php echo $img_url; ?>lp_logo_mughal.png" alt="MUGHAL" srcset="<?php echo $img_url; ?>lp_logo_mughal.png 1x, <?php echo $img_url; ?>lp_logo_mughal@2x.png 2x">
      <!-- MUGHAL -->
    </div>
    <!-- ▲ ロゴ -->
    <img class="d-block d-md-none m-0 w-100" src="<?php echo $img_url; ?>case_bg_sp.png" alt="導入店舗紹介背景" srcset="<?php echo $img_url; ?>case_bg_sp.png 1x, <?php echo $img_url; ?>case_bg_sp@2x.png 2x">
    <img class="d-none d-md-block m-0 w-100" src="<?php echo $img_url; ?>case_bg_pc.png" alt="導入店舗紹介背景" srcset="<?php echo $img_url; ?>case_bg_pc.png 1x, <?php echo $img_url; ?>case_bg_pc@2x.png 2x">
  </div>
</div>
<!-- ▲ 導入店舗 -->

<!-- ▼ 料金 -->
<div class="home__price">
  <div class="container pt-main">
    <h2 class="f-32 font-weight-bold text-center mb-4">料金プラン</h2>
    <p class="mb-5 text-center">テイクイーツの料金プランをご紹介致します。</p>
    <!-- ▼ タブメニュー -->
    <ul class="home__price__nav nav nav-pills d-flex justify-content-center" id="pills-tab" role="tablist">
      <li class="home__price__nav-item nav-item bg-secondary">
        <a class="home__price__nav-link nav-link text-center text-white font-weight-bold active" id="pills-plan1-tab" data-toggle="tab" href="#pills-plan1" role="tab" aria-controls="pills-plan1" aria-selected="true">
          小・中規模向け
          <img class="home__price__nav-arrow" src="<?php echo $img_url; ?>arrow_wh.svg" alt="矢印">
        </a>
      </li>
      <li class="home__price__nav-item nav-item bg-info">
        <a class="home__price__nav-link nav-link text-center text-white font-weight-bold" id="pills-plan2-tab" data-toggle="tab" href="#pills-plan2" role="tab" aria-controls="pills-plan2" aria-selected="false">
          大規模向け
          <img class="home__price__nav-arrow" src="<?php echo $img_url; ?>arrow_wh.svg" alt="矢印">
        </a>
      </li>
    </ul>
    <!-- ▲ タブメニュー -->
    <!-- ▼ タブコンテンツ -->
    <div class="home__price__content tab-content" id="pills-tabContent">
      <div class="home__price__content-item tab-pane fade show active" id="pills-plan1" role="tabpanel" aria-labelledby="pills-plan1-tab">
        <div class="home__price__content-wrap d-block d-md-flex justify-content-center mb-5">
          <div class="home__price__content-line f-18 font-weight-bold text-center bg-light">
            初期費用
            <br class="d-none d-md-block">
            <p class="text-primary f-36 m-0">¥0</p>
          </div>
          <div class="home__price__content-line f-18 font-weight-bold text-center bg-light">
            月額費用
            <br class="d-none d-md-block">
            <p class="text-primary f-36 m-0">¥0</p>
          </div>
          <div class="home__price__content-line f-18 font-weight-bold text-center">
            <p class="2line m-0">サービス手数料<br><span class="f-10">(注文金額に対して)</span></p>
            <p class="f-36 m-0">8%</p>
          </div>
        </div>
        <p class="f-10 text-muted mt-4 mb-0 col-8 col-md-12">
          ※ クレジットカードでの決済の場合手数料3.6%が別途発生します。
          <br>※ 売上金を振り込む際に振込手数料¥440が発生いたします。
        </p>
      </div>
      <div class="home__price__content-item tab-pane fade" id="pills-plan2" role="tabpanel" aria-labelledby="pills-plan2-tab">
        <p class="f-18 text-center font-weight-bold">
          特別プランをご提案いたします。
          <br>詳しくは<a href="<?php echo $home; ?>#toform">お問い合わせ</a>下さい。
        </p>
      </div>
    </div>
    <!-- ▲ タブコンテンツ -->
  </div>
</div>
<!-- ▲ 料金 -->

<!-- ▼ 導入までの流れ -->
<div class="home__flow pt-main">
  <div class="container">
    <h2 class="f-32 font-weight-bold text-center mb-4">導入までの流れ</h2>
    <p class="f-24 font-weight-bold text-center text-primary mb-4">- 最短<span class="f-32 px-1">1日</span>でスタート！ -</p>
    <!-- ▼ 図 -->
    <div class="home__flow__figre d-flex p-0">
      <div class="home__flow__figre-day col-2 p-0 d-flex justify-contant-center">
        <div class="w-100">
          <p class="f-18 font-weight-bold text-center m-0 d-block w-100">
            最短
            <br class="d-block d-md-none">
            <span class="f-32 text-warning px-1">1</span>日</p>
        </div>
      </div>
      <div class="home__flow__figre-step col-10 p-0">
        <p class="home__flow__figre-step-item f-16 font-weight-bold">お申し込み</p>
        <p class="home__flow__figre-step-item f-16 font-weight-bold">アカウント発行</p>
        <p class="home__flow__figre-step-item f-16 font-weight-bold">初期設定</p>
        <p class="home__flow__figre-step-item f-16 font-weight-bold">メニュー・オプション登録</p>
        <p class="home__flow__figre-step-item f-16 font-weight-bold">ご利用スタート</p>
      </div>
    </div>
    <!-- ▲ 図 -->
  </div>
</div>
<!-- ▲ 導入までの流れ -->

<?php get_footer();
