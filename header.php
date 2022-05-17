<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // For security
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6NH4R7619B"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-6NH4R7619B');
    </script>
</head>

<body>
    <header>
        <div class="bg-grey">
            <div class="container header">
                <div>
                    <input type="checkbox" id="menu_checkbox" />
                    <label for="menu_checkbox" class="menu_checkbox">
                        <div></div>
                        <div></div>
                        <div></div>
                    </label>
                </div>
                <?php
            
                    wp_nav_menu([
                        'theme_location' => 'left-menu',
                        'container' => false,
                        'menu_class' => 'menu',
                        'depth' => 2,
                    ]);
                
                ?>
                <div class="site-identity">
                    <h2 class="site-title">
                        <a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
                    </h2>
                    <h3 class="site-description">
                        <a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo( 'description' ); ?></a>
                    </h3>
                </div>
                <?php
            
                    wp_nav_menu([
                        'theme_location' => 'right-menu',
                        'container' => false,
                        'menu_class' => 'menu',
                        'depth' => 2,
                    ]);
                
                ?>
                <div class="mobile-menu">
                    <?php
                
                        wp_nav_menu([
                            'theme_location' => 'left-menu',
                            'container' => false,
                            'menu_class' => 'm-menu',
                            'depth' => 2,
                        ]);
                    
                    ?>
                    <?php
                
                        wp_nav_menu([
                            'theme_location' => 'right-menu',
                            'container' => false,
                            'menu_class' => 'm-menu',
                            'depth' => 2,
                        ]);
                    
                    ?>
                </div>
            </div>
        </div>
    </header>