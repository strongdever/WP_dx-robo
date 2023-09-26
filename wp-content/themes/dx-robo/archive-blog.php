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
                    <div class="top-label">検索条件</div>
                    <div class="business-extension">
                        <div class="header-label">
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/book-mark.svg">
                            対応できる業務範囲を選択
                        </div>
                        <ul class="business-list">
                            <li class="item">
                                <input type="checkbox" id="computer-operation" name="computer-operation" value="パソコン操作指導" class="business-checkbox">
                                <label for="middle">パソコン操作指導</label>
                            </li>
                            <li class="item">
                                <input type="checkbox" id="smartphone-setting" name="smartphone-setting" value="スマホの設定" class="business-checkbox">
                                <label for="middle">スマホの設定</label>
                            </li>
                            <li class="item">
                                <input type="checkbox" id="zoom-meeting" name="zoom-meeting" value="Zoom会議アカウント設定" class="business-checkbox">
                                <label for="middle">Zoom会議アカウント設定</label>
                            </li>
                            <li class="item">
                                <input type="checkbox" id="cloud-accounting" name="cloud-accounting" value="クラウド会計ソフトを選びます" class="business-checkbox">
                                <label for="middle">クラウド会計ソフトを選びます</label>
                            </li>
                            <li class="item">
                                <input type="checkbox" id="smartphone-setting" name="smartphone-setting" value="スマホの設定" class="business-checkbox">
                                <label for="middle">スマホの設定</label>
                            </li>
                        </ul>
                    </div>
                    <div class="region-selection">
                        <div class="header-label">
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/map-mark.svg">
                            対応地域を選択
                        </div>
                        <ul class="region-list">
                            <li class="region-item">
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>