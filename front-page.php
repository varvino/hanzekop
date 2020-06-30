<head>

    <?php wp_head();
    get_template_part('template-parts/header');
    ?>

    <main class="container">
        <div class="frontpage-introduction grid grid-spacing--four">
            
            <?php if (have_rows('introduction_container')) : ?>
                <div class="grid grid-column--two grid-spacing--two align-items--center">
                    <?php while (have_rows('introduction_container')) : the_row(); ?>

                        <?php if (have_rows('text_container')) : ?>
                            <?php while (have_rows('text_container')) : the_row(); ?>

                                <div>
                                    <?php if (get_sub_field('title')) : ?>
                                        <h2><?php the_sub_field('title') ?></h2>
                                    <?php endif; ?>

                                    <?php if (get_sub_field('text')) : ?>
                                        <p><?php the_sub_field('text') ?></p>
                                    <?php endif; ?>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php $image = get_sub_field('image'); ?>

                        <?php if ($image) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                    <?php endwhile; ?>
                </div>
                
            <?php else : ?>
            <?php endif; ?>
        </div>
    </main>

    <?php get_template_part('template-parts/footer'); ?>