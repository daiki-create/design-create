<!-- メインコンテンツ -->
<main class="hp_page">

    <!-- 会社概要 -->
    <section>
        <!-- 見出し -->
        <header class="hp_wrapper">
            <!-- 見出し -->
            <p class="hp_blue">Aboutus</p>
            <h2 class="hp_title hp_mb60">会社概要</h2>
        </header>

        <!-- メインコンテンツ -->
        <article class="p_about hp_wrapper">

            <?php if(have_rows('set')): ?>
            <?php while(have_rows('set')): the_row(); ?>

                <dl class="p_about__content">
                    <dt class="p_about__text p_about__text_term"><?php the_sub_field('title'); ?></dt>
                    <dd class="p_about__text p_about__text_disc"><?php the_sub_field('text'); ?></dd>
                </dl>

            <?php endwhile; ?>
            <?php endif; ?>

        </article>
    </section>

    <!-- 代表あいさつ -->
    <section class="p_about p_about_bd hp_wrapper">
        <!-- 見出し -->
        <header>
            <!-- 見出し -->
            <p class="hp_blue">Aboutus</p>
            <h2 class="hp_title hp_mb30">代表挨拶</h2>
        </header>

        <p class="p_about__greet">
            ご覧いただきありがとうございます｡デザインクリエイトの東樹です｡
            <br>幼少期から物を作るのが大好きで特に図工・美術・調理など細かい作業になると時間を忘れて没頭してました｡
        </p>
        <p class="p_about__greet">
            10代で初めてパソコンに触れ､パソコン(インターネット)とは未知の世界だと感動したことを鮮明に記憶してます｡
            <br>それからパソコンに取り憑かれたように毎日パソコンを触り､色々なことを遊び､学びました｡
            <br>こんなこともできる､あんなこともできる､発見の毎日が楽しくて仕方ありませんでした｡
            <br>趣味の一環として楽しんでいたとき､｢仕事にしてみたら？｣という友人の言葉に衝撃を覚えました｡
        </p>
        <p class="p_about__greet">
            ｢パソコンで仕事？｣
        </p>
        <p class="p_about__greet">
            何ができるのだろう？何を提供できるのだろう？・・・と､相当悩みましたが｢やってみたい｣という気持ちが先行し､基礎となるSEOやマーケティング､デザインの勉強をし直し､早速自社サイトを作り､現状に至ります｡
            <br>自分で立ち上げて本当に良かったとは思ってますが､正直言いますと良いことばかりではありません｡
            <br>もちろん成功ばかりではなく､お客様に何かしらのご迷惑や不快な思いをお掛けしたこともありかと思います｡
            <br>それでもまたリピートしてくださるお客様に支えられながら､私も成長していると思うと皆様に感謝しかありません｡
            <br>｢大きな仕事も小さな仕事も同じ志で真摯に対応する｡｣
            <br>それが私のモットーです｡
            <br>個人事業主としての小さな事務所ではありますが､何かお困りのことがあればお気軽にお問い合わせください｡
            <br>お客様が抱えるお悩みを少しでも解決し､ご利益に繋がるプラニングをさせていただきます｡
            <br>現在､大変ありがたいことに､全国各地からのお問い合わせをいただいております｡
            <br>遠方の方もどうぞ遠慮なくお気軽にお問い合わせくださいませ｡
        </p>
        <img class="p_about__sign" loading='lazy' src='<?php echo DIR; ?>/assets/img/sign.svg' alt='Design Create 東樹美都理'>
    </section>

    <!-- お問合せ -->
    <?php get_template_part('part/tocontact'); ?>

</main>