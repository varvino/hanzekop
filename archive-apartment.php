<head>
    <?php wp_head();
    get_template_part('template-parts/header');
    ?>

    <main class="container grid grid-spacing--two">

        <div class="grid">
            <h1 class="margin-bottom--none">Onze appartementen</h1>
            <p class="text--muted">Hier vindt u onze Staverse appartementen.</p>
        </div>

        <div class="grid grid-column--two--md grid-column--three--xl grid-spacing--two">

            <?php $apartments = new WP_Query(array(
                'post_type' => 'apartment',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'orderby' => 'title',
                'order' => 'ASC'
            ))  ?>

            <?php
            if ($apartments->have_posts()) :
                while ($apartments->have_posts()) : $apartments->the_post();
            ?>
                    <div class="grid grid-column grid-spacing--two border--full border-color--grey border-radius--base padding--sm">

                        <?php
                        $images = get_field('apartment_gallery');
                        if ($images) : ?>
                            <?php foreach ($images as $image) break; ?>
                            <a class="thumbnail__link" href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($image['url']); ?>" />
                            </a>
                        <?php endif; ?>

                        <div class="grid grid-row--zero-one">
                            <div class="apartment-list__content-header">
                                <h2 class="margin-bottom--none"><?php the_title() ?></h2>
                                <p class="text--muted">Geheel apartement</p>
                            </div>

                            <p><?php the_field('introduction') ?></p>
                            <a href="<?php the_permalink() ?>" class="button button--primary align-self--end justify-self--end">Bekijk</span></a>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </main>

    <?php get_template_part('template-parts/footer'); ?>