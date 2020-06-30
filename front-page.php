<head>

    <?php wp_head();
    get_template_part('template-parts/header');
    ?>

    <main class="container">
        <div class="frontpage-introduction grid grid-spacing--four">
            <div class="grid grid-column--two grid-spacing--two align-items--center">
                <div>
                    <h2>Onze appartementen</h2>
                    <p>Gelegen in het pittoreske Stavoren, voorziet Hanzekop Recreatiewoningen u van een onvergetelijke vakantie direct aan het IJsselmeer!</p>
                    <a href="<?php echo get_post_type_archive_link('apartment'); ?>" class="button button--primary">Bekijk appartementen</a>
                </div>
                <img class="frontpage-image border-radius--base" src="<?php echo get_theme_file_uri('assets/img/hanzekop-2.jpg') ?>" alt="Hanzekop Recreatiewoningen">
            </div>
        </div>
    </main>

    <?php get_template_part('template-parts/footer'); ?>