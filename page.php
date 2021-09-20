<?php get_header(); ?>

<?php 
    // スラッグに対応したページのファイルパス取得
    global $post;
    $slug = $post->post_name;
    $page_path = 'page/'.$slug;

    if(locate_template($page_path.'.php')):
        get_template_part($page_path);
    else:
?>

<div class="hp_page p_news">
<!-- 見出し -->
<header class="hp_wrapper">
    <p class="hp_blue">　</p>
    <h2 class="hp_title hp_mb60"><?php the_title(); ?></h2>
</header>

<!-- 固定ページのテンプレ -->
<div class="hp_wrapper hp_mb60">
    <main class="p_blog__content">
        <?php the_content(); ?>
    </main>
</div>


<!-- お問合せ -->
<?php get_template_part('part/tocontact'); ?>

</div>

<? endif; ?>

<!-- <?php get_footer(); ?> -->