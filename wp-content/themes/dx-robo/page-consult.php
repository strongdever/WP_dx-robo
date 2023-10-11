<?php get_header(); ?>
<?php

$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
// $cat_slug = get_query_var('news-category') ? get_query_var('news-category') : "";

?>

    <main id="consult-page">
        <div class="bread-crump">
            <div class="container">
                <a href="<?php echo HOME; ?>" class="link">トップページ</a>
                <i class="fas fa-chevron-right"></i>
                <h5 class="current-page">RPA導入おまかせ紹介</h5>
            </div>
        </div>
        <div class="page-title">
            <div class="container">
                <h5 class="en">CONSULT</h5>
                <h2 class="jp">RPA導入おまかせ紹介</h2>
            </div>
        </div>
        <section class="consult-section">
            <div class="container">
                <div class="content-wrapper">
                    <div class="btns">
                        <div class="btn-group">
                            <a class="white btn">どんな人にお願いしたらいいのかわからない...</a>
                            <span class="circle1"></span>
                            <span class="circle2"></span>
                        </div>
                        <div class="btn-group">
                            <a class="white btn">具体的なお願いする前に相談に乗って欲しい...</a>
                            <span class="circle1"></span>
                            <span class="circle2"></span>
                        </div>
                    </div>
                    <div class="main-wrapper">
                        <div class="description title-32-bold">
                        ご希望や現在の課題に合った<br>
                        <span>おすすめのRPA導入士をご紹介</span>いたします
                        </div>
                        <a class="yellow btn">紹介料は何度でも無料</a>
                        <p class="desc-24-bold">
                            見合ったRPA導入士に出会うまで何度も紹介
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="flow">
            <div class="container">
                <p class="head-label title-32-bold">紹介の流れ</p>
                <div class="steps-wrapper">
                    <div class="step-wrapper">
                        <span class="desc-20-bold">1</span>
                        <p class="desc-18-bold">現在の希望や課題を、おまかせ紹介お申し込みとしてご希望・相談入力フォームよりお申し込みください。</p>
                    </div>
                    <div class="step-wrapper">
                        <span class="desc-20-bold">2</span>
                        <p class="desc-18-bold">ご入力いただいたご希望や課題、地域に応じて、おすすめのPRA導入士のプロフィールリンクをメールにてお送りいたします。</p>
                    </div>
                    <div class="step-wrapper">
                        <span class="desc-20-bold">3</span>
                        <p class="desc-18-bold">ご紹介したRPA導入士でよろしいか、新たに別のRPA導入士を追加で希望するかを返信ください。</p>
                    </div>
                    <div class="step-wrapper">
                        <span class="desc-20-bold">4</span>
                        <p class="desc-18-bold">よろしければ、RPA導入士から直接ご連絡し、追加の紹介の場合は、新たなRPA導入士のプロフィールリンクをメールにてお送りします。</p>
                    </div>
                </div>
            </div>
        </section>
        <a class="btn bottom" href="<?php echo HOME . 'inquery'; ?>">ご希望・相談入力フォーム</a>
    </main>

	<?php get_footer("consult"); ?>