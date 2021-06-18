<?php
$home = esc_url(home_url());
$id = get_the_ID();
$company = get_the_title(); 
$icon = get_field('icon');
$ttl = get_the_title();
$text = get_field('text');
?>
<!-- ▼ ループするコンテンツ -->
<?php if( get_field('single') === "yes：はい"): //詳細ページがある場合?> 
    <a class="features__system-item f-12 text-muted<?php if( get_field('paid') === "yes：はい"): //有料オプションの場合?> paid<?php endif; ?><?php if( get_field('release') === "yes：はい"): //リリース前の場合?> release<?php endif; ?> bg-white shadow" href="<?php the_permalink(); ?>">
        <div class="features__system-item-wrap">
            <img src="<?php echo $icon ?>" alt="<?php echo $ttl ?>">
            <h3 class="f-18 font-weight-bold text-body my-3">
            <?php echo $ttl ?>
            <?php if ($terms = get_the_terms($post->ID, 'system_list_tag')) {
                    foreach ( $terms as $term ) {
                    echo '<span class="tag">' , esc_html($term->name) , '</span>';
                    }
                }
            ?>
            </h3>
            <?php echo $text ?>
            <p class="text-primary mt-2 mb-0">詳しくはこちら<i class="ri-arrow-right-s-line"></i></p>
        </div>
    </a>
<?php else: //詳細ページがない場合?>
    <div class="features__system-item f-12 text-muted<?php if( get_field('paid') === "yes：はい"): //有料オプションの場合?> paid<?php endif; ?><?php if( get_field('release') === "yes：はい"): //リリース前の場合?> release<?php endif; ?> bg-white shadow">
        <div class="features__system-item-wrap">
            <img src="<?php echo $icon ?>" alt="<?php echo $ttl ?>">
            <h3 class="f-18 font-weight-bold text-body my-3">
            <?php echo $ttl ?>
            <?php if ($terms = get_the_terms($post->ID, 'system_list_tag')) {
                    foreach ( $terms as $term ) {
                    echo '<span class="tag">' , esc_html($term->name) , '</span>';
                    }
                }
            ?>
            </h3>
            <?php echo $text ?>
        </div>
    </div>
<?php endif; ?>
<!-- ▲ ループするコンテンツ -->
