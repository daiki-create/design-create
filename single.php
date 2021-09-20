<?php get_header(); ?>

<!-- メインコンテンツ -->
<div class="hp_page">

    <div class="sidebar hp_wrapper">
        <!-- メインコンテンツ -->
        <section class="sidebar__main">
            <header>
                <h2 class="p_blog__title"><?php the_title(); ?></h2>
                <date class="p_blog__date"><?php the_time('Y.m.d') ?></date>
                <img class="p_blog__img" loading='lazy' src='<?php echo get_the_post_thumbnail_url(); ?>' alt='サムネ画像'>    
            </header>
            
            <main class="p_blog__content">
                <?php the_content(); ?>
            </main>

			<!--previousとnextを逆にしています -->
			<div class="navigation clearfix">
				<span class="navileft">
					<?php next_post_link('« %link', '%title'); ?>
				</span>
				<span>
				</span>
				<span class="naviright">
					<?php previous_post_link('%link »', '%title'); ?>
				</span>
			</div>
			
            <aside class="p_blog__signature">
                【Design create-デザインクリエイト】
                <br>　HP：<a href="https://design-create.jp">https://design-create.jp</a>
                <br>　Mail：<a href="mailto:info@design-create.jp">info@design-create.jp</a>
                <br>　Mobile：080-9561-9469
                <br>　LINE：mii.08020491031
                <br>　営業：AM10時～PM7時
                <br>　定休：土日・祝日・年末年始
            </aside>
        </section>

        <!-- サイドバー -->
        <?php get_sidebar(); ?>

    </div>

    <!--  関連記事 -->
    <?php get_template_part('part/related'); ?>
	<!--  こんな記事も読まれています！ -->
	<?php get_template_part('part/recommendation'); ?>

    <!-- お問合せ -->
    <?php get_template_part('part/tocontact'); ?>

</div>

<?php get_footer(); ?>