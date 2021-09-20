<!-- メインコンテンツ -->
<main class="hp_page news_page">
	
    <!-- メインコンテンツ -->
    <section class="p_posts hp_wrapper hp_maw800">
		<!-- 見出し -->
		<header class="hp_wrapper">
			<!-- 見出し -->
			<p class="hp_blue">News</p>
			<h2 class="hp_title hp_mb60">更新情報</h2>
		</header>
        <!-- サブループ -->
        <?php
        $args = [
            'post_type' => "post_news"
        ];
        get_template_part('part/post_list', null, $args);
        ?>
    </section>

    <!-- お問合せ -->
    <?php get_template_part('part/tocontact'); ?>

</main>
<?php get_sidebar();?>
