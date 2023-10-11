<?php 
/*
Template Name: Intro Inquery Thanks Template
*/
get_header(); 
?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
// $cat_slug = get_query_var('news-category') ? get_query_var('news-category') : "";

?>

    <main id="intro-inquery-thanks-page">
        <div class="bread-crump">
            <div class="container">
                <a href="<?php echo HOME; ?>" class="link">トップページ</a>
                <i class="fas fa-chevron-right"></i>
                <h5 class="current-page">ご希望・相談入力フォーム</h5>
            </div>
        </div>
        <div class="page-title">
            <div class="container">
                <h5 class="en">INQUIRY</h5>
                <h2 class="jp">ご希望・相談入力フォーム</h2>
            </div>
        </div>
        <ul class="steps-wrapper">
            <li class="step">
                <span class="desc-24-bold">1</span>
                <p class="desc-16-bold">内容入力</p>
            </li>
            <li class="step">
                <span class="desc-24-bold">2</span>
                <p class="desc-16-bold">内容確認</p>
            </li>
            <li class="step active">
                <span class="desc-24-bold">3</span>
                <p class="desc-16-bold">送信完了</p>
            </li>
        </ul>
        <div class="form-wrapper">
            <div class="top-text desc-24-bold">ご相談いただきありがとうございます</div>
            <div class="middle-text desc-16-normal">ご相談を受け付けました。<br>
            ご入力いただいたメールアドレス宛に自動返信メールをお送りしておりますので、ご確認ください。<br>
            担当者より、順次ご連絡差し上げます。
        </div>
    </main>

	<?php get_footer("consult"); ?>