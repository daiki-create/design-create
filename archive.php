<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="hp_page">

    <!-- 見出し -->
    <header class="hp_wrapper">
        <!-- 見出し -->
        <p class="hp_blue">Blog</p>
        <h2 class="hp_title hp_mb60">ブログ</h2>
        
    </header>

    <div class="sidebar hp_wrapper">

        <!-- メインコンテンツ -->
        <section class="p_posts sidebar__main">

            <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('part/post_desc'); ?>

            <?php endwhile; ?>
            <?php endif; ?>

        </section>

        <!-- サイドバー -->
        <?php get_sidebar(); ?>

    </div>

    <!-- こんな記事も読まれています！ -->
    <?php get_template_part('part/related'); ?>

    <!-- お問合せ -->
    <?php get_template_part('part/tocontact'); ?>

</main>

<?php get_footer(); ?>