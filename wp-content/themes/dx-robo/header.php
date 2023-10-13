<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta property="og:locale" content="ja_JP">

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="業務自動化,RPA,ロボット,ロボット導入ガイド" />
    <meta name="description" content="地域と中小企業のためのRPA導入支援サイト。あなたの会社の業務自動化設計を全国のRPA導入士が行います" />

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:title" content="業務自動化ロボット導入ガイド"/>
    <meta property="og:type" content="article" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="業務自動化" />
    <meta property="og:description" content="地域と中小企業のためのRPA導入支援サイト。あなたの会社の業務自動化設計を全国のRPA導入士が行います" />
    
    <title>
      <?php
      if(is_front_page() || is_home()) {
        echo get_bloginfo('name');
      } else{
          wp_title('|',true,'right');
          echo bloginfo('name'); 
      }
      ?>      
    </title>
	<link rel="shortcut icon" href="<?php echo T_DIRE_URI; ?>/favicon.png">
    <link rel="icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.png">
    <link rel="apple-touch-icon" type="image/png" href="<?php echo T_DIRE_URI; ?>/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/cross-platform-yu-gothic@0.1.1/cross-platform-yu-gothic.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<?php 
  global $post;
  
  if( $post->post_type != "page" ) {
    $post_slug = $post->post_type;
  } else {
    $post_slug = $post->post_name;
  }
  if( is_single() ) {
    $category_arr = get_the_category( $post->ID );
    $post_slug = $category_arr[0]->slug;
  }
?>

<?php
$path_parts = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$path_parts = pathinfo($path_parts);
?>
<?php if(is_single()): ?>
<body <?php body_class();?> id="body<?php echo get_post_type(); ?>">
<?php else: ?>
<body <?php body_class();?> id="body<?php echo $path_parts['filename']; ?>">
<?php endif; ?>

    <header class="header">
        <div class="header-top">
            <h1 class="header-logo">
                <a href="<?php echo HOME; ?>">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/logo.png" alt="業務自動化ロボット導入ガイド">
                </a>
            </h1>
            <div class="search-wraper">
                <div class="search-top">
                    <img src="<?php echo T_DIRE_URI; ?>/assets/img/right-arrow.svg" alt="左矢印">
                    <p class="desc-15-bold"><a href="<?php echo HOME . 'recruit'; ?>">RPA導入士になるには？</a></p>
                </div>
                         
                <div class="search-bar">
                    <select name="region" id="region" class="region desc-15-bold">
                        <option value="" selected='selected'>対応地域を選択</option>
                        <option value="対応地域を選択1">対応地域を選択1</option>
                        <option value="対応地域を選択2">対応地域を選択2</option>
                        <option value="対応地域を選択3">対応地域を選択3</option>
                    </select>
                    <select name="business-scope" id="business-scope" class="business-scope desc-15-bold">
                        <option value="" selected='selected'>対応できる業務範囲を選択</option>
                        <option value="対応できる業務範囲を選択1">対応できる業務範囲を選択1</option>
                        <option value="対応できる業務範囲を選択2">対応できる業務範囲を選択2</option>
                        <option value="対応できる業務範囲を選択3">対応できる業務範囲を選択3</option>
                    </select>
                    <div class="search-input-wrapper">
                        <input class="search-input desc-15-bold" placeholder="フリーワードで検索">
                        <button class="btn-search"><i class="fas fa-search" style="color: #ffffff;"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <nav class="header-nav">
            <ul class="nav-menu">
                <li>
                    <a href="<?php echo HOME . 'about'; ?>" class="menu-link">
                        <h5>RPAとは？</h5>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'blog'; ?>" class="menu-link">
                        <h5>全国のRPA導入士</h5>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'news'; ?>" class="menu-link">
                        <h5>RPAニュース</h5>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'case'; ?>" class="menu-link">
                        <h5>業務自動化事例</h5>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'consult'; ?>" class="menu-link">
                        <h5>RPA導入おまかせ紹介</h5>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'info'; ?>" class="menu-link">
                        <h5>関連補助金情報</h5>
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="mobile-nav">
        <nav class="mobile-nav-container">
            <ul class="mobile-nav-menu">
                <li>
                    <a href="<?php echo HOME . 'about'; ?>" class="menu-link">
                        <h5>RPAとは？</h5>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'blog'; ?>" class="menu-link">
                        <h5>全国のRPA導入士</h5>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'news'; ?>" class="menu-link">
                        <h5>RPAニュース</h5>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'case'; ?>" class="menu-link">
                        <h5>業務自動化事例</h5>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'consult'; ?>" class="menu-link">
                        <h5>RPA導入おまかせ紹介</h5>
                    </a>
                </li>
                <li>
                    <a href="<?php echo HOME . 'info'; ?>" class="menu-link">
                        <h5>関連補助金情報</h5>
                    </a>
                </li>
            </ul>
        </nav>
    </div>