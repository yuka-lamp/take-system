<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<!-- ▼ 集客・販促 -->
<section class="column__sec attracting py-main">
  <!-- ▼ カテゴリ説明 -->
  <div class="column__sec__wrap">
    <div class="column__sec__intro">
      <p class="text-secondary font-weight-bold">集客・販促</p>
      <h3 class="column__sec__intro-ttl">どうしたら<br>売上アップできる？</h3>
      <p class="f-16">テイクアウトの売上をアップさせるには集客が大切です。<br class="d-none b-md-block">飲食店に欠かせない集客方法について解説します。</p>
      <a class="d-none d-md-block btn btn-secondary mt-5" href="<?php echo $home; ?>/blog_cat/attracting/">すべてみる</a>
    </div>
    <!-- ▲ カテゴリ説明 -->
    <!-- ▼ 記事一覧 -->
    <article class="column__sec__lists">
      <?php
      $args = [
          'posts_per_page' => 4,
          'post_type' => 'blog',
          'orderby' => 'date',
          'order' => 'ASC',
          'tax_query' => [
            [
              'taxonomy' => 'blog_cat',
              'field' => 'slug',
              'terms' => 'attracting',
            ]
          ]
      ];
      $my_posts = get_posts($args);
      foreach ($my_posts as $post):
          setup_postdata($post);
          $id = get_the_ID();
          $thumbnail = get_the_post_thumbnail_url($id, 'thumbnail');
          $ttl = get_the_title();
          $permalink = get_the_permalink();
          $tarms = get_the_terms(get_the_ID(), 'blog_cat');
      ?>
      
      <!-- ▼ ループするコンテンツ -->
      <a class="post-list-item" href="<?php echo $permalink; ?>">
        <div class="post-list-item-img">
          <img src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl; ?>">
        </div>
        <div class="post-list-item-text">
          <h3 class="post-list-item-ttl">
          <?php echo mb_substr($post->post_title, 0, 30).'…'; ?>
          </h3>
          <p class="f-10 text-secondary font-weight-bold mb-0">
            <?php the_date(); ?> ｜ 
            <?php foreach ($tarms as $term): ?>
              <?php echo $term->name; ?>
            <?php endforeach; ?>
          </p>
        </div>
      </a>
      <!-- ▲ ループするコンテンツ -->
      <?php endforeach; wp_reset_postdata(); ?>
    <!-- ▲ 記事一覧 -->
    </article>
    <a class="d-block d-md-none btn btn-secondary mt-3" href="<?php echo $home; ?>#toform/">すべてみる</a>
  </div>
</section>
<!-- ▲ 集客・販促 -->

<!-- ▼ 基礎知識 -->
<section class="column__sec basic column__cat py-main bg-light">
  <!-- ▼ カテゴリ説明 -->
  <div class="column__sec__wrap">
      <div class="column__sec__intro">
        <p class="text-info font-weight-bold">基礎知識</p>
        <h3 class="column__sec__intro-ttl">テイクアウトの<br>知識を身に着けよう</h3>
        <p class="f-16">テイクアウトを始める前に知っておきたい知識をまとめました。<br class="d-none b-md-block">これからテイクアウトを始める予定や始めようか迷っている飲食店オーナー様必見の基礎情報です。</p>
        <a class="d-none d-md-block btn btn-info mt-3" href="<?php echo $home; ?>/blog_cat/basic/">すべてみる</a>
      </div>
    <!-- ▲ カテゴリ説明 -->
    <!-- ▼ 記事一覧 -->
    <article class="column__sec__lists">
      <?php
      $args = [
          'posts_per_page' => 4,
          'post_type' => 'blog',
          'orderby' => 'date',
          'order' => 'ASC',
          'tax_query' => [
            [
              'taxonomy' => 'blog_cat',
              'field' => 'slug',
              'terms' => 'basic',
            ]
          ]
      ];
      $my_posts = get_posts($args);
      foreach ($my_posts as $post):
      setup_postdata($post);
      $id = get_the_ID();
      $thumbnail = get_the_post_thumbnail_url($id, 'thumbnail');
      $ttl = get_the_title();
      $tarms = get_the_terms($post->ID, 'blog_cat');
      $permalink = get_the_permalink();
      ?>
      <!-- ▼ ループするコンテンツ -->
      <a class="post-list-item" href="<?php echo $permalink; ?>">
        <div class="post-list-item-img">
          <img src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl; ?>">
        </div>
        <div class="post-list-item-text">
          <h3 class="post-list-item-ttl">
          <?php echo mb_substr($post->post_title, 0, 30).'…'; ?>
          </h3>
          <p class="f-10 text-info font-weight-bold mb-0">
            <?php the_date(); ?> ｜ 
            <?php foreach ($tarms as $term): ?>
              <?php echo $term->name; ?>
            <?php endforeach; ?>
          </p>
        </div>
      </a>
      <!-- ▲ ループするコンテンツ -->
      <?php endforeach; wp_reset_postdata(); ?>
    <!-- ▲ 記事一覧 -->
    </article>
    <a class="d-block d-md-none btn btn-info mt-3" href="<?php echo $home; ?>#toform/">すべてみる</a>
  </div>
