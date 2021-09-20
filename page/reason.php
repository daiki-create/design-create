<!-- メインコンテンツ -->
<main class="hp_page">

    <!-- サービス案内 -->
    <section class="p_reason hp_wrapper">
        <!-- 見出し -->
        <header>
            <p class="hp_blue"><?php the_field('en_title'); ?></p>
            <h2 class="hp_title hp_mb60"><?php the_title(); ?></h2>
        </header>

        <ul class="p_reason__contents">
            
            <?php $count = 0; ?>
            <?php if(have_rows('contents')): ?>
            <?php while(have_rows('contents')): the_row(); ?>
            <?php $count ++; ?>

                <li class="p_reason__content">
                    <div class="p_reason__top">
                        <p class="p_reason__number"><span class="p_reason__number_small">NO.</span><?php echo $count; ?></p>
                        <h3 class="p_reason__title"><?php the_sub_field('title'); ?></h3>
                    </div>
                    <p class="p_reason__text hp_wspw"><?php the_sub_field('text'); ?></p>
                </li>
                <table class="p_reason__tb" width="870" height="auto" cellpadding="20" border="0">
                    <tbody><tr style="color: ffffff;">
                        <th class="p_reason__th" style="/*! color: ffffff; */" bgcolor="#8BC53F">他社さま</th>
                        <th class="p_reason__th" bgcolor="#0071BB">デザインクリエイト</th>
                        </tr>
                        <tr>
                            <td class="p_reason__td" style="color: 006837;" bgcolor="#D0E2A6" width="50%">
                            <?php if(the_sub_field('other1')): ?>
                            <p class="p_reason__td_other">
                                <?php the_sub_field('other1'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if(the_sub_field('other2')): ?>
                            <p class="p_reason__td_other">
                                <?php the_sub_field('other2'); ?>
                            </p>
                            <?php endif; ?>
                            </td>
                            <td class="p_reason__td" style="color: 0071BB;" bgcolor="#D3E0F0">
                            <?php if(the_sub_field('design-create1')): ?>
                            <p class="p_reason__td_dc">
                                <?php the_sub_field('design-create1'); ?>
                            </p>
                            <?php endif; ?>
                            <?php if(the_sub_field('design-create2')): ?>
                            <p class="p_reason__td_dc">
                                <?php the_sub_field('design-create2'); ?>
                            </p>
                            <?php endif; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>

            <?php endwhile; ?>
            <?php endif; ?>

        </ul>
    </section>

    <!-- お問合せ -->
    <?php get_template_part('part/tocontact'); ?>

    <!-- お客様の声 -->
    <?php get_template_part('part/voice'); ?>

</main>