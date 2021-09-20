<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="hp_page">

    <!-- 見出し -->
    <header class="hp_wrapper">
        <!-- 見出し -->
        <p class="hp_blue">Customer's voice</p>
        <h2 class="hp_title hp_mb60">お客様の声</h2>
    </header>

    <!-- メインコンテンツ -->
    <section class="p_voice hp_wrapper hp_maw800">
        <?php
        $count = 0;
        $args = array(
            'post_type' => 'post_voice',
            'posts_per_page' => -1
        );
        $the_query = new WP_Query($args); if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

        <!-- アンカーIDのカウント -->
        <?php $count ++; ?>

        <article id="ank<?php echo $count; ?>" class="p_voice__content">
            <figure class="p_voice__img">
                <img loading='lazy' src='<?php the_field("img"); ?>' alt='サムネ画像'>
                <div class="p_voice__title">
					<!-- どちらか一つ削除-->
<!--                     <p class="p_voice__text sp_hidden"><?php the_field("work"); ?>｜<?php the_field("industry"); ?></p> -->
                    <p class="p_voice__text"><?php the_field("company"); ?>　<?php the_field("name"); ?></p>
                </div>
            </figure>
            <div class="p_voice__main">
                <p class="p_voice__blue"><?php the_field("work"); ?>｜<?php the_field("industry"); ?></p>
                <p class="p_voice__blue hp_mb15"><?php the_field("company"); ?>　<?php the_field("name"); ?></p>
                <p class="p_voice__brown hp_mb15 sp_hidden"><?php the_field('title'); ?></p>
                <p class="p_voice__desc sp_hidden"><?php the_field('text'); ?></p>
            </div>
        </article>
		<div class='sp_voice__main'>
			<p class="p_voice__brown hp_mb15 pc_hidden"><?php the_field('title'); ?></p>
            <p class="p_voice__desc pc_hidden"><?php the_field('text'); ?></p>
		</div>
		
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </section>

    <!-- お問合せ -->
    <?php get_template_part('part/tocontact'); ?>

</main>

<?php get_footer(); ?>