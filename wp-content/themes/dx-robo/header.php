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
  $work_scope = get_query_var('work-scope') ? get_query_var('work-scope') : '';
  $province_name = get_query_var('province-name') ? get_query_var('province-name') : '';
  $s_key = get_query_var('s-key') ? get_query_var('s-key') : '';
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
                    <select name="region" id="s-province-name" class="region desc-15-bold">
                        <option value="" selected='selected' <?php echo $province_name ? '' : 'selected'; ?>>対応地域を選択</option>
                        <option value="北海道" <?php echo $province_name == '北海道' ? 'selected' : ''; ?>>北海道</option>
                        <option value="青森県" <?php echo $province_name == '青森県' ? 'selected' : ''; ?>>青森県</option>
                        <option value="岩手県" <?php echo $province_name == '岩手県' ? 'selected' : ''; ?>>岩手県</option>
                        <option value="宮城県" <?php echo $province_name == '宮城県' ? 'selected' : ''; ?>>宮城県</option>
                        <option value="秋田県" <?php echo $province_name == '秋田県' ? 'selected' : ''; ?>>秋田県</option>
                        <option value="山形県" <?php echo $province_name == '山形県' ? 'selected' : ''; ?>>山形県</option>
                        <option value="福島県" <?php echo $province_name == '福島県' ? 'selected' : ''; ?>>福島県</option>
                        <option value="茨城県" <?php echo $province_name == '茨城県' ? 'selected' : ''; ?>>茨城県</option>
                        <option value="栃木県" <?php echo $province_name == '栃木県' ? 'selected' : ''; ?>>栃木県</option>
                        <option value="群馬県" <?php echo $province_name == '群馬県' ? 'selected' : ''; ?>>群馬県</option>
                        <option value="埼玉県" <?php echo $province_name == '埼玉県' ? 'selected' : ''; ?>>埼玉県</option>
                        <option value="千葉県" <?php echo $province_name == '千葉県' ? 'selected' : ''; ?>>千葉県</option>
                        <option value="東京都" <?php echo $province_name == '東京都' ? 'selected' : ''; ?>>東京都</option>
                        <option value="神奈川県" <?php echo $province_name == '神奈川県' ? 'selected' : ''; ?>>神奈川県</option>
                        <option value="新潟県" <?php echo $province_name == '新潟県' ? 'selected' : ''; ?>>新潟県</option>
                        <option value="富山県" <?php echo $province_name == '富山県' ? 'selected' : ''; ?>>富山県</option>
                        <option value="石川県" <?php echo $province_name == '石川県' ? 'selected' : ''; ?>>石川県</option>
                        <option value="福井県" <?php echo $province_name == '福井県' ? 'selected' : ''; ?>>福井県</option>
                        <option value="山梨県" <?php echo $province_name == '山梨県' ? 'selected' : ''; ?>>山梨県</option>
                        <option value="長野県" <?php echo $province_name == '長野県' ? 'selected' : ''; ?>>長野県</option>
                        <option value="岐阜県" <?php echo $province_name == '岐阜県' ? 'selected' : ''; ?>>岐阜県</option>
                        <option value="静岡県" <?php echo $province_name == '静岡県' ? 'selected' : ''; ?>>静岡県</option>
                        <option value="愛知県" <?php echo $province_name == '愛知県' ? 'selected' : ''; ?>>愛知県</option>
                        <option value="三重県" <?php echo $province_name == '三重県' ? 'selected' : ''; ?>>三重県</option>
                        <option value="滋賀県" <?php echo $province_name == '滋賀県' ? 'selected' : ''; ?>>滋賀県</option>
                        <option value="京都府" <?php echo $province_name == '京都府' ? 'selected' : ''; ?>>京都府</option>
                        <option value="大阪府" <?php echo $province_name == '大阪府' ? 'selected' : ''; ?>>大阪府</option>
                        <option value="兵庫県" <?php echo $province_name == '兵庫県' ? 'selected' : ''; ?>>兵庫県</option>
                        <option value="奈良県" <?php echo $province_name == '奈良県' ? 'selected' : ''; ?>>奈良県</option>
                        <option value="和歌山県" <?php echo $province_name == '和歌山県' ? 'selected' : ''; ?>>和歌山県</option>
                        <option value="鳥取県" <?php echo $province_name == '鳥取県' ? 'selected' : ''; ?>>鳥取県</option>
                        <option value="島根県" <?php echo $province_name == '島根県' ? 'selected' : ''; ?>>島根県</option>
                        <option value="岡山県" <?php echo $province_name == '岡山県' ? 'selected' : ''; ?>>岡山県</option>
                        <option value="広島県" <?php echo $province_name == '広島県' ? 'selected' : ''; ?>>広島県</option>
                        <option value="山口県" <?php echo $province_name == '山口県' ? 'selected' : ''; ?>>山口県</option>
                        <option value="徳島県" <?php echo $province_name == '徳島県' ? 'selected' : ''; ?>>徳島県</option>
                        <option value="香川県" <?php echo $province_name == '香川県' ? 'selected' : ''; ?>>香川県</option>
                        <option value="愛媛県" <?php echo $province_name == '愛媛県' ? 'selected' : ''; ?>>愛媛県</option>
                        <option value="高知県" <?php echo $province_name == '高知県' ? 'selected' : ''; ?>>高知県</option>
                        <option value="福岡県" <?php echo $province_name == '福岡県' ? 'selected' : ''; ?>>福岡県</option>
                        <option value="佐賀県" <?php echo $province_name == '佐賀県' ? 'selected' : ''; ?>>佐賀県</option>
                        <option value="長崎県" <?php echo $province_name == '長崎県' ? 'selected' : ''; ?>>長崎県</option>
                        <option value="熊本県" <?php echo $province_name == '熊本県' ? 'selected' : ''; ?>>熊本県</option>
                        <option value="大分県" <?php echo $province_name == '大分県' ? 'selected' : ''; ?>>大分県</option>
                        <option value="宮崎県" <?php echo $province_name == '宮崎県' ? 'selected' : ''; ?>>宮崎県</option>
                        <option value="鹿児島県" <?php echo $province_name == '鹿児島県' ? 'selected' : ''; ?>>鹿児島県</option>
                        <option value="沖縄県" <?php echo $province_name == '沖縄県' ? 'selected' : ''; ?>>沖縄県</option>
                    </select>
                    <select name="business-scope" id="s-business-scope" class="business-scope desc-15-bold">
                        <option value="" <?php echo $work_scope ? '' : 'selected'; ?>>対応できる業務範囲を選択</option>
                        <option value="パソコン操作指導" <?php echo $work_scope == 'パソコン操作指導' ? 'selected' : ''; ?>>パソコン操作指導</option>
                        <option value="スマホの設定" <?php echo $work_scope == 'スマホの設定' ? 'selected' : ''; ?>>スマホの設定</option>
                        <option value="Zoom会議アカウント設定" <?php echo $work_scope == 'Zoom会議アカウント設定' ? 'selected' : ''; ?>>Zoom会議アカウント設定</option>
                        <option value="クラウド会計ソフトを選びます" <?php echo $work_scope == 'クラウド会計ソフトを選びます' ? 'selected' : ''; ?>>クラウド会計ソフトを選びます</option>
                    </select>
                    <div class="search-input-wrapper">
                        <input class="search-input desc-15-bold" id="s-key" placeholder="フリーワードで検索" value="<?php echo $s_key; ?>">
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
                    <a href="<?php echo HOME . 'search'; ?>" class="menu-link">
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
                    <a href="<?php echo HOME . 'search'; ?>" class="menu-link">
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

    <script type="text/javascript">
        !(function ($) {
            //search
            $(document).ready(function(){
                $('.btn-search').click(function() { //search button click
                    let work_scope = $('#s-business-scope').val();
                    let province_name = $('#s-province-name').val();
                    let s_key = $('#s-key').val();
                    url = "<?php echo HOME . 'search'; ?>";
                    if( work_scope ) {
                        url = url + "?work-scope=" + work_scope;
                    }

                    if( province_name ) {
                        if( work_scope ) {
                            url = url + "&province-name=" + province_name;
                        } else {
                            url = url + "?province-name=" + province_name;
                        }
                    }

                    if( s_key ) {
                        if( work_scope || province_name ) {
                            url = url + "&s-key=" + s_key;
                        } else {
                            url = url + "?s-key=" + s_key;
                        }
                    }

                    window.location.href = url;
                })
            })
        })(jQuery);
    </script>