<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<section class="column__post pt-main">
    <div class="container">
        <?php if (have_posts()): while (have_posts()): the_post();
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
                <?php if (has_term('attracting','blog_cat')): /* 集客・販促 */?>
                    <p class="f-10 text-secondary font-weight-bold mb-0">
                <?php elseif (has_term('basic','blog_cat')): /* 基礎知識 */ ?>
                    <p class="f-10 text-info font-weight-bold mb-0">
                <?php elseif (has_term('ready','blog_cat')): /* メニュー開発 */ ?>
                    <p class="f-10 text-warning font-weight-bold mb-0">
                <?php endif; ?>
                    <?php the_date(); ?> ｜ 
                    <?php foreach ($tarms as $term): ?>
                    <?php echo $term->name; ?>
                    <?php endforeach; ?>
                </p>
            </div>
        </a>
        <!-- ▲ ループするコンテンツ -->
        <?php endwhile; endif; ?>
        <div class="text-center w-100">
            <?php wp_pagenavi(); ?>
        </div>
    </div>
</section>

<?php get_footer();