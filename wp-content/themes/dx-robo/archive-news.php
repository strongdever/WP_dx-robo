<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
// $cat_slug = get_query_var('news-category') ? get_query_var('news-category') : "";

?>

    <main id="archive-news">
        <div class="bread-crump">
                <div class="container">
                    <a href="<?php echo HOME; ?>" class="link">トップページ</a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="<?php echo HOME . 'news'; ?>" class="link">RPAニュース</a>
                    <i class="fas fa-chevron-right"></i>
                    <h5 class="current-page"><?php the_title(); ?></h5>
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
                <?php
                    $args = [
                        'post_type' => 'news',
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'posts_per_page' => 1,
                        'orderby' => 'post_date',
                        'order' => 'DESC'
                    ];
                    $custom_query = new WP_Query( $args );
                ?>
                <?php if( $custom_query->have_posts() ) : ?>
                    <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="latest-news">
                        <?php if( has_post_thumbnail() ): ?>
                            <img class="thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>">
                        <?php else: ?>
                            <img class="thumbnail" src="<?php echo catch_that_image(); ?>">
                        <?php endif; ?>
                            <div class="news-wrapper">
                                <div class="date"><?php the_time('Y.m.f'); ?></div>
                                <h3 class="title"><?php the_title(); ?></h3>
                                <p class="content desc-15-normal"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </a>
                    <?php
                    $first_ID = get_the_ID();
                    endwhile;
                    ?>
                <?php endif; ?>
                <?php
                $args = [
                        'post_type' => 'news',
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'posts_per_page' => 9,
                        'post__not_in'  => array($first_ID),
                        'orderby' => 'post_date',
                        'order' => 'DESC'
                    ];
                    $custom_query = new WP_Query( $args );
                ?>
                <?php if( $custom_query->have_posts() ) : ?>
					<ul class="news-list">
                        <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						<li class="news-wrapper">
							<div class="date"><?php the_time('Y.m.d'); ?></div>
							<h3 class="title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
						</li>
                        <?php endwhile; ?>
					</ul>
                <?php endif; ?>
                    <div class="pagination">
                        <?php custom_pagination($custom_query->max_num_pages, $paged, $custom_query->found_posts); ?>
                    </div>
				</div>
			</div>
		</section>

    </main>

	<?php get_footer(); ?>