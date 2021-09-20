<?php get_header(); ?>

<div class="hp_page p_news ">

    <!-- ニュース一覧 -->
    <?php get_template_part('part/news'); ?>

    <!-- 見出し -->
    <div class="hp_wrapper">
        <p class="hp_blue">News</p>
        <h2 class="hp_title hp_mb60">更新情報</h2>
    </div>

    <!-- メインコンテンツ -->
    <?php get_template_part('part/post'); ?>

    <!-- お問合せ -->
    <?php get_template_part('part/tocontact'); ?>

</div>

<?php get_footer(); ?>