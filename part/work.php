<?php $term_imfo = $args; ?>

<article id="ank<?php echo $term_imfo['index']; ?>" class="p_works__article">
    <h3 class="p_works__title"><?php echo $term_imfo['name']; ?></h3>
    <ul class="p_works__contents">

        <?php
        $args = array(
            'post_type' => 'post_work',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'work_type', // タクソノミースラッグを指定
                    'field' => 'slug',
                    'terms' => $term_imfo['slug'], // タームスラッグを指定
                )
            )
        );
        $the_query = new WP_Query($args); if($the_query->have_posts()):
        while ($the_query->have_posts()): $the_query->the_post();
        ?>

        <?php get_template_part('part/work_content'); ?>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

    </ul>
</article>