</section>
<!-- ▲ 基礎知識 -->

<!-- ▼ メニュー開発 -->
<section class="column__sec ready column__cat py-main">
  <!-- ▼ カテゴリ説明 -->
  <div class="column__sec__wrap">
      <div class="column__sec__intro">
        <p class="text-warning font-weight-bold">メニュー開発</p>
        <h3 class="column__sec__intro-ttl">メニューで<br>ユーザーの心を掴もう</h3>
        <p class="f-16">店内飲食とは少し違った準備が必要なテイクアウト。<br class="d-none b-md-block">しっかり準備して魅力的なメニューを提供しましょう。</p>
        <a class="d-none d-md-block btn btn-warning mt-5" href="<?php echo $home; ?>/blog_cat/ready/">すべてみる</a>
      </div>
    <!-- ▲ カテゴリ説明 -->
    <!-- ▼ 記事一覧 -->
    <article class="column__sec__lists">
      <?php
      $args = [
          'posts_per_page' => 4,
          'post_type' => 'blog',
          'orderby' => 'date',
          'order' => 'ASC',
          'tax_query' => [
            [
              'taxonomy' => 'blog_cat',
              'field' => 'slug',
              'terms' => 'ready',
            ]
          ]
      ];
      $my_posts = get_posts($args);
      foreach ($my_posts as $post):
      setup_postdata($post);
      $id = get_the_ID();
      $thumbnail = get_the_post_thumbnail_url($id, 'thumbnail');
      $ttl = get_the_title();
      $tarms = get_the_terms($post->ID, 'blog_cat');
      $permalink = get_the_permalink();
      ?>
      <!-- ▼ ループするコンテンツ -->
      <a class="post-list-item" href="<?php echo $permalink; ?>">
        <div class="post-list-item-img">
          <img src="<?php echo $thumbnail; ?>" alt="<?php echo $ttl; ?>">
        </div>
        <div class="post-list-item-text">
          <h3 class="post-list-item-ttl">
          <?php echo mb_substr($post->post_title, 0, 30).'…'; ?>
          </h3>
          <p class="f-10 text-warning font-weight-bold mb-0">
            <?php the_date(); ?> ｜ 
            <?php foreach ($tarms as $term): ?>
              <?php echo $term->name; ?>
            <?php endforeach; ?>
          </p>
        </div>
      </a>
      <!-- ▲ ループするコンテンツ -->
      <?php endforeach; wp_reset_postdata(); ?>
    <!-- ▲ 記事一覧 -->
    </article>
    <a class="d-block d-md-none btn btn-warning mt-3" href="<?php echo $home; ?>#toform/">すべてみる</a>
  </div>
</section>
<!-- ▲ メニュー開発 -->

<?php get_footer();
