<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
// $cat_slug = get_query_var('blog-category') ? get_query_var('blog-category') : "";

?>

    <main id="archive-blog">
        <div class="bread-crump">
            <div class="container">
                <a href="<?php echo HOME; ?>" class="link">トップページ</a>
                <i class="fas fa-chevron-right"></i>
                <h5 class="current-page">全国のRPA導入士</h5>
            </div>
        </div>
        <div class="page-title">
            <div class="container">
                <h5 class="en">SEARCH</h5>
                <h2 class="jp">全国のRPA導入士</h2>
            </div>
        </div>
        <section class="search-pannel">
            <div class="container">
                <div class="search-wrapper">
                    <div class="top-label desc-20-bold">検索条件</div>
                    <?php
                    $parent_cat = get_term_by('name', '対応できる業務範囲を選択', 'blog-category');
                    $parent_cat_id = $parent_cat->term_id;
                    $parent_slug = $parent_cat->slug;
                    $child_cats = get_terms( array(
                        'taxonomy'   => 'blog-category',
                        'parent'     => $parent_cat_id,
                        'orderby' => 'ID',
                        'order' => 'ASC',
                        'hide_empty' => false,
                    ) );
                    if( $child_cats ) {
                    ?>
                    <div class="business-extension">
                        
                        <div class="header-label desc-18-bold">
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/book-mark.svg">
                            対応できる業務範囲を選択
                        </div>
                        <ul class="business-list  checkbox-list">
                            <?php foreach( $child_cats as $child_cat ) : ?>
                            <li class="item">
                                <label class="desc-15-bold">
                                    <input type="checkbox" id="<?php echo $child_cat->slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $child_cat->name; ?>">&nbsp;&nbsp;<?php echo $child_cat->name; ?>
                                </label>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="region-selection">
                        <div class="header-label desc-18-bold">
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/map-mark.svg">
                            対応地域を選択
                        </div>
                        <ul class="region-list">
                            <?php
                            $parent_cat = get_term_by('name', '北海道・東北', 'blog-category');
                            $parent_cat_id = $parent_cat->term_id;
                            $parent_slug = $parent_cat->slug;
                            $parent_name = $parent_cat->name;
                            $child_cats = get_terms( array(
                                'taxonomy'   => 'blog-category',
                                'parent'     => $parent_cat_id,
                                'orderby' => 'ID',
                                'order' => 'ASC',
                                'hide_empty' => false,
                            ) );
                            if( $child_cats ) {
                            ?>
                            <li class="region-item">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $child_cat->name; ?>">&nbsp;&nbsp;<?php echo $child_cat->name; ?>
                                        </label>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php
                            }
                            ?>


                            <?php
                            $parent_cat = get_term_by('name', '関東', 'blog-category');
                            $parent_cat_id = $parent_cat->term_id;
                            $parent_slug = $parent_cat->slug;
                            $parent_name = $parent_cat->name;
                            $child_cats = get_terms( array(
                                'taxonomy'   => 'blog-category',
                                'parent'     => $parent_cat_id,
                                'orderby' => 'ID',
                                'order' => 'ASC',
                                'hide_empty' => false,
                            ) );
                            if( $child_cats ) {
                            ?>
                            <li class="region-item">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $child_cat->name; ?>">&nbsp;&nbsp;<?php echo $child_cat->name; ?>
                                        </label>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php
                            }
                            ?>

                            <?php
                            $parent_cat = get_term_by('name', '近畿', 'blog-category');
                            $parent_cat_id = $parent_cat->term_id;
                            $parent_slug = $parent_cat->slug;
                            $parent_name = $parent_cat->name;
                            $child_cats = get_terms( array(
                                'taxonomy'   => 'blog-category',
                                'parent'     => $parent_cat_id,
                                'orderby' => 'ID',
                                'order' => 'ASC',
                                'hide_empty' => false,
                            ) );
                            if( $child_cats ) {
                            ?>
                            <li class="region-item">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $child_cat->name; ?>">&nbsp;&nbsp;<?php echo $child_cat->name; ?>
                                        </label>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php
                            }
                            ?>

                            <?php
                            $parent_cat = get_term_by('name', '中国', 'blog-category');
                            $parent_cat_id = $parent_cat->term_id;
                            $parent_slug = $parent_cat->slug;
                            $parent_name = $parent_cat->name;
                            $child_cats = get_terms( array(
                                'taxonomy'   => 'blog-category',
                                'parent'     => $parent_cat_id,
                                'orderby' => 'ID',
                                'order' => 'ASC',
                                'hide_empty' => false,
                            ) );
                            if( $child_cats ) {
                            ?>
                            <li class="region-item">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $child_cat->name; ?>">&nbsp;&nbsp;<?php echo $child_cat->name; ?>
                                        </label>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php
                            }
                            ?>

                            <?php
                            $parent_cat = get_term_by('name', '四国', 'blog-category');
                            $parent_cat_id = $parent_cat->term_id;
                            $parent_slug = $parent_cat->slug;
                            $parent_name = $parent_cat->name;
                            $child_cats = get_terms( array(
                                'taxonomy'   => 'blog-category',
                                'parent'     => $parent_cat_id,
                                'orderby' => 'ID',
                                'order' => 'ASC',
                                'hide_empty' => false,
                            ) );
                            if( $child_cats ) {
                            ?>
                            <li class="region-item">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $child_cat->name; ?>">&nbsp;&nbsp;<?php echo $child_cat->name; ?>
                                        </label>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php
                            }
                            ?>

                            <?php
                            $parent_cat = get_term_by('name', '九州・沖縄', 'blog-category');
                            $parent_cat_id = $parent_cat->term_id;
                            $parent_slug = $parent_cat->slug;
                            $parent_name = $parent_cat->name;
                            $child_cats = get_terms( array(
                                'taxonomy'   => 'blog-category',
                                'parent'     => $parent_cat_id,
                                'orderby' => 'ID',
                                'order' => 'ASC',
                                'hide_empty' => false,
                            ) );
                            if( $child_cats ) {
                            ?>
                            <li class="region-item">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" name="<?php echo $parent_slug; ?>" value="<?php echo $child_cat->name; ?>">&nbsp;&nbsp;<?php echo $child_cat->name; ?>
                                        </label>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <a href="<?php echo HOME . 'blog'; ?>" class="btn"><i class="fas fa-search" style="color: #ffffff;"></i>この条件で検索する</a>
                </div>
            </div>
        </section>
        
        <?php
            $numbersPerPage = 5;
            $args = [
                'post_type' => 'blog',
                'post_status' => 'publish',
                'paged' => $paged,
                'posts_per_page' => $numbersPerPage,
                'orderby' => 'post_date',
                'order' => 'DESC'
            ];
            $custom_query = new WP_Query( $args );
        ?>

        <div class="container">
            <div class="display-number desc-15-normal">
                <span class="desc-20-bold">5</span>件（1～5件を表示中）
            </div>
        </div>

        <?php if( $custom_query->have_posts() ) : ?>
        <section class="blog-pannel">
            <div class="container">
                <ul class="blog-list">
                    <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                    <li class="blog-item">
                        <div class="top-wrapper">
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/blog-img001.png">
                            <div class="personal-info">
                                <h5 class="province desc-13-normal">茨城県</h5>
                                <h4 class="title desc-20-bold">小さなことから大きなことまでお手伝いします</h4>
                                <p class="company desc-13-normal">株式会社鈴木工業</p>
                                <p class="name desc-20-bold">鈴木 太郎</p>
                            </div>
                        </div>
                        <p class="middle-desc desc-15-normal">インターネットの接続から、簡単なパソコン操作の指導も行います。<br>業務の自動化に必要なのは、現在の業務の洗い出しからはじめます。全従業員のインタビューからはじまり、設計がおわるまでは約2カ月です。<br>実現する業務の姿と、すべての予算を分かりやすく説明したうえで納得後に進めます。
                        </p>
                        <div class="bottom-table">
                            <div class="row">
                                <div class="item desc-15-bold">初回相談料</div>
                                <div class="value desc-15-normal">無料</div>
                                <div class="item desc-15-bold">所在地</div>
                                <div class="value desc-15-normal">茨城県水戸市水戸町水戸番地4-20-23 水戸ビル</div>
                            </div>
                            <div class="row">
                                <div class="item desc-15-bold">提供内容</div>
                                <div class="value desc-15-normal">相談料 1回2時間 20,000円<br>
                                経理業務自動化設計 150,000円～<br>
                                受発注システムの構築 650,000円～</div>
                            </div>
                            <div class="row">
                                <div class="item desc-15-bold">備考</div>
                                <div class="value desc-15-normal">相談料 1回2時間 20,000円</div>
                            </div>
                        </div>
                        <a class="goto-page desc-15-bold" href="http://localhost/dx-robo/blog/%e5%b0%8f%e3%81%95%e3%81%aa%e3%81%93%e3%81%a8%e3%81%8b%e3%82%89%e5%a4%a7%e3%81%8d%e3%81%aa%e3%81%93%e3%81%a8%e3%81%be%e3%81%a7%e3%81%8a%e6%89%8b%e4%bc%9d%e3%81%84%e3%81%97%e3%81%be%e3%81%99/"><i class="fa-solid fa-arrow-right"></i>このRPA診断士の詳細はこちら</a>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
        <?php endif; ?>
    </main>

<?php get_footer(); ?>