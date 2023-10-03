<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
// $cat_slug = get_query_var('news-category') ? get_query_var('news-category') : "";

?>

    <main id="single-news">
        <div class="bread-crump">
                <div class="container">
                    <a href="<?php echo HOME; ?>" class="link">トップページ</a>
                    <i class="fas fa-chevron-right"></i>
                    <h5 class="current-page">RPAニュース</h5>
                </div>
            </div>
            <div class="page-title">
                <div class="container">
                    <h5 class="en">NEWS</h5>
                    <h2 class="jp">RPAニュース</h2>
                </div>
            </div>

        <section class="news">
			<div class="container">
				<div class="news-pannel">
                    <h2 class="title"><?php the_title(); ?></h2>
                    <p class="date"><?php the_time('Y.m.d'); ?>
                    <div class="content-wrapper">
                    <?php if( has_post_thumbnail() ): ?>
                        <img class="thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>">
                    <?php else: ?>
                        <img class="thumbnail" src="<?php echo catch_that_image(); ?>">
                    <?php endif; ?>
                        <?php the_content(); ?>
                        <?php if (shortcode_exists('addtoany')) : ?>
                            <?php echo do_shortcode('[addtoany]'); ?>
                        <?php endif; ?>
                    </div>
                    <a class="goto-page desc-15-bold" href="<?php echo HOME . "news"; ?>"><i class="fa-solid fa-arrow-left"></i>RPAニュース一覧に戻る</a>
                </div>
			</div>
		</section>

    </main>

	<?php get_footer(); ?>