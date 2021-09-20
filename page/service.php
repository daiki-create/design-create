<!-- サービス案内 -->
<main class="hp_page">

    <!-- サービス案内 -->
    <section class="p_service hp_wrapper">
        <!-- 見出し -->
        <header>
            <p class="hp_blue"><?php the_field('en_title'); ?></p>
            <h2 class="hp_title"><?php the_title(); ?></h2>
            <p class="hp_text hp_wspw"><?php the_field('cp'); ?></p>
        </header>

        <!-- コンテンツ -->
        <div class="service__contents service__contents_p">

            <?php $count = 0; ?>
            <?php if(have_rows('contents')): ?>
            <?php while(have_rows('contents')): the_row(); ?>
            <?php $count ++; ?>

                <?php $link = get_sub_field('link'); ?>

<!--                 <?php if(strpos($link,'http') != false): ?> -->
<!-- 			    <a id="ank<?php echo $count; ?>" href="#" class="service__content service__content_p"> -->
<!--                 <?php else: ?> -->
				<a id="ank<?php echo $count; ?>" href="<?php echo "service" . $count; ?>" class="service__content service__content_p">
                <ariticle id="ank<?php echo $count; ?>" class="service__content service__content_p">
                <?php endif; ?>

                    <figure class="service__img">
						<img loading='lazy' src='<?php the_sub_field('img'); ?>' alt='イメージ画像'>
                    </figure>
                    <h3 class="service__name"><?php the_sub_field('title'); ?></h3>
                    <p class="service__ann hp_wspw"><?php the_sub_field('detail'); ?></p>

                <?php if(strpos($link,'http') === true): ?>
                
                <?php else: ?>
                </ariticle>
				</a>
                <?php endif; ?>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </section>

    <!-- お問合せ -->
    <?php get_template_part("part/tocontact"); ?>

</main>