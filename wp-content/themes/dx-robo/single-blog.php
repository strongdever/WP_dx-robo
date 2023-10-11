<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
// $cat_slug = get_query_var('blog-category') ? get_query_var('blog-category') : "";

?>

    <main id="single-blog">
        <div class="bread-crump">
            <div class="container">
                <a href="<?php echo HOME; ?>" class="link">トップページ</a>
                <i class="fas fa-chevron-right"></i>
                <a href="<?php echo HOME . 'blog'; ?>" class="link">全国のRPA導入士</a>
                <i class="fas fa-chevron-right"></i>
                <h5 class="current-page">鈴木 太郎</h5>
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
                                <h5 class="province desc-13-normal">茨城県</h5>
                                <h4 class="title desc-20-bold">小さなことから大きなことまでお手伝いします</h4>
                                <div class="company-name">
                                    <p class="company desc-13-normal">株式会社鈴木工業</p>
                                    <p class="name desc-20-bold">鈴木 太郎</p>
                                </div>
                                <a class="white btn" href="<?php echo HOME . 'intro-inquery'; ?>">このRPA導入士に無料相談する</a>
                            </div>
                        </div>
                        <p class="middle-desc desc-15-normal">インターネットのs接続から、簡単なパソコン操作の指導も行います。<br>業務の自動化に必要なのは、現在の業務の洗い出しからはじめます。全従業員のインタビューからはじまり、設計がおわるまでは約2カ月です。<br>実現する業務の姿と、すべての予算を分かりやすく説明したうえで納得後に進めます。
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
                        <div class="career-wrapper">
                            <div class="title-lable desc-15-bold">経歴</div>
                            <p class="desc-15-normal">インターネットの接続から、簡単なパソコン操作の指導も行います。<br>
                            業務の自動化に必要なのは、現在の業務の洗い出しからはじめます。全従業員のインタビューからはじまり、設計がおわるまでは約2カ月です。<br>
                            実現する業務の姿と、すべての予算を分かりやすく説明したうえで納得後に進めます。</p>
                        </div>
                        <div class="qualification-wrapper">
                            <div class="title-lable desc-15-bold">保有資格</div>
                            <ul class="qualification-list desc-15-normal">
                                <li class="qualification-item">
                                アドバンスド RPA プロフェッショナル
                                </li>
                                <li class="qualification-item">
                                マスター RPA プロフェッショナル
                                </li>
                                <li class="qualification-item">
                                マスター RPA プロフェッショナル
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <a class="goto-page desc-15-bold" href="<?php echo HOME . "blog"; ?>"><i class="fa-solid fa-arrow-right"></i>全国のRPA導入士一覧に戻る</a>
            </div>
        </section>
    </main>

<?php get_footer(); ?>