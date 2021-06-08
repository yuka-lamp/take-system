<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
$img_url = get_template_directory_uri().'/dist/images/';

get_header(); ?>

<!-- ▼ 導入 -->
<section class="sub__intro features mb-5">
    <div class="container d-md-flex align-items-center">
        <div class="col-md-6">
            <p class="text-primary font-weight-bold mb-3">管理画面について</p>
            <h2 class="sub__intro-text-ttl f-36 font-weight-bold mb-4">お店にあった<br>お好みのカスタマイズを</h2>
            <p class="f-14">店舗の営業形態や数に合わせて、<br>オリジナルの予約サイトを作成しましょう！</p>
        </div>
        <div class="col-md-6">
            <img class="" src="<?php echo $img_url; ?>features_intro.png" alt="タブレット不要！スマホだけでも運用可能" srcset="<?php echo $img_url; ?>features_intro.png 1x, <?php echo $img_url; ?>features_intro@2x.png 2x">
        </div>
    </div>
</section>
<!-- ▲ 導入 -->

<!-- ▼ 機能一覧 -->
<section class="features pb-main">
    <div class="container">
        <!-- ▼ ページ内リンク -->
        <div class="features__system__nav">
            <a class="features__system__nav-item d-inline-block text-body mt-1" href="#basic">
                基本機能
            </a>
            <a class="features__system__nav-item d-inline-block text-body mt-1" href="#sale">
                販売方法
            </a>
            <a class="features__system__nav-item d-inline-block text-body mt-1" href="#marketing">
                集客/販売促進
            </a>
            <a class="features__system__nav-item d-inline-block text-body mt-1" href="#support">
                顧客対応
            </a>
            <a class="features__system__nav-item d-inline-block text-body mt-1" href="#operation">
                運営効率UP
            </a>
            <a class="features__system__nav-item d-inline-block text-body mt-1" href="#system">
                システム
            </a>
        </div>
        <!-- ▲ ページ内リンク -->

        <!-- ▼ 基本機能 -->
        <div id="basic">
            <h2 class="f-28 font-weight-bold text-center">基本機能</h2>
            <div class="features__system d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap w-100">
                <?php
                $args = [
                    'posts_per_page' => -1,
                    'post_type' => 'system_list',
                    'taxonomy' => 'system_list_cat',
                    'term' => 'basic',
                    'orderby' => 'date',
                    'order' => 'DESC'
                ];
                $my_posts = get_posts($args);
                foreach ($my_posts as $post):
                setup_postdata($post);
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
                <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <!-- ▲ 基本機能 -->
        <!-- ▼ 販売方法 -->
        <div id="sale">
            <h2 class="f-28 font-weight-bold text-center">販売方法</h2>
            <div class="features__system d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap w-100">
                <?php
                $args = [
                    'posts_per_page' => -1,
                    'post_type' => 'system_list',
                    'taxonomy' => 'system_list_cat',
                    'term' => 'sale',
                    'orderby' => 'date',
                    'order' => 'DESC'
                ];
                $my_posts = get_posts($args);
                foreach ($my_posts as $post):
                setup_postdata($post);
                $id = get_the_ID();
                $company = get_the_title(); 
                $icon = get_field('icon');
                $ttl = get_the_title();
                $text = get_field('text');
                $term = get_the_terms( $id, 'system_list_tag' );
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
                <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <!-- ▲ 販売方法 -->
        <!-- ▼ 集客/販売促進 -->
        <div id="marketing">
            <h2 class="f-28 font-weight-bold text-center">集客/販売促進</h2>
            <div class="features__system d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap w-100">
                <?php
                $args = [
                    'posts_per_page' => -1,
                    'post_type' => 'system_list',
                    'taxonomy' => 'system_list_cat',
                    'term' => 'marketing',
                    'orderby' => 'date',
                    'order' => 'DESC'
                ];
                $my_posts = get_posts($args);
                foreach ($my_posts as $post):
                setup_postdata($post);
                $id = get_the_ID();
                $company = get_the_title(); 
                $icon = get_field('icon');
                $ttl = get_the_title();
                $text = get_field('text');
                $term = get_the_terms( $id, 'system_list_tag' );
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
                <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <!-- ▲ 集客/販売促進 -->
        <!-- ▼ 顧客対応 -->
        <div id="support">
            <h2 class="f-28 font-weight-bold text-center">顧客対応</h2>
            <div class="features__system d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap w-100">
                <?php
                $args = [
                    'posts_per_page' => -1,
                    'post_type' => 'system_list',
                    'taxonomy' => 'system_list_cat',
                    'term' => 'support',
                    'orderby' => 'date',
                    'order' => 'DESC'
                ];
                $my_posts = get_posts($args);
                foreach ($my_posts as $post):
                setup_postdata($post);
                $id = get_the_ID();
                $company = get_the_title(); 
                $icon = get_field('icon');
                $ttl = get_the_title();
                $text = get_field('text');
                $term = get_the_terms( $id, 'system_list_tag' );
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
                <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <!-- ▲ 顧客対応 -->
        <!-- ▼ 運営効率UP -->
        <div id="operation">
            <h2 class="f-28 font-weight-bold text-center">運営効率UP</h2>
            <div class="features__system d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap w-100">
                <?php
                $args = [
                    'posts_per_page' => -1,
                    'post_type' => 'system_list',
                    'taxonomy' => 'system_list_cat',
                    'term' => 'operation',
                    'orderby' => 'date',
                    'order' => 'DESC'
                ];
                $my_posts = get_posts($args);
                foreach ($my_posts as $post):
                setup_postdata($post);
                $id = get_the_ID();
                $company = get_the_title(); 
                $icon = get_field('icon');
                $ttl = get_the_title();
                $text = get_field('text');
                $term = get_the_terms( $id, 'system_list_tag' );
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
                <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <!-- ▲ 運営効率UP -->
        <!-- ▼ システム -->
        <div id="system">
            <h2 class="f-28 font-weight-bold text-center">システム</h2>
            <div class="features__system d-flex flex-wrap justify-content-between">
                <div class="d-flex flex-wrap w-100">
                <?php
                $args = [
                    'posts_per_page' => -1,
                    'post_type' => 'system_list',
                    'taxonomy' => 'system_list_cat',
                    'term' => 'system',
                    'orderby' => 'date',
                    'order' => 'DESC'
                ];
                $my_posts = get_posts($args);
                foreach ($my_posts as $post):
                setup_postdata($post);
                $id = get_the_ID();
                $company = get_the_title(); 
                $icon = get_field('icon');
                $ttl = get_the_title();
                $text = get_field('text');
                $term = get_the_terms( $id, 'system_list_tag' );
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
                <?php endforeach; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <!-- ▲ システム -->
    </div>
</section>
<!-- ▲ 機能一覧 -->

<?php get_footer();
