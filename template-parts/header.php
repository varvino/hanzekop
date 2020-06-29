</head>

<?php
if (is_front_page()) : ?>
    </head>
    <header style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url('<?php echo get_theme_file_uri('assets/img/stavoren-3.jpg') ?>');">
        <div class="container">
            <div class="navbar">
                <?php get_template_part('template-parts/components/logo'); ?>
                <?php get_template_part('template-parts/components/navigation'); ?>
            </div>
            <div class="popout">
                <h2>Vakantie op de kop van het Hanzekwartier in Stavoren</h2>
                <div class="popout__select">
                    <p>Voor hoeveel gasten wilt u reserveren?</p>
                    <div class="select-container">
                        <select>
                            <option value="" disabled selected hidden>Aantal gasten</option>
                            <option value="0">1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="4">5</option>
                            <option value="5">6</option>
                        </select>
                    </div>
                </div>
                <a href="<?php echo get_post_type_archive_link('apartment'); ?>" class="button button--primary">Bekijk</a>
            </div>
        </div>
    </header>
    <div class="usp-container">
        <div class="container">
            <ul class="usp-list grid grid-column--two grid-spacing--one">
                <li class="usp__item"><span class="dashicons dashicons-location"></span>Havenweg 14 001 t/m 004 - 8715 EM - Stavoren</li>
                <li class="usp__item"><span class="dashicons dashicons-phone"></span>+ 31 6412 278 920</li>
            </ul>
        </div>
    </div>
<?php else : ?>
    <header>
        <div class="container">
            <div class="navbar">
                <?php get_template_part('template-parts/components/logo'); ?>
                <?php get_template_part('template-parts/components/navigation'); ?>
            </div>
        </div>
    </header>
<?php endif; ?>

<body <?php body_class() ?>>