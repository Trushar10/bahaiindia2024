<?php

if (!defined('ABSPATH')) {
    exit; // For security
}

?>

<footer>
    <div class="box-container">
        <div class="d-flex">
            <div class="footer-identity">
                <?php

                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }

                ?>
                <a href="/">
                    <h2><?php echo get_bloginfo('name'); ?></h2>
                </a>
            </div>
            <div class="d-flex f-social">
                <?php

                wp_nav_menu([
                    'theme_location' => 'footer-menu',
                    'container' => false,
                    'menu_class' => 'footer-menu',
                    'depth' => 1,
                ]);

                ?>
                <div class="social-icon">
                    <a href="https://www.facebook.com/bahaisofindia"><img
                            src="https://www.bahai.in/wp-content/uploads/2023/11/square-facebook.svg" alt=""></a>
                    <a href="https://twitter.com/BahaiOPAIndia"><img
                            src="https://www.bahai.in/wp-content/uploads/2023/11/square-x-twitter.svg" alt=""></a>
                    <a href="https://www.instagram.com/bahaiopaindia/"><img
                            src="https://www.bahai.in/wp-content/uploads/2023/11/square-instagram.svg" alt=""></a>
                    <a href="https://www.linkedin.com/in/bah%C3%A1%E2%80%99%C3%AD-opa-india-9930b0226/"><img
                            src="https://www.bahai.in/wp-content/uploads/2024/04/icons8-linkedin-fin.svg"
                            alt=""></a>
                    <a href="https://www.youtube.com/channel/UCjjiUgw82OyZf8jx-e1c15Q"><img
                            src="https://www.bahai.in/wp-content/uploads/2023/11/square-youtube.svg" alt=""></a>
                    <a href="mailto:info@ibnc.in"><img
                            src="https://www.bahai.in/wp-content/uploads/2023/11/square-envelope-solid.svg"
                            alt=""></a>
                </div>
            </div>
        </div>
        <div class="spacer-2"></div>
        <div class="copyright">
            <h5>&copy; <?php echo date('Y'); ?> | National Spiritual Assembly of the Bahá’ís of India. All Rights
                Reserved.</h5>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>