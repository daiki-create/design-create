<!DOCTYPE html>
<html lang="ja">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=375, initial-scale=1.0">
    <meta name="keywords" content="伊勢崎,高崎,前橋のデザイン制作,HP制作" >
	
	<!-- Vue.js -->
    <script src="//unpkg.com/vue"></script>
    <script src="https://kit.fontawesome.com/46e7bbbd3b.js" crossorigin="anonymous"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JBTWED9DME"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-JBTWED9DME');
    </script>
    <!-- END：Google Analytics -->
	
    <?php wp_head(); ?>
</head>
<body>

    <!-- ヘッダー -->
    <header>
        <!-- ヘッダー部分 -->
        <div class="header" id="header">
            <div class="header__warpper hp_wrapper">
    
                <!-- ロゴ -->
                <a class="header__logo" @mouseover="hide_meganav" href="<?php echo esc_url(home_url('')); ?>">
                    <img loading='lazy' src='<?php echo DIR; ?>/assets/img/logo.png' alt='伊勢崎,高崎,前橋のデザイン制作,HP制作のならデザインクリエイト｜Design Create'>
                </a>
    
                <!-- ナビ -->
                <nav>
                    <ul class="header__nav">
                        <li>
                            <head_link ja="サービス案内" en="Service" url="<?php echo link_service; ?>" @meganav_action='show_meganav' now="<?php echo is_page("service"); ?>"/>
                        </li>
                        <li>
                            <head_link ja="制作の流れ" en="Flow" url="<?php echo link_flow; ?>" @meganav_action='hide_meganav' now="<?php echo is_page("flow"); ?>"/>
                        </li>
                        <li>
                            <head_link ja="選ばれる理由" en="Reasons" url="<?php echo link_reason; ?>" @meganav_action='hide_meganav' now="<?php echo is_page("reason"); ?>"/>
                        </li>
                        <li>
                            <head_link ja="実績" en="Works" url="<?php echo link_work; ?>" @meganav_action='hide_meganav' now="<?php echo is_page("work"); ?>"/>
                        </li>
						<li>
                            <head_link ja="料金案内" en="Price" url="<?php echo link_price; ?>" @meganav_action='hide_meganav' now="<?php echo is_page("price"); ?>"/>
                        </li>
						<li>
							<head_link ja="お客様の声" en="Voice" url="<?php echo link_voice; ?>" @meganav_action='hide_meganav' now="<?php echo is_page("voice"); ?>"/>
                        </li>
						<li>
							<head_link ja="ブログ" en="Blogs" url="<?php echo link_blog_list; ?>" @meganav_action='hide_meganav' now="<?php echo is_page("blog_list"); ?>"/>
                        </li>
                        <li>
                            <head_link ja="よくある質問" en="Q&A" url="<?php echo link_faq; ?>" @meganav_action='hide_meganav' now="<?php echo is_page("faq"); ?>"/>
                        </li>
                        <li>
                            <head_link ja="会社概要" en="About us" url="<?php echo link_about; ?>" @meganav_action='hide_meganav' now="<?php echo is_page("about"); ?>"/>
                        </li>
                        <li>
                            <a href="<?php echo link_mail; ?>" class="header__contact" @mouseover="hide_meganav">
                                お問合せ
                            </a>
                        </li>
                    </ul>
                </nav>
    
                <!-- メガメニュー -->
                <transition name="meganav">
                    <nav class="header__mega meganav" v-if='is_mega_show' @mouseleave="hide_meganav">
                        <div class="meganav__left">

                            <!-- サービス案内取得のサブループ -->
                            <?php $count = 0; ?>
                            <?php $args = array( 'pagename' => 'service' ); $the_query = new WP_Query($args); if($the_query->have_posts()): ?>
                            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                            
                                <?php $count = 0; ?>
                                <?php if(have_rows('contents')): ?>
                                <?php while(have_rows('contents')): the_row(); ?>
                                <?php $count ++; ?>

                                    <!-- コンテンツへのリンク -->
                                    <?php $link = get_sub_field('link'); ?>

                                    <!-- リンクがある場合はそのページに、ない場合はサービス案内ページに遷移 -->
                                    <?php if(strpos($link,'http') !== false): ?>
                                    <a href="<?php echo $link; ?>" class="meganav__content">
                                    <?php else: ?>
                                    <a href="<?php echo "service" . $count; ?>" class="meganav__content">
                                    <?php endif; ?>

                                        <figure class="meganav__img">
                                            <img loading='lazy' src='<?php the_sub_field('img'); ?>' alt='ホームページ制作'>
                                        </figure>
                                        <p class="meganav__text"><?php the_sub_field('title'); ?></p>

                                    </a>

                                <?php endwhile; ?>
                                <?php endif; ?>

                            <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>

                        </div>
                        <div class="meganav__right">
                            <a href="<?php echo link_flow; ?>" class="meganav__link">制作の流れ</a>
                            <a href="<?php echo link_reason; ?>" class="meganav__link">選ばれる理由</a>
                        </div>
                    </nav>
                </transition>
    
                <!-- モバイルナビ -->
                <button class="header__hum" @click="click_hum">
                    <div class="header__hum_open" :class="{ active: is_mobile_show }"></div>
                    <div class="header__hum_open" :class="{ active: is_mobile_show }"></div>
                    <div class="header__hum_open" :class="{ active: is_mobile_show }"></div>
                    <div class="header__hum_close2" :class="{ active: is_mobile_show }"></div>
                    <div class="header__hum_close1" :class="{ active: is_mobile_show }"></div>
                </button>
                <transition name="mobilenav">
                    <nav class="header__mobilenav mobilenav" v-if='is_mobile_show'>
                        <ul>
                            <li>
                                <a href="<?php echo link_service; ?>" class="mobilenav__link">サービス案内</a>
                            </li>
                            <li>
                                <a href="<?php echo link_flow; ?>" class="mobilenav__link">制作の流れ</a>
                            </li>
                            <li>
                                <a href="<?php echo link_reason; ?>" class="mobilenav__link">選ばれる理由</a>
                            </li>
                            <li>
                                <a href="<?php echo link_work; ?>" class="mobilenav__link">実績</a>
                            </li>
                            <li>
                                <a href="<?php echo link_price; ?>" class="mobilenav__link">料金案内</a>
                            </li>
							<li>
								<a href="<?php echo link_voice; ?>" class="mobilenav__link">お客様の声</a>
                            </li>
							<li>
								<a href="<?php echo link_blog_list; ?>" class="mobilenav__link">ブログ</a>
                            </li>
                            <li>
                                <a href="<?php echo link_faq; ?>" class="mobilenav__link">よくある質問</a>
                            </li>
                            <li>
                                <a href="<?php echo link_about; ?>" class="mobilenav__link">会社概要</a>
                            </li>
                            <li>
                                <a href="<?php echo link_mail; ?>" class="mobilenav__link">お問い合わせ</a>
                            </li>
                        </ul>
        
                    </nav>
                </transition>
            </div>
        </div>

        <!-- トップの画像部分 -->
        <?php if(is_front_page()): ?>
            <?php get_template_part('part/top_banner'); ?>
        <?php endif; ?>

    </header>