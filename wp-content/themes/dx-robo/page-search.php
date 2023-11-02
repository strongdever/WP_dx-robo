<?php

	/*
	Template Name: Page Search Template
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$work_scopes = get_query_var('work-scope') ? wp_unslash((array)get_query_var('work-scope')) : [];
$province_names = get_query_var('province-name') ? wp_unslash((array)get_query_var('province-name')) : [];
$search_key = get_query_var('s-key') ? get_query_var('s-key') : '';
$s_keys = explode(' ', $search_key);
update_blog_meta_keys();
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
                <div class="search-wrapper" action="<?php echo HOME . 'search'; ?>" method="get" id="myForm">
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
                                    <input type="checkbox" class="work-scope" id="<?php echo $child_cat->slug; ?>" name="work-scope[]" value="<?php echo $child_cat->name; ?>" <?php echo in_array($child_cat->name, $work_scopes) ? 'checked' : ''; ?>>&nbsp;&nbsp;<?php echo $child_cat->name; ?>
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
                            <li class="region-item hokkaido-tohku">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" class="province-name" name="province-name[]" value="<?php echo $child_cat->name; ?>" <?php echo in_array($child_cat->name, $province_names) ? 'checked' : ''; ?>>&nbsp;&nbsp;<?php echo $child_cat->name; ?>
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
                            <li class="region-item kanto">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" class="province-name" name="province-name[]" value="<?php echo $child_cat->name; ?>" <?php echo in_array($child_cat->name, $province_names) ? 'checked' : ''; ?>>&nbsp;&nbsp;<?php echo $child_cat->name; ?>
                                        </label>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <?php
                            }
                            ?>

                            <?php
                            $parent_cat = get_term_by('name', '中部', 'blog-category');
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
                            <li class="region-item chubu">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" class="province-name" name="province-name[]" value="<?php echo $child_cat->name; ?>" <?php echo in_array($child_cat->name, $province_names) ? 'checked' : ''; ?>>&nbsp;&nbsp;<?php echo $child_cat->name; ?>
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
                            <li class="region-item kinki">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" class="province-name" name="province-name[]" value="<?php echo $child_cat->name; ?>" <?php echo in_array($child_cat->name, $province_names) ? 'checked' : ''; ?>>&nbsp;&nbsp;<?php echo $child_cat->name; ?>
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
                            <li class="region-item chuugoku">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" class="province-name" name="province-name[]" value="<?php echo $child_cat->name; ?>" <?php echo in_array($child_cat->name, $province_names) ? 'checked' : ''; ?>>&nbsp;&nbsp;<?php echo $child_cat->name; ?>
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
                            <li class="region-item shikoku">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" class="province-name" name="province-name[]" value="<?php echo $child_cat->name; ?>" <?php echo in_array($child_cat->name, $province_names) ? 'checked' : ''; ?>>&nbsp;&nbsp;<?php echo $child_cat->name; ?>
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
                            <li class="region-item kyushu-okinawa">
                                <div class="region">
                                    <input type="checkbox" id="<?php echo $parent_slug; ?>" name="" value="<?php echo $parent_name; ?>">
                                    <label class="desc-15-bold"><?php echo $parent_name; ?></label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <?php foreach( $child_cats as $child_cat ) : ?>
                                    <li class="item">
                                        <label class="desc-15-bold">
                                            <input type="checkbox" id="<?php echo $child_cat->slug; ?>" class="province-name" name="province-name[]" value="<?php echo $child_cat->name; ?>" <?php echo in_array($child_cat->name, $province_names) ? 'checked' : ''; ?>>&nbsp;&nbsp;<?php echo $child_cat->name; ?>
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
                    <a class="btn"><i class="fas fa-search" style="color: #ffffff;"></i>この条件で検索する</a>
                </div>
            </div>
            <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
        </section>
        
        <div class="blog-wrapper">
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

                $tax_query = [];

                if( $work_scopes ) {
                    $tax_query[] = [
                        'taxonomy' => 'blog-category',
                        'field' => 'name',
                        'terms' => $work_scopes
                    ];
                }

                if( $province_names ) {
                    $tax_query[] = [
                        'taxonomy' => 'blog-category',
                        'field' => 'name',
                        'terms' => $province_names
                    ];
                }
            
                if ( !empty($tax_query) ) {
                    $args['tax_query'] = $tax_query;
                }

                if( $s_keys ) {
                    $meta_query = [
                        'relation' => 'OR',
                    ];
                    foreach( $s_keys as $s_key ) {
                        if( !$s_key ) {
                            continue;
                        }
                        $meta_query[] = array(
                            'key'     => 'blog_title', // Replace with the custom field key if needed
                            'value'   => $s_key, // Replace with your search keywords
                            'compare' => 'LIKE',
                        );
                        $meta_query[] = array(
                            'key'     => 'blog_content', // Replace with the custom field key if needed
                            'value'   => $s_key, // Replace with your search keywords
                            'compare' => 'LIKE',
                        );
                        $meta_query[] = array(
                            'key'     => 'company', // Replace with the custom field key if needed
                            'value'   => $s_key, // Replace with your search keywords
                            'compare' => 'LIKE',
                        );
                        $meta_query[] = array(
                            'key'     => 'name', // Replace with the custom field key if needed
                            'value'   => $s_key, // Replace with your search keywords
                            'compare' => 'LIKE',
                        );
                        $meta_query[] = array(
                            'key'     => 'fee', // Replace with the custom field key if needed
                            'value'   => $s_key, // Replace with your search keywords
                            'compare' => 'LIKE',
                        );
                        $meta_query[] = array(
                            'key'     => 'location', // Replace with the custom field key if needed
                            'value'   => $s_key, // Replace with your search keywords
                            'compare' => 'LIKE',
                        );
                        $meta_query[] = array(
                            'key'     => 'provide_content', // Replace with the custom field key if needed
                            'value'   => $s_key, // Replace with your search keywords
                            'compare' => 'LIKE',
                        );
                        $meta_query[] = array(
                            'key'     => 'remarks', // Replace with the custom field key if needed
                            'value'   => $s_key, // Replace with your search keywords
                            'compare' => 'LIKE',
                        );
                        $meta_query[] = array(
                            'key'     => 'career', // Replace with the custom field key if needed
                            'value'   => $s_key, // Replace with your search keywords
                            'compare' => 'LIKE',
                        );
                        $meta_query[] = array(
                            'key'     => 'qualification-list', // Replace with the custom field key if needed
                            'value'   => $s_key, // Replace with your search keywords
                            'compare' => 'LIKE',
                        );
                    }
                    $args['meta_query'] = $meta_query;
                }
                
                $custom_query = new WP_Query( $args );
            ?>
            <?php
            $total_counts = $custom_query->found_posts;
            $first_number = $total_counts == 0 ? 0 : ($paged - 1) * $numbersPerPage + 1;
            $second_number = ($paged * $numbersPerPage) > $total_counts ? $total_counts : ($paged * $numbersPerPage);
            ?>
            <div class="container">
                <div class="display-number desc-15-normal">
                    <span class="desc-20-bold"><?php echo $total_counts; ?></span>件（<?php echo $first_number; ?>～<?php echo $second_number; ?>件を表示中）
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
                                    <div class="provinces">
                                        <?php
                                        $post_cats = get_the_terms(get_the_ID(), 'blog-category');
                                        if( $post_cats ) :
                                            foreach($post_cats as $post_cat) :
                                                $parent_cat = get_term($post_cat->parent, 'blog-category');
                                                $root_cat = $parent_cat->parent;
                                                if($root_cat == 62 ) :  //都道府県
                                        ?>
                                        <h5 class="province desc-13-normal"><?php echo $post_cat->name; ?></h5>
                                        <?php 
                                                endif;
                                            endforeach;
                                        endif; ?>
                                    </div>
                                    <h4 class="title desc-20-bold"><?php the_title(); ?></h4>
                                    <p class="company desc-13-normal"><?php echo get_field('company'); ?></p>
                                    <p class="name desc-20-bold"><?php echo get_field('name'); ?></p>
                                </div>
                            </div>
                            <p class="middle-desc desc-15-normal"><?php the_content(); ?></p>
                            <div class="bottom-table">
                                <div class="row">
                                    <div class="item desc-15-bold">初回相談料</div>
                                    <div class="value desc-15-normal"><?php echo get_field('fee'); ?></div>
                                    <div class="item desc-15-bold">所在地</div>
                                    <div class="value desc-15-normal"><?php echo get_field('location'); ?></div>
                                </div>
                                <div class="row">
                                    <div class="item desc-15-bold">提供内容</div>
                                    <div class="value desc-15-normal"><?php echo wp_kses_post ( get_field('provide_content') ); ?></div>
                                </div>
                                <div class="row">
                                    <div class="item desc-15-bold">備考</div>
                                    <div class="value desc-15-normal"><?php echo wp_kses_post ( get_field('remarks') ); ?></div>
                                </div>
                            </div>
                            <a class="goto-page desc-15-bold" href="<?php the_permalink(); ?>"><i class="fa-solid fa-arrow-right"></i>このRPA診断士の詳細はこちら</a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </section>
            <?php endif; ?>
        </div>
    </main>

    <script type="text/javascript">
        !(function ($) {
            $(document).ready(function(){
                var work_scope = [];
                var province_name = [];
                var paged = 1;

                $('.btn').click(function() {
                    work_scope = [];
                    province_name = [];
                    $('.work-scope:checked').each(function() {
                        work_scope.push($(this).val());
                    });
                    $('.province-name:checked').each(function() {
                        province_name.push($(this).val());
                    });
                    paged = "<?php echo $paged; ?>";
                    async_Request(work_scope, province_name, paged);
                });
            });

            function async_Request(work_scope, province_name, paged) {  //ajax request function
                $(".lds-spinner").show();
                console.log(work_scope);
                var data = {
                    work_scope: work_scope,
                    province_name: province_name,
                    paged: paged
                }
                $.ajax({
                    url: ajax_object.ajax_url,
                    type: 'POST',
                    data: {
                        action: 'my_ajax_action',
                        my_data: data
                    },
                    success: function(response) {
                        // Handle the response
                        blog_data = response.data['blog_data'];
                        $('.blog-wrapper').empty();
                        $('.blog-wrapper').append(blog_data);
                        $(".lds-spinner").hide();
                    },
                });
            }
        })(jQuery);
    </script>

<?php get_footer(); ?>