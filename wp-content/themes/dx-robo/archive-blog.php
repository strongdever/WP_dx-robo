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
                    <div class="business-extension">
                        <div class="header-label desc-18-bold">
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/book-mark.svg">
                            対応できる業務範囲を選択
                        </div>
                        <ul class="business-list  checkbox-list">
                            <li class="item">
                                <input type="checkbox" id="computer-operation" name="business-extension" value="パソコン操作指導">
                                <label for="computer-operation" class="desc-15-bold">パソコン操作指導</label>
                            </li>
                            <li class="item">
                                <input type="checkbox" id="smartphone-setting" name="business-extension" value="スマホの設定">
                                <label for="smartphone-setting" class="desc-15-bold">スマホの設定</label>
                            </li>
                            <li class="item">
                                <input type="checkbox" id="zoom-meeting" name="business-extension" value="Zoom会議アカウント設定">
                                <label for="zoom-meeting" class="desc-15-bold">Zoom会議アカウント設定</label>
                            </li>
                            <li class="item">
                                <input type="checkbox" id="cloud-accounting" name="business-extension" value="クラウド会計ソフトを選びます">
                                <label for="cloud-accounting" class="desc-15-bold">クラウド会計ソフトを選びます</label>
                            </li>
                            <li class="item">
                                <input type="checkbox" id="smartphone-setting" name="business-extension" value="スマホの設定">
                                <label for="smartphone-setting" class="desc-15-bold">スマホの設定</label>
                            </li>
                        </ul>
                    </div>
                    <div class="region-selection">
                        <div class="header-label desc-18-bold">
                            <img src="<?php echo T_DIRE_URI; ?>/assets/img/map-mark.svg">
                            対応地域を選択
                        </div>
                        <ul class="region-list">
                            <li class="region-item">
                                <div class="region">
                                    <input type="checkbox" id="hokkaido-tohoku" name="hokkaido-tohoku" value="北海道・東北">
                                    <label class="desc-15-bold">北海道・東北</label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <li class="item">
                                        <input type="checkbox" id="hokkaido" name="hokkaido-tohoku" value="北海道">
                                        <label for="hokkaido" class="desc-15-bold">北海道</label>
                                    </li>
                                    <li class="item">
                                        <input type="checkbox" id="aomori" name="hokkaido-tohoku" value="青森県">
                                        <label for="aomori" class="desc-15-bold">青森県</label>
                                    </li>
                                    <li class="item">
                                        <input type="checkbox" id="iwate" name="hokkaido-tohoku" value="青森県">
                                        <label for="iwate" class="desc-15-bold">青森県</label>
                                    </li>
                                </ul>
                            </li>
                            <li class="region-item">
                                <div class="region">
                                    <input type="checkbox" id="kanto" name="kanto" value="関東">
                                    <label class="desc-15-bold">関東</label>
                                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/down-mark.svg">
                                </div>
                                <ul class="province-list checkbox-list">
                                    <li class="item">
                                        <input type="checkbox" id="tokyo" name="kanto" value="東京都">
                                        <label for="tokyo" class="desc-15-bold">東京都</label>
                                    </li>
                                    <li class="item">
                                        <input type="checkbox" id="kanagawa" name="kanto" value="神奈川県">
                                        <label for="kanagawa" class="desc-15-bold">神奈川県</label>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <a href="<?php echo HOME . 'blog'; ?>" class="btn"><i class="fas fa-search" style="color: #ffffff;"></i>この条件で検索する</a>
                </div>
            </div>
        </section>
        
        <div class="container">
            <div class="display-number desc-15-normal">
                <span class="desc-20-bold">5</span>件（1～5件を表示中）
            </div>
        </div>

        <section class="blog-pannel">
            <div class="container">
                <ul class="blog-list">
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
                </ul>
                <a class="goto-page desc-15-bold" href="<?php echo HOME . "blog"; ?>"><i class="fa-solid fa-arrow-right"></i>全国のRPA導入士一覧に戻る</a>
            </div>
        </section>
    </main>

<?php get_footer(); ?>