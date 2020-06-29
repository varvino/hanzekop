<head>
    <?php wp_head();
    get_template_part('template-parts/header');
    ?>

    <main class="container">

        <h1><?php the_title() ?></h1>

        <div class="grid grid-spacing--two">

            <?php $sitemap_items = new WP_Query(array(
                'post_type' => 'page',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'orderby' => 'title',
                'order' => 'ASC'
            )); ?>

            <?php if ($sitemap_items > 0) : ?>
                <div>
                    <h2>Pagina's</h2>
                    <div class="sitemap__loop">

                        <?php while ($sitemap_items->have_posts()) : $sitemap_items->the_post(); ?>

                            <a class="sitemap__link flex align-items--center" href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title(); ?>"></span><?php the_title(); ?></a>

                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php wp_reset_query(); ?>

            <?php $sitemap_items = new WP_Query(array(
                'post_type' => 'apartment',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'orderby' => 'title',
                'order' => 'ASC'
            )); ?>
            <?php if ($sitemap_items > 0) : ?>
                <div>
                    <h2>Appartementen</h2>
                    <div class="sitemap__loop">

                        <?php while ($sitemap_items->have_posts()) : $sitemap_items->the_post(); ?>

                            <a class="sitemap__link flex align-items--center" href="<?php echo get_permalink($post->ID); ?>" title="<?php the_title(); ?>"></span><?php the_title(); ?></a>

                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </main>

    <?php get_template_part('template-parts/footer'); ?>