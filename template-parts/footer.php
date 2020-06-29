<footer>
    <div class="container grid grid-spacing--two">
        <div class="navbar">
            <div class="logo">
                <a href="<?php echo site_url() ?>" class="logo__link">
                    <img class="logo__image" src="<?php echo get_theme_file_uri('assets/img/logo_icon.svg') ?>" alt="Hanzekop Recreatiewoningen">
                    <div class="logo__text">
                        <h1 class="logo__title"><?php bloginfo('name') ?></h1>
                    </div>
                </a>
            </div>
            <div class="navmenu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'container_class' => 'navigation-container',
                        'items_wrap' => '<nav class="navigation">%3$s</nav>'
                    )
                );
                ?>
            </div>
        </div>
        <div class="copyright">
            © <?php echo date("Y"); ?> Hanzekop. Alle rechten voorbehouden.
        </div>
    </div>
</footer>

<?php wp_footer() ?>

</body>

</html>