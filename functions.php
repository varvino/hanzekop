<?php

#############################################################
# CSS & JS files
#############################################################
function hanzekop_files()
{
    #############################################################
    # Styles
    #############################################################
    wp_enqueue_style('dashicons');

    wp_enqueue_style('hanzekop-styles', get_theme_file_uri('/assets/css/main.min.css'), NULL, microtime());
    wp_enqueue_style('hanzekop-fonts', 'https://fonts.googleapis.com/css?family=Inter:400,500,700|Raleway:400,500,700&display=swap');

    #############################################################
    # Scripts
    #############################################################
    wp_enqueue_script('jquery');
    wp_enqueue_script('hanzekop-scripts', get_theme_file_uri('/assets/js/custom.min.js'), NULL, microtime(), true);
    wp_enqueue_script('hanzekop-vendor-scripts', 'https://rawcdn.githack.com/nextapps-de/spotlight/0.6.3/dist/spotlight.bundle.js', NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'hanzekop_files');

#############################################################
# Menus
#############################################################
function register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_menus');

#############################################################
# Custom Functions
#############################################################
#############################################################
# Metatags
#############################################################
function add_to_head()
{
?>
    <!-- Primary Meta Tags -->
    <meta name="title" content="Hanzekop – Recreatiewoningen">
    <meta name="description" content="Modern ingerichte woningen met prachtig uitzicht op het IJsselmeer.">

    <!-- Open Graph/Facebook  -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo site_url(); ?>">
    <meta property="og:title" content="Hanzekop – Recreatiewoningen">
    <meta property="og:description" content="Modern ingerichte woningen met prachtig uitzicht op het IJsselmeer.">
    <meta property="og:image" content="<?php echo get_theme_file_uri('assets/img/hanzekop-3.jpg') ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo site_url(); ?>">
    <meta property="twitter:title" content="Hanzekop – Recreatiewoningen">
    <meta property="twitter:description" content="Modern ingerichte woningen met prachtig uitzicht op het IJsselmeer.">
    <meta property="twitter:image" content="<?php echo get_theme_file_uri('assets/img/hanzekop-3.jpg') ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('assets/img/favicon.svg'); ?>" type="image/x-icon">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168393610-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-168393610-1');
    </script>

<?php
}
add_action('wp_head', 'add_to_head');
#############################################################
# Title Tag
#############################################################

function hanzekop_features()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'hanzekop_features');

#############################################################
# Excerpt Length
#############################################################
function hanzekop_custom_excerpt_length($length)
{
    return 23;
}
add_filter('excerpt_length', 'hanzekop_custom_excerpt_length', 999);

#############################################################
# Excerpt More
#############################################################

function hanzekop_excerpt_more($more)
{
    return '..';
}
add_filter('excerpt_more', 'hanzekop_excerpt_more');

#############################################################
# Custom Body Classes
#############################################################
function custom_class($classes)
{
    if (is_page_template('page-sitemap.php')) {
        $classes[] = 'sitemap';
    }
    return $classes;
}

add_filter('body_class', 'custom_class');
