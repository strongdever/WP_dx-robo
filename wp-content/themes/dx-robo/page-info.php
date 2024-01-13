<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
// $cat_slug = get_query_var('news-category') ? get_query_var('news-category') : "";

?>

    <main id="info-page">
        <div class="bread-crump">
            <div class="container">
                <a href="<?php echo HOME; ?>" class="link">トップページ</a>
                <i class="fas fa-chevron-right"></i>
                <h5 class="current-page">関連補助金情報</h5>
            </div>
        </div>
        <div class="page-title">
            <div class="container">
                <h5 class="en">INFO</h5>
                <h2 class="jp">関連補助金情報</h2>
            </div>
        </div>
        <div class="container">
            <section class="head-text">
                <div class="title-32-bold">
                業務効率を上げるその取組み<br>
                <span class="title-40-bold">補助金の対象</span>かもしれません！
                </div>
            </section>
            <section class="middle-section">
                <div class="top-text">
                    <p class="title-32-bold">補助金の活用</p>
                    <p class="title-32-bold">最大<span>1.5</span>億円</p>
                </div>
                <p class="middle-text desc-18-bold">業務の自動化や、事業の成長に伴う投資には補助金を活用できるものが多くあります。<br>
                以下のような費用は補助金の対象になる場合があります。
                </p>
                <div class="content-pannel">
                    <div class="item">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/check-mark.svg">
                        <p class="desc-18-normal">新規事業のホームページ作成費</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/check-mark.svg">
                        <p class="desc-18-normal">システム投資</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/check-mark.svg">
                        <p class="desc-18-normal">マッチングプラットフォームの構築</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/check-mark.svg">
                        <p class="desc-18-normal">広告宣伝費</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/check-mark.svg">
                        <p class="desc-18-normal">機械、設備投資</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/check-mark.svg">
                        <p class="desc-18-normal">インボイス対応会計システム</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/check-mark.svg">
                        <p class="desc-18-normal">ECサイト</p>
                    </div>
                    <div class="item">
                        <img src="<?php echo T_DIRE_URI; ?>/assets/img/check-mark.svg">
                        <p class="desc-18-normal">決済ソフト</p>
                    </div>
                </div>
                <p class="bottom-text desc-20-bold">業務の自動化業務の自動化や効率化に取り組む前に、一度ご相談ください</p>
            </section>
            <div class="subsidy-section">
                <p class="header-text title-32-bold">活用できる主な補助金の紹介</p>
                <ul class="subsidy-list">
                    <li class="subsidy-item">
                        <p class="head-label desc-24-bold">IT導入補助金</p>
                        <p class="desc-16-normal head-desciption">中小企業や小規模事業者の方の課題解決など必要なITツールを導入する経費の一部を補助するものです。<br>
                        業務効率化や売上の向上をサポートする補助金です。</p>
                        <div class="custom-table">
                            <div class="table-row">
                                <p class="head desc-16-normal">対象となる経費例</p>
                                <p class="content desc-16-bold">ソフトウェア購入費、クラウド利用料、導入関連費、デジタル化基盤導入枠<br>
                                （デジタル化基盤導入類型）、ハードウェア購入費等</p>
                            </div>
                            <div class="table-row">
                                <p class="head desc-16-normal">補助金額例</p>
                                <p class="content desc-16-bold">ソフトウェアの購入やクラウド利用で<br>
                                1/2等の補助、最大350万円補助されます。</p>
                            </div>
                        </div>
                        <a class="goto-page desc-15-bold" href="<?php echo HOME . "inquiry"; ?>"><i class="fa-solid fa-arrow-right"></i>詳細はお問い合わせください</a>
                    </li>
                    <li class="subsidy-item">
                        <p class="head-label desc-24-bold">小規模事業者持続化補助金</p>
                        <p class="desc-16-normal head-desciption">小規模事業者が自社の経営を見直し、持続的な経営のための経営計画による、販路開拓や生産性向上を支援する補助金です。</p>
                        <div class="custom-table">
                            <div class="table-row">
                                <p class="head desc-16-normal">対象となる経費例</p>
                                <p class="content desc-16-bold">機械設備、新サービスに伴う広報、Webサイト、展示会出展費用、<br>
                                新商品の開発や販路開拓に関わる費用等</p>
                            </div>
                            <div class="table-row">
                                <p class="head desc-16-normal">補助金額例</p>
                                <p class="content desc-16-bold">補助率2/3で通常枠で50万円、最大200万円補助されます。</p>
                            </div>
                        </div>
                        <a class="goto-page desc-15-bold" href="<?php echo HOME . "inquiry"; ?>"><i class="fa-solid fa-arrow-right"></i>詳細はお問い合わせください</a>
                    </li>
                    <li class="subsidy-item">
                        <p class="head-label desc-24-bold">ものづくり補助金</p>
                        <p class="desc-16-normal head-desciption">中小企業の経営革新のための設備投資等に使える補助金です。</p>
                        <div class="custom-table">
                            <div class="table-row">
                                <p class="head desc-16-normal">対象となる経費例</p>
                                <p class="content desc-16-bold">試作品を含む新商品の開発や、新たな生産方式、提供方式、<br>
                                役務開発など、経営革新のための開発、導入費用等で、雇用拡大、<br>
                                デジタル推進、温室効果ガスの排出削減を目的としたグリーン枠、<br>
                                海外事業の拡大を目的としたグローバル市場開拓枠などがあります。</p>
                            </div>
                            <div class="table-row">
                                <p class="head desc-16-normal">補助金額例</p>
                                <p class="content desc-16-bold">補助率2/3、通常枠で1250万円まで、グリーン枠、4000万円、<br>
                                グローバル市場開拓枠は3000万円まで補助されます。</p>
                            </div>
                        </div>
                        <a class="goto-page desc-15-bold" href="<?php echo HOME . "inquiry"; ?>"><i class="fa-solid fa-arrow-right"></i>詳細はお問い合わせください</a>
                    </li>
                    <li class="subsidy-item">
                        <p class="head-label desc-24-bold">事業再構築補助金</p>
                        <p class="desc-16-normal head-desciption">新型コロナウィルス感染症の影響による経済の変化に対応するための新市場への進出や事業転換、事業再編等、事業再構築への挑戦を支援する補助金です。</p>
                        <div class="custom-table">
                            <div class="table-row">
                                <p class="head desc-16-normal">対象となる経費例</p>
                                <p class="content desc-16-bold">**********************************************************************************************************************************************<br>
                                （デジタル化基盤導入類型）、ハードウェア購入費等</p>
                            </div>
                            <div class="table-row">
                                <p class="head desc-16-normal">補助金額例</p>
                                <p class="content desc-16-bold">**********************************************************************************************************************************************</p>
                            </div>
                        </div>
                        <a class="goto-page desc-15-bold" href="<?php echo HOME . "inquiry"; ?>"><i class="fa-solid fa-arrow-right"></i>詳細はお問い合わせください</a>
                    </li>
                </ul>
                <a href="<?php echo HOME . 'inquiry'; ?>" class="btn bottom">ご希望・相談入力フォーム</a>
            </div>
        </div>
    </main>

	<?php get_footer("consult"); ?>