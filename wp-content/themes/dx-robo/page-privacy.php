<?php

	/*
	Template Name: Privacy Template
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
// $cat_slug = get_query_var('news-category') ? get_query_var('news-category') : "";

?>

    <main id="recruit-page">
        <div class="bread-crump">
            <div class="container">
                <a href="<?php echo HOME; ?>" class="link">トップページ</a>
                <i class="fas fa-chevron-right"></i>
                <h5 class="current-page">プライバシーポリシー</h5>
            </div>
        </div>
        <div class="page-title">
            <div class="container">
                <h5 class="en">PRIVACY POLICY</h5>
                <h2 class="jp">プライバシーポリシー</h2>
            </div>
        </div>
        <div class="container">
            <div class="content-wrapper desc-15-normal">
                <?php the_content(); ?>
            </div>
        </div>
    </main>

	<?php get_footer("consult"); ?>
    