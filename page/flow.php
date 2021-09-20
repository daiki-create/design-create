<!-- メインコンテンツ -->
<main class="hp_page">

    <!-- 制作の流れ -->
    <section class="p_flow hp_wrapper">
        <!-- 見出し -->
        <header>
            <p class="hp_blue">Flow</p>
            <h2 class="hp_title"><?php the_title(); ?></h2>
            <p class="hp_text hp_text_left">川口ウェブクリエイトではオフィシャルサイトを始め､ランディングページまで幅広くウェブ制作を手掛けております｡</p>
        </header>

        <figure class="p_flow__img">
            <img loading='lazy' src='<?php echo DIR; ?>/assets/img/flow/img.svg' alt='
            お客様からお問い合わせ
            →ウェブクリエイトでヒアリング（使用確認や素材の有無、制作する上での課題）
            →見積（プランニングのご提案）
            →お客様でご検討、お申込み
            →ウェブクリエイトからご契約書の送付
            この時点でお客様にはドメインやサーバー、素材、テキスト等のご準備をお願いしております。
            ドメイン、サーバー、ライティングは代行作業も行っております。（写真はご支給くださいませ）
            →ご契約書の確認（初回お取引のお客様につきましては、着手金として半金をお振込みいただきます）
            →ラフデータ提出
            →お客様確認
            →修正
            →データの確認（コーディング作業着手）
            →お客様最終確認
            →残金のお支払い
            →納品
            →アフターフォロー（メールの設定方法、スマホへのメール設定など）
            ご納得いただけるまでアフターフォローいたします。
            '>
            <!-- ヒヤリングシートのダウンロードボタン -->
            <a href="<?php echo DIR; ?>/assets/download/ヒアリングシート.pdf" download class="p_flow__link p_flow__link_1"></a>
            <!-- 発注書のダウンロードボタン -->
            <a href="<?php echo DIR; ?>/assets/download/発注書_タテ型.pdf" download class="p_flow__link p_flow__link_2"></a>
        </figure>

    </section>

    <!-- お問合せ -->
    <?php get_template_part("part/tocontact"); ?>
    
</main>
