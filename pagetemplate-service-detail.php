<?php
/**
 * Template Name: サービス詳細ページテンプレート
 * Template Post Type: page
 * Description: サービス詳細ページレイアウト用のテンプレート
 */
 ?>
<?php get_header(); ?>

<!-- メインコンテンツ -->
<main class="hp_page">
    <section>
        <!-- 見出し -->
		<header class="hp_wrapper">
			<p class="hp_blue">
				<?php 
				if ( get_field('en') ) {
				?>
				<?php the_field('en'); ?>
				<?php } ?>
			</p>
			<h2 class="hp_title hp_mb60"><?php the_title(); ?></h2>
		</header>
		<!-- メインコンテンツ -->
        <article class="p_about hp_wrapper">
			<p class="service-p">
				<?php 
				if ( get_field('text') ) {
				?>
				<?php the_field('text'); ?>
				<?php } ?>
			</p>
			<img src="
				<?php 
				if ( get_field('img') ) {
				?>
				<?php the_field('img'); ?>
				<?php } ?> "
				 class="service_img">
			<p class="service-p service-textarea">
				<?php 
				if ( get_field('text_area') ) {
				?>
				<?php the_field('text_area'); ?>
				<?php } ?>
			</p>
			<img src="
				<?php 
				if ( get_field('sample_img') ) {
				?>
				<?php the_field('sample_img'); ?>
				<?php } ?> "
				 class="service_img">
			
			
        </article>
    </section>

<!-- お問合せ -->
<?php get_template_part('part/tocontact'); ?>
	
</main>

<?php get_footer(); ?>



        
