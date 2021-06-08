<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';
get_header(); ?>

<!-- ▼ お知らせ -->
<div class="news py-5 mt-5">
    <div class="container">
        <h2 class="f-32 font-weight-bold text-center mb-5">ニュース</h2>
        <!-- ▼ 記事 -->
        <div class="news__list pb-4">
            <?php
            $args = [
                'posts_per_page' => 10,
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC'
            ];
            $my_posts = get_posts($args);
            foreach ($my_posts as $post):
            setup_postdata($post);
            $id = get_the_ID();
            $ttl = get_the_title();
            ?>

            <!-- ▼ ループするコンテンツ -->
            <a href="<?php the_permalink(); ?>" class="d-block py-4 border-top text-decoration-none">
                <div class="d-inline d-lg-inline-block p-0">
                <p class="d-inline mb-0 f-16"><?php echo get_the_date(); ?></p>
                </div>
                <div class="d-inline d-lg-inline-block p-0">
                <p class="d-inline border text-body px-2 py-1 mx-2 f-12">お知らせ</p>
                </div>
                <p class="d-block d-lg-inline-block col-lg-9 p-0 f-14 text-body mt-2 mb-0"><?php echo $ttl ?></p>
            </a>
            <!-- ▲ ループするコンテンツ -->

            <?php endforeach; wp_reset_postdata(); ?>
            <div class="text-center border-top">
            <?php wp_pagenavi(); ?>
            </div>
        </div>
        <!-- ▲ 記事 -->
    </div>
</div>
<!-- ▲ お知らせ -->

<?php get_footer();
