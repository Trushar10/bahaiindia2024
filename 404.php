<?php

if (!defined('ABSPATH')) {
    exit; // For security
}

get_header();

?>

<main>
    <div class="box-container py-4 index-content page-content">
        <div class="not-found">
            <div class="spacer-5"></div>
            <h2>404</h2>
            <h3>Page not found</h3>
            <div class="spacer-1"></div>
            <a href="<?php echo home_url(); ?>">Home »</a>
            <div class="spacer-5"></div>
        </div>
    </div>
</main>

<?php get_footer(); ?>