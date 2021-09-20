<!-- メインコンテンツ -->
<div class="hp_page p_mail hp_wrapper">

    <!-- 見出し -->
    <header>
        <!-- 見出し -->
        <p class="hp_blue">Mail</p>
        <h2 class="hp_title hp_mb60">メールでのお問合せ</h2>
        <p class="p_mail__title">
            <img loading='lazy' src='<?php echo DIR; ?>/assets/img/logo2.svg' alt='Design Create'>
            に少しでも気になった方は
            <br>お気軽にお問い合わせ下さい！
        </p>
    </header>

    <!-- STEP -->
    <?php get_template_part('part/mail_step'); ?>

    <!-- 入力欄 -->
    <p class="p_mail__red">※印は入力必須項目となっております｡</p>
    <main class="p_mail__main">

        <?php the_content(); ?>

    </main>

</div>