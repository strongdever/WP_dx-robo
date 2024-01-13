<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
// $cat_slug = get_query_var('blog-category') ? get_query_var('blog-category') : "";

?>

<main id="single-blog">
    <div class="bread-crump">
        <div class="container">
            <a href="<?php echo HOME; ?>" class="link">トップページ</a>
            <i class="fas fa-chevron-right"></i>
            <a href="<?php echo HOME . 'search'; ?>" class="link">全国のRPA導入士</a>
            <i class="fas fa-chevron-right"></i>
            <h5 class="current-page">
                <?php echo get_field('name'); ?>
            </h5>
        </div>
    </div>
    <!-- <div class="page-title">
            <div class="container">
                <h5 class="en">SEARCH</h5>
                <h2 class="jp">全国のRPA導入士</h2>
            </div>
        </div> -->
    <section class="blog-pannel">
        <div class="container">
            <ul class="blog-list">
                <li class="blog-item">
                    <div class="top-wrapper">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/blog-img001.png">
                        <div class="personal-info">
                            <div class="provinces">
                                <?php
                                $post_cats = get_the_terms(get_the_ID(), 'blog-category');
                                if ($post_cats):
                                    foreach ($post_cats as $post_cat):
                                        $parent_cat = get_term($post_cat->parent, 'blog-category');
                                        $root_cat = $parent_cat->parent;
                                        if ($root_cat == 62):  //都道府県
                                            ?>
                                            <h5 class="province desc-13-normal">
                                                <?php echo $post_cat->name; ?>
                                            </h5>
                                            <?php
                                        endif;
                                    endforeach;
                                endif; ?>
                            </div>
                            <h4 class="title desc-20-bold">
                                <?php the_title(); ?>
                            </h4>
                            <p class="company desc-13-normal">
                                <?php echo get_field('company'); ?><span class="name desc-20-bold">
                                    <?php echo get_field('name'); ?>
                                </span>
                            </p>

                            <a class="btn btn-inquiry"><span>このRPA導入士に無料相談する</span></a>
                        </div>
                    </div>
                    <p class="middle-desc desc-15-normal">
                        <?php the_content(); ?>
                    </p>
                    <div class="bottom-table">
                        <div class="row">
                            <div class="item desc-15-bold">初回相談料</div>
                            <div class="value desc-15-normal">
                                <?php echo get_field('fee'); ?>
                            </div>
                            <div class="item desc-15-bold">所在地</div>
                            <div class="value desc-15-normal">
                                <?php echo get_field('location'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="item desc-15-bold">提供内容</div>
                            <div class="value desc-15-normal">
                                <?php echo wp_kses_post(get_field('provide_content')); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="item desc-15-bold">備考</div>
                            <div class="value desc-15-normal">
                                <?php echo wp_kses_post(get_field('remarks')); ?>
                            </div>
                        </div>
                    </div>
                    <div class="career-wrapper">
                        <div class="title-lable desc-15-bold">経歴</div>
                        <p class="desc-15-normal">
                            <?php echo wp_kses_post(get_field('career')); ?>
                        </p>
                    </div>
                    <?php if (have_rows('qualification-list')): ?>
                        <div class="qualification-wrapper">
                            <div class="title-lable desc-15-bold">保有資格</div>
                            <ul class="qualification-list desc-15-normal">
                                <?php while (have_rows('qualification-list')):
                                    the_row(); ?>
                                    <?php if (get_sub_field('qualification')): ?>
                                        <li class="qualification-item">
                                            <?php the_sub_field('qualification'); ?>
                                        </li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </li>
            </ul>
            <a class="goto-page desc-15-bold" href="<?php echo HOME . "search"; ?>"><i
                    class="fa-solid fa-arrow-right"></i>全国のRPA導入士一覧に戻る</a>
        </div>
    </section>
</main>

<script type="text/javascript">
    !(function ($) {
        "use strict";
        $(document).ready(function () {
            $('.btn-inquiry').click(function () {
                console.log('/////////');
                localStorage.setItem('purpose_param', 'RPA導入士へのご相談');
                localStorage.setItem('name_param', '<?php echo get_field('name'); ?>');
                window.location.href = "<?php echo HOME . 'inquiry'; ?>";
            });
        });
    })(jQuery);
</script>

<?php get_footer(); ?>