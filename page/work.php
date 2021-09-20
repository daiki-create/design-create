<?php $terms = get_terms('work_type'); ?>

<!-- メインコンテンツ -->
<main class="hp_page">

    <!-- サービス案内 -->
    <header class="p_works hp_wrapper">
        <!-- 見出し -->
        <p class="hp_blue">Works</p>
        <h2 class="hp_title hp_mb60">実績</h2>

        <!-- ボタン -->
        <nav>
            <ul class="p_works__btns">

                <?php foreach($terms as $index => $term): ?>

                <li>
                    <a href="#ank<?php echo $index; ?>" class="p_works__btn"><?php echo $term->name; ?></a>
                </li>

                <?php endforeach; ?>

            </ul>
        </nav>
    </header>

    <!-- 実績 -->
    <section class="p_works hp_wrapper">
        <?php 
            foreach ( $terms as $index => $term ):
                $args = [
                    'name' => $term->name,
                    'slug' => $term->slug,
                    'index' => $index
                ];
                get_template_part('part/work', null, $args);
            endforeach;
        ?>
    </section>

    <!-- お問合せ -->
    <?php get_template_part('part/tocontact'); ?>

</main>