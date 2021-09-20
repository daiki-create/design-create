<aside class="related hp_wrapper">
    <div class="related__top">
        <div class="related__border"></div>
        <h3 class="related__title">こんな記事も読まれています!</h3>
        <div class="related__border"></div>
    </div>
    <main class="related__contents">

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 8,
            'orderby' => 'rand',
        );
        $the_query = new WP_Query($args); if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

            <article class="related__content">
                <figure class="related__img">
                    <img loading='lazy' src='<?php echo get_the_post_thumbnail_url(); ?>' alt='サムネ画像'>
                </figure>
                <p class="related__term"><?php the_title(); ?></p>
                <p class="related__text"><?php echo get_the_excerpt(); ?></p>
                <a href="<?php echo get_the_permalink(); ?>" class="related__link">More</a>
            </article>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>


    </main>
</aside>