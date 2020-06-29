<div class="navmenu js-navmenu">
    <div class="logo">
        <a href="<?php echo site_url() ?>" class="logo__link">
            <img class="logo__image" src="<?php echo get_theme_file_uri('assets/img/logo_icon.svg') ?>" alt="Hanzekop Recreatiewoningen">
            <div class="logo__text">
                <h1 class="logo__title"><?php bloginfo('name') ?></h1>
                <h2 class="logo__subtitle"><?php bloginfo('description') ?></h2>
            </div>
        </a>
    </div>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'header-menu',
            'container_class' => 'navigation-container',
            'items_wrap' => '<nav class="navigation">%3$s</nav>'
        )
    );
    ?>
    <a href="<?php echo site_url('contact') ?>" class="button button--primary">Neem contact op</span></a>
</div>

<div class="hamburger js-hamburger">
    <img class="hamburger__icon" src="<?php echo get_theme_file_uri('assets/img/hamburger.svg') ?>" alt="Hanzekop Recreatiewoningen">
</div>