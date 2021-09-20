<?php get_header(); ?>

<main id="main">

    <!-- NEWS -->
    <?php get_template_part('part/news'); ?>

    <!-- サービス案内 -->
    <section class="service hp_wrapper">
        <!-- 見出し -->
        <p class="hp_blue">Service</p>
        <h2 class="hp_title">サービス案内</h2>
        <p class="hp_text">デザインクリエイトではオフィシャルサイトを始め、ランディングページまで幅広くウェブ制作を手掛けております。</p>

        <!-- コンテンツ -->
        <div class="service__contents">
            <article class="service__content">
                <a href="<?php echo link_service; ?>/service1">
                    <figure class="service__img">
                        <img loading='lazy' src='<?php echo DIR; ?>/assets/img/service/img (1).jpg' alt='イメージ画像'>
                    </figure>
                    <h3 class="service__name">ホームページ制作</h3>
                    <p class="service__ann">オフィシャルサイト・ランディングページ制作</p>
                </a>
            </article>
            <article class="service__content">
                <a href="<?php echo link_service; ?>/service2">
                    <figure class="service__img">
                        <img loading='lazy' src='<?php echo DIR; ?>/assets/img/service/img (2).jpg' alt='イメージ画像'>
                    </figure>
                    <h3 class="service__name">デザイン制作</h3>
                    <p class="service__ann">各種デザインのデータ制作</p>
                </a>
            </article>
            <article class="service__content">
                <a href="<?php echo link_service; ?>/service3">
                    <figure class="service__img">
                        <img loading='lazy' src='<?php echo DIR; ?>/assets/img/service/img (3).jpg' alt='イメージ画像'>
                    </figure>
                    <h3 class="service__name">名刺・チラシ・POP制作</h3>
                    <p class="service__ann">デザインから印刷までワンストップで！</p>
                </a>
            </article>
            <article class="service__content">
                <a href="<?php echo link_service; ?>/service4">
                    <figure class="service__img">
                        <img loading='lazy' src='<?php echo DIR; ?>/assets/img/service/img (4).jpg' alt='イメージ画像'>
                    </figure>
                    <h3 class="service__name">大型看板・ポスター制作</h3>
                    <p class="service__ann">自社で印刷できない大型印刷物も弊社にて！</p>
                </a>
            </article>
            <article class="service__content">
                <a href="<?php echo link_service; ?>/service5">
                    <figure class="service__img">
                        <img loading='lazy' src='<?php echo DIR; ?>/assets/img/service/img (5).jpg' alt='イメージ画像'>
                    </figure>
                    <h3 class="service__name">冊子・会報誌制作</h3>
                    <p class="service__ann">発行部数や綴り印刷もご相談ください</p>
                </a>
            </article>
            <article class="service__content">
                <a href="<?php echo link_service; ?>/service6">
                    <figure class="service__img">
                        <img loading='lazy' src='<?php echo DIR; ?>/assets/img/service/img (6).jpg' alt='イメージ画像'>
                    </figure>
                    <h3 class="service__name">SEO対策コンサルティング</h3>
                    <p class="service__ann">解決策をプランニングいたします！</p>
                </a>
            </article>
        </div>
    </section>

    <!-- 活動エリア -->
    <section class="area hp_wrapper">
        <p class="hp_blue">Activity area</p>
        <h2 class="hp_title">活動エリア</h2>
        <p class="hp_text hp_text_left">
            伊勢崎・高崎・前橋近辺エリアでのデザイン制作・HP制作を行なっております。
            <br>ご訪問可能です。その他エリアの方もご相談ください。遠方の方はZOOMなどのお打ち合わせも可能です！
        </p>
        <iframe class="area__map" src="https://www.google.com/maps/d/embed?mid=1iwNpc45s6dprDttlGg2c9Vjc46QGPUnb&hl=ja" width="100%" height="480"></iframe>
        
        <a href="" class="area__btn">
            <p class="area__text">ご訪問ご希望のお客様へ</p>
        </a>
    </section>

    <!-- お客様の声 -->
    <?php get_template_part('part/voice'); ?>

    <!-- お問合せ -->
    <?php get_template_part('part/tocontact'); ?>

</main>

<?php get_footer(); ?>