<!-- メインコンテンツ -->
<main class="hp_page">

    <!-- サービス案内 -->
    <header class="p_price hp_wrapper">
        <!-- 見出し -->
        <p class="hp_blue">Price</p>
        <h2 class="hp_title">料金表</h2>
        <p class="hp__cat hp_mb60">カテゴリーから選ぶ</p>

        <!-- ボタン -->
        <?php get_template_part('part/cat_nav'); ?>

    </header>

    <!-- メインコンテンツ -->
    <section class="p_price hp_wrapper">
        <!-- ホームページ制作 -->
        <article class="p_price__content" id="ank1">
            <div class="p_price__top hp_head">
                <div class="hp_head__left">
                    <img src="<?php echo DIR; ?>/assets/img/icon/icon1.svg" alt="アイコン" class="hp_head__img">
                    <h3 class="hp_head__title">ホームページ制作</h3>
                </div>
                <a href="<?php echo link_work; ?>" class="hp_head__right">実績をみる</a>
            </div>

            <?php if( have_rows('home_page') ):  ?>
            <?php while( have_rows('home_page') ): the_row(); ?>


            <p class="hp_yellow__ann ap">※横にスクロールできます</p>
            <div class="hp_yellow">
                <table class="hp_yellow__table">

                    <?php if(have_rows('plan')): ?>
                    <?php while(have_rows('plan')): the_row(); ?>

                        <tr>
                            <td><?php the_sub_field('title'); ?></td>
                            <td><?php the_sub_field('price'); ?></td>
                            <td><?php the_sub_field('desc'); ?></td>
                        </tr>

                    <?php endwhile; ?>
                    <?php endif; ?>

                </table>
				<div class="sp_hp_yellow__table">
                    <?php if(have_rows('plan')): ?>
                    <?php while(have_rows('plan')): the_row(); ?>
					<div class='sp_hp_yellow__block'>
						<h1><?php the_sub_field('title'); ?></h1>
						<h2><?php the_sub_field('price'); ?></h2>
						<p><?php the_sub_field('desc'); ?></p>
					</div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="hp_red">
                <p class="hp_red__title">オススメパック</p>
                <div class="hp_red__wrapper">

                    <?php the_sub_field('campaign'); ?>

                    <div class="hp_red__right">
                        <p class="hp_red__text hp_red__text_red hp_red__text_large">上記プランから正式ご発注のお客さまのみ</p>
                        <p class="hp_red__text">※お申し込み時に「オススメパック」利用とお伝えください</p>
                    </div>
                    <p class="hp_red__btm">リピーター様には別途お得なキャンペーンをメルマガにて配信しております！</p>
                </div>
            </div>
            
            <?php endwhile; ?>
            <?php endif; ?>
        </article>
        
        <!-- デザイン制作 -->
        <article class="p_price__content" id="ank2">
            <div class="p_price__top hp_head">
                <div class="hp_head__left">
                    <img src="<?php echo DIR; ?>/assets/img/icon/icon2.svg" alt="アイコン" class="hp_head__img">
                    <h3 class="hp_head__title">デザイン制作</h3>
                </div>
            </div>

            <?php if( have_rows('design') ):  ?>
            <?php while( have_rows('design') ): the_row(); ?>


            <p class="hp_yellow__ann ap">※横にスクロールできます</p>
            <div class="hp_yellow">
                <table class="hp_yellow__table">

                    <?php if(have_rows('plan')): ?>
                    <?php while(have_rows('plan')): the_row(); ?>

                        <tr>
                            <td><?php the_sub_field('title'); ?></td>
                            <td><?php the_sub_field('price'); ?></td>
                            <td><?php the_sub_field('desc'); ?></td>
                        </tr>

                    <?php endwhile; ?>
                    <?php endif; ?>

                </table>
				<div class="sp_hp_yellow__table">
                    <?php if(have_rows('plan')): ?>
                    <?php while(have_rows('plan')): the_row(); ?>
					<div class='sp_hp_yellow__block'>
						<h1><?php the_sub_field('title'); ?></h1>
						<h2><?php the_sub_field('price'); ?></h2>
						<p><?php the_sub_field('desc'); ?></p>
					</div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <p class="hp_yellow__ann">※サイズにもよりますので、まずはご相談くださいませ。</p>

            <div class="hp_red">
                <p class="hp_red__title">オススメパック</p>
                <div class="hp_red__wrapper">

                    <?php the_sub_field('campaign'); ?>

                    <div class="hp_red__right">
                        <p class="hp_red__text hp_red__text_red hp_red__text_large">上記プランから正式ご発注のお客さまのみ</p>
                        <p class="hp_red__text">※お申し込み時に「オススメパック」利用とお伝えください</p>
                    </div>
                    <p class="hp_red__btm">リピーター様には別途お得なキャンペーンをメルマガにて配信しております！</p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </article>
        
        <!-- 名刺・チラシ・POP制作 -->
        <article class="p_price__content" id="ank3">
            <div class="p_price__top hp_head">
                <div class="hp_head__left">
                    <img src="<?php echo DIR; ?>/assets/img/icon/icon3.svg" alt="アイコン" class="hp_head__img">
                    <h3 class="hp_head__title">名刺・チラシ・POP制作</h3>
                </div>
            </div>


            <?php if( have_rows('pop') ):  ?>
            <?php while( have_rows('pop') ): the_row(); ?>


            <p class="hp_yellow__ann ap">※横にスクロールできます</p>
            <p class="hp_yellow__ann">※印刷費用は別途費用がかかります。納期が長く、部数が多いほどお安くなります。</p>
            <div class="hp_yellow">
                <table class="hp_yellow__table">

                    <?php if(have_rows('plan')): ?>
                    <?php while(have_rows('plan')): the_row(); ?>

                        <tr>
                            <td><?php the_sub_field('title'); ?></td>
                            <td><?php the_sub_field('price'); ?></td>
                            <td><?php the_sub_field('desc'); ?></td>
                        </tr>

                    <?php endwhile; ?>
                    <?php endif; ?>

                </table>
				<div class="sp_hp_yellow__table">
                    <?php if(have_rows('plan')): ?>
                    <?php while(have_rows('plan')): the_row(); ?>
					<div class='sp_hp_yellow__block'>
						<h1><?php the_sub_field('title'); ?></h1>
						<h2><?php the_sub_field('price'); ?></h2>
						<p><?php the_sub_field('desc'); ?></p>
					</div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="hp_red">
                <p class="hp_red__title">オススメパック</p>
                <div class="hp_red__wrapper">

                    <?php the_sub_field('campaign'); ?>

                    <div class="hp_red__right">
                        <p class="hp_red__text hp_red__text_red hp_red__text_large">上記プランから正式ご発注のお客さまのみ</p>
                        <p class="hp_red__text">※お申し込み時に「オススメパック」利用とお伝えください</p>
                    </div>
                    <p class="hp_red__btm">リピーター様には別途お得なキャンペーンをメルマガにて配信しております！</p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </article>
        
        <!-- 看板・ポスター制作 -->
        <article class="p_price__content" id="ank4">
            <div class="p_price__top hp_head">
                <div class="hp_head__left">
                    <img src="<?php echo DIR; ?>/assets/img/icon/icon4.svg" alt="アイコン" class="hp_head__img">
                    <h3 class="hp_head__title">看板・ポスター制作</h3>
                </div>
            </div>


            <?php if( have_rows('board') ):  ?>
            <?php while( have_rows('board') ): the_row(); ?>


            <p class="hp_yellow__ann ap">※横にスクロールできます</p>
            <p class="hp_yellow__ann">※印刷費用は別途費用がかかります。納期が長く、部数が多いほどお安くなります。</p>
            <div class="hp_yellow">
                <table class="hp_yellow__table">

                    <?php if(have_rows('plan')): ?>
                    <?php while(have_rows('plan')): the_row(); ?>

                        <tr>
                            <td><?php the_sub_field('title'); ?></td>
                            <td><?php the_sub_field('price'); ?></td>
                            <td><?php the_sub_field('desc'); ?></td>
                        </tr>

                    <?php endwhile; ?>
                    <?php endif; ?>

                </table>
				<div class="sp_hp_yellow__table">
                    <?php if(have_rows('plan')): ?>
                    <?php while(have_rows('plan')): the_row(); ?>
					<div class='sp_hp_yellow__block'>
						<h1><?php the_sub_field('title'); ?></h1>
						<h2><?php the_sub_field('price'); ?></h2>
						<p><?php the_sub_field('desc'); ?></p>
					</div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="hp_red">
                <p class="hp_red__title">オススメパック</p>
                <div class="hp_red__wrapper">

                    <?php the_sub_field('campaign'); ?>

                    <div class="hp_red__right">
                        <p class="hp_red__text hp_red__text_red hp_red__text_large">上記プランから正式ご発注のお客さまのみ</p>
                        <p class="hp_red__text">※お申し込み時に「オススメパック」利用とお伝えください</p>
                    </div>
                    <p class="hp_red__btm">リピーター様には別途お得なキャンペーンをメルマガにて配信しております！</p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </article>
        
        <!-- 冊子・会報誌制作 -->
        <article class="p_price__content" id="ank5">
            <div class="p_price__top hp_head">
                <div class="hp_head__left">
                    <img src="<?php echo DIR; ?>/assets/img/icon/icon5.svg" alt="アイコン" class="hp_head__img">
                    <h3 class="hp_head__title">冊子・会報誌制作</h3>
                </div>
            </div>


            <?php if( have_rows('booklet') ):  ?>
            <?php while( have_rows('booklet') ): the_row(); ?>


            <p class="hp_yellow__ann ap">※横にスクロールできます</p>
            <p class="hp_yellow__ann">※印刷費用は別途費用がかかります。納期が長く、部数が多いほどお安くなります。</p>
            <div class="hp_yellow">
                <table class="hp_yellow__table">

                    <?php if(have_rows('plan')): ?>
                    <?php while(have_rows('plan')): the_row(); ?>

                        <tr>
                            <td><?php the_sub_field('title'); ?></td>
                            <td><?php the_sub_field('price'); ?></td>
                            <td><?php the_sub_field('desc'); ?></td>
                        </tr>

                    <?php endwhile; ?>
                    <?php endif; ?>

                </table>
				<div class="sp_hp_yellow__table">
                    <?php if(have_rows('plan')): ?>
                    <?php while(have_rows('plan')): the_row(); ?>
					<div class='sp_hp_yellow__block'>
						<h1><?php the_sub_field('title'); ?></h1>
						<h2><?php the_sub_field('price'); ?></h2>
						<p><?php the_sub_field('desc'); ?></p>
					</div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="hp_red">
                <p class="hp_red__title">オススメパック</p>
                <div class="hp_red__wrapper">

                    <?php the_sub_field('campaign'); ?>

                    <div class="hp_red__right">
                        <p class="hp_red__text hp_red__text_red hp_red__text_large">上記プランから正式ご発注のお客さまのみ</p>
                        <p class="hp_red__text">※お申し込み時に「オススメパック」利用とお伝えください</p>
                    </div>
                    <p class="hp_red__btm">リピーター様には別途お得なキャンペーンをメルマガにて配信しております！</p>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </article>

        <!-- その他のご質問事項 -->
        <article class="p_price__content" id="ank6">
            <div class="p_price__top hp_head">
                <div class="hp_head__left">
                    <img src="<?php echo DIR; ?>/assets/img/icon/icon6.svg" alt="アイコン" class="hp_head__img">
                    <h3 class="hp_head__title">その他のご質問事項</h3>
                </div>
                <a href="<?php echo link_faq; ?>" class="hp_head__right">質問ページへ移動</a>
            </div>
        </article>
    </section>

    <!-- お問合せ -->
    <?php get_template_part('part/tocontact'); ?>

</main>