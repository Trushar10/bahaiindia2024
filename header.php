<?php

if (!defined('ABSPATH')) {
    exit; // For security
}

?>

<!DOCTYPE html>
<html lang="<?php echo esc_attr(get_theme_mod('html_language_code', 'en')); ?>">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
    <style type="text/css">
    body {
        font-family: <?php echo get_theme_mod('google_font_setting', 'default_value');
        ?>;
    }
    </style>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M9E6B6L3S4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-M9E6B6L3S4');
    </script>
</head>

<body>
    <header>
        <div class="header-container">
            <div class="site-identity">
                <a href="<?php echo home_url(); ?>">
                    <h1><?php echo get_bloginfo('name'); ?></h1>
                    <h2><?php echo get_bloginfo('description'); ?></h2>
                </a>
            </div>
            <div class="hamburger-btn">
                <input type="checkbox" id="menu_checkbox" />
                <label for="menu_checkbox" class="menu_checkbox">
                    <div></div>
                    <div></div>
                    <div></div>
                </label>
            </div>
            <div class="menu">
                <?php

                wp_nav_menu([
                    'theme_location' => 'primary-menu',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                    'depth' => 2,
                ]);

                ?>
            </div>
            <div class="secondary-items">
                <?php get_search_form(); ?>
                <div class="lang">
                    <img src="https://www.bahai.in/wp-content/uploads/2023/10/New-Project-2.svg" class="lang-icon"
                        alt="">
                    <?php

                    wp_nav_menu([
                        'theme_location' => 'lang-menu',
                        'container' => false,
                        'menu_class' => 'lang-menu',
                        'depth' => 2,
                    ]);

                    ?>
                </div>
                <div class="all-sites">
                    <img src="https://www.bahai.in/wp-content/uploads/2024/04/globe-icon-svg.svg" class="globe" alt="">
                    <span class="globe-text">All Sites</span>
                    <div class="site-menu">
                        <h3>Officials Websites</h3>
                        <div class="d-grid">
                            <div>
                                <a href="https://bahaihouseofworship.in/"><img
                                        src="https://www.bahai.in/wp-content/uploads/2023/10/bahaihouseofworship.webp"
                                        alt=""></a>
                                <a href="https://bahaihouseofworship.in/">
                                    <h4>Bahá'í House of Worship, New Delhi</h4>
                                </a>
                            </div>
                            <div>
                                <a href="https://opa.bahai.in/"><img
                                        src="https://www.bahai.in/wp-content/uploads/2023/10/opa-bahai-india-scaled-1.webp"
                                        alt=""></a>
                                <a href="https://opa.bahai.in/">
                                    <h4>Office of Public Affairs of Bahá'ís of India</h4>
                                </a>
                            </div>
                            <div>
                                <a href="https://library.bahai.in/"><img
                                        src="https://www.bahai.in/wp-content/uploads/2023/10/bahai-library-scaled-1.webp"
                                        alt=""></a>
                                <a href="https://library.bahai.in/">
                                    <h4>A Collection of Bahá'í Writings</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>