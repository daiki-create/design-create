<!-- サブループ -->
<?php
$paged = get_query_var('paged')? get_query_var('paged') : 1;
$args = array(
    'post_type' => $args['post_type'],
    'posts_per_page' => 10,
    'paged' => $paged,
);
$the_query = new WP_Query($args); if($the_query->have_posts()):
?>
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>


<?php get_template_part('part/post_desc'); ?>


<?php endwhile; ?>
<?php 
if(function_exists('wp_pagenavi')):
    wp_pagenavi(array('query'=>$the_query));   ////wp_pagenavi()の呼び出し(ただし、引数の指定が必要！)
endif;
?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>