<head>
    <?php wp_head();
    get_template_part('template-parts/header');
    ?>

    <main class="container">
        <h1><?php the_title(); ?></h1>
        <?php

        if (have_rows('content')) :

            while (have_rows('content')) : the_row(); ?>

                <?php if (get_row_layout() == 'text') : ?>
                    <div class="text-container">
                        <?php the_sub_field('text'); ?>
                    </div>

                <?php elseif (get_row_layout() == 'image') : ?>
                    <div class="image-container">
                        <?php echo wp_get_attachment_image(get_sub_field('image')['ID'], 'full'); ?>
                    </div>

                <?php elseif (get_row_layout() == 'video') : ?>
                    <div class="video-container">
                        <?php the_sub_field('video'); ?>
                    </div>

        <?php endif;

            endwhile;

        else :
            echo 'Geen content';
        endif; ?>
    </main>

    <?php get_template_part('template-parts/footer'); ?>