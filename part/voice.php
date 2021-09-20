<!-- お客様の声 -->
<section class="voice hp_wrapper">
    <p class="hp_blue">Customer's voice</p>
    <h2 class="hp_title">お客様の声</h2>
    <p class="hp_text">
        デザインクリエイトに寄せられたお客様の声を一部ご紹介しております。
        <br>活動エリアは関東エリアになりますが全国のクライアントからお喜びの声をいただきました。
    </p>

    <!-- メインコンテンツ -->
    <ul class="voice__contents">

        <?php
        $count = 0;
        $args = array(
            'post_type' => 'post_voice',
            'posts_per_page' => 4
        );
        $the_query = new WP_Query($args); if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

        <!-- アンカーリンクのカウント -->
        <?php $count++; ?>

        <li class="voice__content">
            <a href="<?php echo link_voice."#ank".$count; ?>">
                <figure class="voice__img">
                    <img loading='lazy' src='<?php the_field('img') ?>' alt='イメージ画像'>
                </figure>
                <div class="voice__title">
<!--                     <p class="voice__text"><?php the_field("work"); ?>｜<?php the_field("industry"); ?></p> -->
                    <p class="voice__text"><?php the_field("company"); ?>　<br><?php the_field("name"); ?></p>
                </div>
            </a>
        </li>

        
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </ul>
</section>