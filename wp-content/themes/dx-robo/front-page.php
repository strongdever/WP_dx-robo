<?php

	/*
	Template Name: Front Page Template
	*/

	if ( ! defined( 'ABSPATH' ) ) exit;
	get_header();

?>

    <main id="front-page">
        <section class="first-view">
			<div class="view-left">
				<P>地域と中小企業のためのRPA導入支援サイト</p>
				<p>あなたの会社の業務自動化設計を<br>
				全国の<span>RPA導入士</span>が行います</p>
				<div class="circle-wrapper">
					<p class="circle-text">RPAや自動化に<br>ついて情報満載</p>
					<p class="circle-text">オンライン対応<br>可能</p>
					<p class="circle-text">補助金の<br>活用方法も<br>相談可</p>
				</div>
				<a href="<?php echo HOME . 'search'; ?>" class="btn"><i class="fas fa-search" style="color: #ffffff;"></i>全国のRPA導入士を見る</a>
			</div>
			<div class="view-right">
				<img src="<?php echo T_DIRE_URI; ?>/assets/img/first-view.svg">
			</div>
		</section>
		<section class="search-pannel">
			<h4 class="top-label"><i class="fas fa-search"></i>全国のRPA導入士を地域から探す</h4>
			<div class="content-wrapper">
				<div class="left-wrapper">
					<div class="region-wrapper">
						<div class="region desc-15-bold">北海道・東北</div>
						<div class="provinces desc-15-bold">
							<a class="province">北海道</a>
							<a class="province">青森県</a>
							<a class="province">岩手県</a>
							<a class="province">宮城県</a>
							<a class="province">秋田県</a>
							<a class="province">山形県</a>
							<a class="province">福島県</a>
						</div>
					</div>
					<div class="region-wrapper">
						<div class="region desc-15-bold">関東</div>
						<div class="provinces desc-15-bold">
							<a class="province">茨城県</a>
							<a class="province">栃木県</a>
							<a class="province">群馬県</a>
							<a class="province">埼玉県</a>
							<a class="province">千葉県</a>
							<a class="province">東京都</a>
							<a class="province">神奈川県</a>
						</div>
					</div>
					<div class="region-wrapper">
						<div class="region desc-15-bold">中部</div>
						<div class="provinces desc-15-bold">
							<a class="province">新潟県</a>
							<a class="province">富山県</a>
							<a class="province">石川県</a>
							<a class="province">福井県</a>
							<a class="province">山梨県</a>
							<a class="province">長野県</a>
							<a class="province">福島県</a>
							<a class="province">静岡県</a>
							<a class="province">愛知県</a>
						</div>
					</div>
				</div>
				<div class="right-wrapper">
					<div class="region-wrapper">
						<div class="region desc-15-bold">近畿</div>
						<div class="provinces desc-15-bold">
							<a class="province">三重県</a>
							<a class="province">滋賀県</a>
							<a class="province">京都府</a>
							<a class="province">大阪府</a>
							<a class="province">兵庫県</a>
							<a class="province">奈良県</a>
							<a class="province">和歌山県</a>
						</div>
					</div>
					<div class="region-wrapper">
						<div class="region desc-15-bold">中国</div>
						<div class="provinces desc-15-bold">
							<a class="province">鳥取県</a>
							<a class="province">島根県</a>
							<a class="province">岡山県</a>
							<a class="province">広島県</a>
							<a class="province">山口県</a>
						</div>
					</div>
					<div class="region-wrapper">
						<div class="region desc-15-bold">四国</div>
						<div class="provinces desc-15-bold">
							<a class="province">徳島県</a>
							<a class="province">香川県</a>
							<a class="province">愛媛県</a>
							<a class="province">高知県</a>
						</div>
					</div>
					<div class="region-wrapper">
						<div class="region desc-15-bold">九州・沖縄</div>
						<div class="provinces desc-15-bold">
							<a class="province">福岡県</a>
							<a class="province">佐賀県</a>
							<a class="province">長崎県</a>
							<a class="province">熊本県</a>
							<a class="province">大分県</a>
							<a class="province">宮崎県</a>
							<a class="province">鹿児島県</a>
							<a class="province">沖縄県</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="news">
			<div class="container">
				<div class="top-label"><img src="<?php echo T_DIRE_URI; ?>/assets/img/news-icon.svg">RPA（自動化）ニュース</div>
				<div class="news-pannel">
                <?php
                    $args = [
                        'post_type' => 'news',
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'posts_per_page' => 1,
                        'orderby' => 'post_date',
                        'order' => 'DESC'
                    ];
                    $custom_query = new WP_Query( $args );
                ?>
                <?php if( $custom_query->have_posts() ) : ?>
                    <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="latest-news">
                        <?php if( has_post_thumbnail() ): ?>
                            <img class="thumbnail" src="<?php echo get_the_post_thumbnail_url(); ?>">
                        <?php else: ?>
                            <img class="thumbnail" src="<?php echo catch_that_image(); ?>">
                        <?php endif; ?>
                            <div class="news-wrapper">
                                <div class="date"><?php the_time('Y.m.f'); ?></div>
                                <h3 class="title"><?php the_title(); ?></h3>
                                <p class="content desc-15-normal"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </a>
                    <?php
                    $first_ID = get_the_ID();
                    endwhile;
                    ?>
                <?php endif; ?>
                <?php
                $args = [
                        'post_type' => 'news',
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'posts_per_page' => 3,
                        'post__not_in'  => array($first_ID),
                        'orderby' => 'post_date',
                        'order' => 'DESC'
                    ];
                    $custom_query = new WP_Query( $args );
                ?>
                <?php if( $custom_query->have_posts() ) : ?>
					<ul class="news-list">
                        <?php while( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
						<li class="news-wrapper">
							<div class="date"><?php the_time('Y.m.d'); ?></div>
							<h3 class="title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
						</li>
                        <?php endwhile; ?>
					</ul>
                <?php endif; ?>
				</div>
				<a class="goto-page desc-15-bold" href="<?php echo HOME . "news"; ?>">ニュース一覧<i class="fa-solid fa-arrow-right"></i></a>
			</div>
		</section>
		<section class="introduction">
			<h2 class="top-label title-32-bold">ピックアップRPA導入士の紹介</h2>
			<ul class="item-list">
				<li class="item">
					<img src="<?php echo T_DIRE_URI; ?>/assets/img/blog001.png" class="thumbnail">
					<div class="content-wrapper">
						<h4 class="title">小さなことから大きなことまでお手伝いします</h4>
						<p class="company-name">株式会社鈴木工業</p>
						<p class="name">鈴木 太郎</p>
						<p class="province-name">茨城県</p>
					</div>
				</li>
				<li class="item">
					<img src="<?php echo T_DIRE_URI; ?>/assets/img/blog001.png" class="thumbnail">
					<div class="content-wrapper">
						<h4 class="title">小さなことから大きなことまでお手伝いします</h4>
						<p class="company-name">株式会社鈴木工業</p>
						<p class="name">鈴木 太郎</p>
						<p class="province-name">茨城県</p>
					</div>
				</li>
				<li class="item">
					<img src="<?php echo T_DIRE_URI; ?>/assets/img/blog001.png" class="thumbnail">
					<div class="content-wrapper">
						<h4 class="title">小さなことから大きなことまでお手伝いします</h4>
						<p class="company-name">株式会社鈴木工業</p>
						<p class="name">鈴木 太郎</p>
						<p class="province-name">茨城県</p>
					</div>
				</li>
				<li class="item">
					<img src="<?php echo T_DIRE_URI; ?>/assets/img/blog001.png" class="thumbnail">
					<div class="content-wrapper">
						<h4 class="title">小さなことから大きなことまでお手伝いします</h4>
						<p class="company-name">株式会社鈴木工業</p>
						<p class="name">鈴木 太郎</p>
						<p class="province-name">茨城県</p>
					</div>
				</li>
			</ul>
			<a href="<?php echo HOME . 'search'; ?>" class="btn"><i class="fas fa-search" style="color: #009770;"></i>全国のRPA導入士を見る</a>
		</section>
		<section class="case">
			<div class="container">
				<h2 class="top-label title-32-bold">RPA導入士による<br>業務の自動化推進事例</h2>
				<ul class="item-list">
					<li class="item">
						<img src="<?php echo T_DIRE_URI; ?>/assets/img/case001.png" class="thumbnail">
						<div class="content-wrapper">
							<h5 class="title">株式会社魚屋本舗</h5>
							<p class="desc-15-normal">FAXの受発注業務をEメール化、業務効率があがりました</p>
						</div>
					</li>
					<li class="item">
						<img src="<?php echo T_DIRE_URI; ?>/assets/img/case001.png" class="thumbnail">
						<div class="content-wrapper">
							<h5 class="title">株式会社魚屋本舗</h5>
							<p class="desc-15-normal">FAXの受発注業務をEメール化、業務効率があがりました</p>
						</div>	
					</li>
					<li class="item">
						<img src="<?php echo T_DIRE_URI; ?>/assets/img/case001.png" class="thumbnail">
						<div class="content-wrapper">
							<h5 class="title">株式会社魚屋本舗</h5>
							<p class="desc-15-normal">FAXの受発注業務をEメール化、業務効率があがりました</p>
						</div>
					</li>
				</ul>
				<a class="goto-page desc-15-bold" href="<?php echo HOME . "case"; ?>"><i class="fa-solid fa-arrow-right"></i>業務の自動化例</a>
			</div>
		</section>
		<section class="three-promise">
			<div class="container">
				<h2 class="top-label title-32-bold">RPA導入士を紹介するにあたっての<br>3つのお約束</h2>
				<ul class="item-list">
					<li class="item">
						<h5 class="title">専門用語は<br>使いません</h5>
						<p class="desc-15-normal">だれでも使えるRPA、ITを目指す<br>理念に従い、専門用語は使いません。<br>知識と経験豊富な導入士が、<br>丁寧にわかりやすくご説明します。</p>
					</li>
					<li class="item">
						<h5 class="title">不要な機材の<br>売り込みはしません</h5>
						<p class="desc-15-normal">だれでも使えるRPA、ITを目指す<br>理念に従い、専門用語は使いません。<br>知識と経験豊富な導入士が、<br>丁寧にわかりやすくご説明します。</p>
					</li>
					<li class="item">
						<h5 class="title">守秘義務を<br>徹底します</h5>
						<p class="desc-15-normal">だれでも使えるRPA、ITを目指す<br>理念に従い、専門用語は使いません。<br>知識と経験豊富な導入士が、<br>丁寧にわかりやすくご説明します。</p>
					</li>
				</ul>
				<a class="goto-page desc-15-bold" href="<?php echo HOME . "about/#threepromise"; ?>"><i class="fa-solid fa-arrow-right"></i>RPA導入士イエローカード制度について</a>
			</div>
		</section>
    </main>

<?php get_footer(); ?>