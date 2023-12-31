<?php

	/*
	Template Name: Recruit Template
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
                <h5 class="current-page">ご希望・相談入力フォーム</h5>
            </div>
        </div>
        <div class="page-title">
            <div class="container">
                <h5 class="en">RECRUIT</h5>
                <h2 class="jp">RPA導入士になるには？</h2>
            </div>
        </div>
        <h2 class="title-32-bold head-title">掲載募集</h2>
        <div class="container">
            <div class="part1 part">
                <h3 class="part-title desc-24-bold">
                どんな人の掲載希望を待っているか？
                </h3>
                <p class="part-content desc-18-bold">
                ·&nbsp;オフィスのIT化を支援できるメーカーのご担当の方<br>
                ·&nbsp;オフィスで必要なパソコンやインターネットの導入などデジタル機器の導入支援ができる方<br>
                ·&nbsp;オフィスづくりの支援をしている会社でデジタル化支援をしている方
                </p>
            </div>
            <div class="part2 part">
                <h3 class="part-title desc-24-bold">
                RPAが必要な場面
                </h3>
                <p class="part-content desc-18-bold">
                新しいソフトの導入をし、オフィスの業務効率化のための、新しい仕組みを導入したい、<br>
                セキュリティを強化の提案をうけても、どうしていいかわからない場面は多い。<br>
                企業側にたってオフィスのデジタル化を推進アドバイザーが必要です。
                </p>
            </div>
            <div class="part3 part">
                <h3 class="part-title desc-24-bold">
                掲載するための条件
                </h3>
                <p class="part-content desc-18-bold">
                ·&nbsp;新しい仕組みを調べて、わかりやすい言葉（専門用語を使わない）で詳しくない人に説明できる方<br>
                ·&nbsp;売り込みではなく、企業側の要望に応えた導入アドバイスができる方
                </p>
                <div class="windows">
                    <p class="window-title desc-20-bold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M22.2 17.6334L14.0016 3.39563C13.7967 3.04681 13.5042 2.75758 13.1532 2.55662C12.8021 2.35566 12.4046 2.24994 12 2.24994C11.5955 2.24994 11.198 2.35566 10.8469 2.55662C10.4958 2.75758 10.2033 3.04681 9.99847 3.39563L1.80003 17.6334C1.60291 17.9708 1.49902 18.3546 1.49902 18.7453C1.49902 19.1361 1.60291 19.5198 1.80003 19.8572C2.00228 20.2081 2.29425 20.4989 2.64599 20.6997C2.99773 20.9006 3.39658 21.0042 3.80159 21H20.1985C20.6032 21.0039 21.0016 20.9001 21.353 20.6993C21.7044 20.4985 21.9961 20.2078 22.1982 19.8572C22.3956 19.52 22.4998 19.1363 22.5001 18.7456C22.5004 18.3548 22.3969 17.971 22.2 17.6334ZM20.8997 19.1063C20.8282 19.2282 20.7256 19.3289 20.6024 19.3981C20.4792 19.4673 20.3398 19.5024 20.1985 19.5H3.80159C3.66029 19.5024 3.52088 19.4673 3.39765 19.3981C3.27442 19.3289 3.17181 19.2282 3.10034 19.1063C3.0356 18.9966 3.00145 18.8717 3.00145 18.7444C3.00145 18.6171 3.0356 18.4921 3.10034 18.3825L11.2988 4.14469C11.3717 4.02335 11.4748 3.92295 11.598 3.85324C11.7212 3.78354 11.8603 3.7469 12.0019 3.7469C12.1435 3.7469 12.2826 3.78354 12.4058 3.85324C12.529 3.92295 12.6321 4.02335 12.705 4.14469L20.9035 18.3825C20.9676 18.4924 21.0011 18.6176 21.0005 18.7449C20.9998 18.8722 20.965 18.997 20.8997 19.1063ZM11.25 13.5V9.75C11.25 9.55109 11.329 9.36032 11.4697 9.21967C11.6104 9.07902 11.8011 9 12 9C12.1989 9 12.3897 9.07902 12.5304 9.21967C12.671 9.36032 12.75 9.55109 12.75 9.75V13.5C12.75 13.6989 12.671 13.8897 12.5304 14.0303C12.3897 14.171 12.1989 14.25 12 14.25C11.8011 14.25 11.6104 14.171 11.4697 14.0303C11.329 13.8897 11.25 13.6989 11.25 13.5ZM13.125 16.875C13.125 17.0975 13.059 17.315 12.9354 17.5C12.8118 17.685 12.6361 17.8292 12.4305 17.9144C12.225 17.9995 11.9988 18.0218 11.7806 17.9784C11.5623 17.935 11.3619 17.8278 11.2045 17.6705C11.0472 17.5132 10.9401 17.3127 10.8966 17.0945C10.8532 16.8762 10.8755 16.65 10.9607 16.4445C11.0458 16.2389 11.19 16.0632 11.375 15.9396C11.56 15.816 11.7775 15.75 12 15.75C12.2984 15.75 12.5845 15.8685 12.7955 16.0795C13.0065 16.2905 13.125 16.5766 13.125 16.875Z" fill="#333333"/>
                        </svg>&nbsp;注意
                    </p>
                    <div class="window-content">
                        <p class="head-text desc-18-bold">
                        以下のような売り込みや専門用語による威圧的なアドバイスをした場合は、<br>
                        イエローカード制度に基づき、お客様からの申請により登録を抹消する場合があります。
                        </p>
                        <ul class="content-pannel">
                            <li class="pannel-item desc-18-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M22.8119 8.52284L10.7735 20.5603C10.6342 20.6997 10.4688 20.8102 10.2868 20.8856C10.1048 20.961 9.90972 20.9998 9.7127 20.9998C9.51569 20.9998 9.32061 20.961 9.1386 20.8856C8.95659 20.8102 8.79121 20.6997 8.65192 20.5603L1.93755 13.8103C1.65674 13.5291 1.49902 13.1479 1.49902 12.7505C1.49902 12.3531 1.65674 11.9719 1.93755 11.6906L4.18755 9.44065C4.46789 9.16024 4.84785 9.00223 5.24436 9.00118C5.64086 9.00013 6.02166 9.15611 6.30348 9.43502L9.73849 12.7416L9.7488 12.7519L18.4422 4.18596C18.7234 3.90602 19.1039 3.74884 19.5007 3.74884C19.8974 3.74884 20.278 3.90602 20.5591 4.18596L22.8091 6.39471C22.9496 6.53394 23.0612 6.69958 23.1374 6.88209C23.2136 7.06461 23.253 7.2604 23.2533 7.45819C23.2535 7.65598 23.2147 7.85188 23.1389 8.03459C23.0632 8.21731 22.952 8.38324 22.8119 8.52284Z" fill="#FFC701"/>
                                </svg>
                                専門用語がわかりづらく、不明点が多いお客様に対して威圧的な説明を行った
                            </li>
                            <li class="pannel-item desc-18-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M22.8119 8.52284L10.7735 20.5603C10.6342 20.6997 10.4688 20.8102 10.2868 20.8856C10.1048 20.961 9.90972 20.9998 9.7127 20.9998C9.51569 20.9998 9.32061 20.961 9.1386 20.8856C8.95659 20.8102 8.79121 20.6997 8.65192 20.5603L1.93755 13.8103C1.65674 13.5291 1.49902 13.1479 1.49902 12.7505C1.49902 12.3531 1.65674 11.9719 1.93755 11.6906L4.18755 9.44065C4.46789 9.16024 4.84785 9.00223 5.24436 9.00118C5.64086 9.00013 6.02166 9.15611 6.30348 9.43502L9.73849 12.7416L9.7488 12.7519L18.4422 4.18596C18.7234 3.90602 19.1039 3.74884 19.5007 3.74884C19.8974 3.74884 20.278 3.90602 20.5591 4.18596L22.8091 6.39471C22.9496 6.53394 23.0612 6.69958 23.1374 6.88209C23.2136 7.06461 23.253 7.2604 23.2533 7.45819C23.2535 7.65598 23.2147 7.85188 23.1389 8.03459C23.0632 8.21731 22.952 8.38324 22.8119 8.52284Z" fill="#FFC701"/>
                                </svg>
                                ソフトや通信機器など必要かどうか、お客様がわからないまま勧め購入させた
                            </li>
                            <li class="pannel-item desc-18-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M22.8119 8.52284L10.7735 20.5603C10.6342 20.6997 10.4688 20.8102 10.2868 20.8856C10.1048 20.961 9.90972 20.9998 9.7127 20.9998C9.51569 20.9998 9.32061 20.961 9.1386 20.8856C8.95659 20.8102 8.79121 20.6997 8.65192 20.5603L1.93755 13.8103C1.65674 13.5291 1.49902 13.1479 1.49902 12.7505C1.49902 12.3531 1.65674 11.9719 1.93755 11.6906L4.18755 9.44065C4.46789 9.16024 4.84785 9.00223 5.24436 9.00118C5.64086 9.00013 6.02166 9.15611 6.30348 9.43502L9.73849 12.7416L9.7488 12.7519L18.4422 4.18596C18.7234 3.90602 19.1039 3.74884 19.5007 3.74884C19.8974 3.74884 20.278 3.90602 20.5591 4.18596L22.8091 6.39471C22.9496 6.53394 23.0612 6.69958 23.1374 6.88209C23.2136 7.06461 23.253 7.2604 23.2533 7.45819C23.2535 7.65598 23.2147 7.85188 23.1389 8.03459C23.0632 8.21731 22.952 8.38324 22.8119 8.52284Z" fill="#FFC701"/>
                                </svg>
                                内部データやプライバシーに関する情報に対して質問した
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="part4 part">
                <h3 class="part-title desc-24-bold">
                掲載する手順
                </h3>
                <ul class="content-list desc-18-bold">
                    <li class="content-item">
                        <span class="desc-20-bold">1</span>
                        下記お問い合わせフォームから掲載希望のご連絡いただく
                    </li>
                    <li class="content-item">
                        <span class="desc-20-bold">2</span>
                        具体的な支援内容（提供できること）所在地等のプロフィールをご連絡
                    </li>
                    <li class="content-item">
                        <span class="desc-20-bold">3</span>
                        いただいた情報を元に簡単な審査の後、掲載および企業様に導入支援するにあたっての注意点を説明させていただき、掲載準備
                    </li>
                    <li class="content-item">
                        <span class="desc-20-bold">4</span>
                        掲載内容をフォーマットに従って提出いただき、掲載
                    </li>
                </p>
            </div>
            <a class="btn" href="<?php echo HOME . 'inquery'; ?>">ご希望・相談入力フォーム</a>
        </div>
        
    </main>

	<?php get_footer("recruit"); ?>