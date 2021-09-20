<!-- メインコンテンツ -->
<main class="hp_page">

    <!-- サービス案内 -->
    <header class="p_faq hp_wrapper">
        <!-- 見出し -->
        <p class="hp_blue">Q&A</p>
        <h2 class="hp_title">よくある質問</h2>
        <p class="hp__cat hp_mb60">カテゴリーから選ぶ</p>

        <!-- ボタン -->
        <?php get_template_part('part/cat_nav'); ?>
    </header>

    <!-- メインコンテンツ -->
    <section class="p_faq hp_wrapper">

        <!-- 質問カテゴリのスラッグ -->
        <?php 
            $slugs = array(
                "homepage",
                "design",
                "pop",
                "board",
                "booklet",
                "other"
            );
            $count = 0;
        ?>

        <!-- 質問カテゴリのループ -->
        <?php foreach ($slugs as $slug): ?>
        <?php $content ++; ?>


            <!-- Q&A取得（サブループ） -->
            <?php
            $args = array(
                'post_type' => 'post_faq',
                'name' => $slug
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
            ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>


                <!-- 質問カテゴリの囲い -->
                <article class="p_faq__content" id="ank<?php echo $content; ?>">

                    <!-- 見出し -->
                    <div class="p_faq__top hp_head">
                        <div class="hp_head__left">
                            <img src="<?php echo DIR; ?>/assets/img/icon/icon1.svg" alt="アイコン" class="hp_head__img">
                            <h3 class="hp_head__title"><?php the_title(); ?></h3>
                        </div>
                    </div>

                    <!-- カスタムフィールドのループ -->
                    <?php if(get_field('qa')): ?>
                    <?php while(the_repeater_field('qa')):?>

                        <dl>
                            <dt class="p_faq__faq">
                                <img class="p_faq__icon" loading='lazy' src='<?php echo DIR; ?>/assets/img/icon/faq_q.svg' alt='Q'>
                                <span class="p_faq__text"><?php the_sub_field('q'); ?></span>
                            </dt>
                            <dd class="p_faq__faq">
                                <img class="p_faq__icon" loading='lazy' src='<?php echo DIR; ?>/assets/img/icon/faq_a.svg' alt='Q'>
                                <span class="p_faq__text p_faq__text_blue"><?php the_sub_field('a'); ?></span>
                            </dd>
                        </dl>

                    <?php endwhile;?>
                    <?php endif; ?>
                    <?php wp_reset_postdata();?>

                </article>
            
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        <?php endforeach; ?>

    </section>

    <!-- お問合せ -->
    <?php get_template_part('part/tocontact'); ?>

</main>