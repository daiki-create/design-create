<!-- NEWS -->
<section class="news">
    <div class="news__wrapper hp_wrapper">
        <h2 class="news__news">NEWS</h2>
        <div class="news__main">

            <!-- サブループ -->
            <?php
            $args = array(
                'post_type' => 'post_news',
                "posts_per_page" => 5
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
            ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

                <article>
                    <a href="<?php the_permalink(); ?>" class="news__link">
                        <time class="news__date"><?php echo get_post_time('Y.m.d'); ?></time>
                        <h3 class="news__title"><?php the_title(); ?></h3>
                    </a>
                </article>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>

        </div>
        <a href="<?php echo link_news; ?>" class="news__all">
            <img loading='lazy' src='<?php echo DIR; ?>/assets/img/icon/news_list.svg' alt='お知らせ一覧のアイコン'>
            <span class="news__notice">お知らせ一覧</span>
        </a>
    </div>
</section>