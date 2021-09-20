<article class="p_posts__content">
    <figure class="p_posts__img">
        <img loading='lazy' src='<?php echo get_the_post_thumbnail_url(); ?>' alt='サムネ画像'>
    </figure>
    <div class="p_posts__main">
        <h3 class="p_posts__title"><?php the_title(); ?></h3>
        <time class="p_posts__date"><?php the_time("Y.m.d"); ?></time>
        <p class="p_posts__text"><?php echo get_the_excerpt(); ?></p>
        <a href="<?php echo get_the_permalink(); ?>" class="p_posts__link">More</a>
    </div>
</article>