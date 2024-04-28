<?php

if (!defined('ABSPATH')) {
    exit; // For security
}

$unique_id = esc_attr(uniqid('search-form-'));

?>

<div class="search-container">
    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input class="search expandright br-5" id="<?php echo $unique_id; ?>" type="search" name="s" value="<?php the_search_query(); ?>" placeholder="<?php _e('Type to search...', 'boi'); ?>">
        <label class="button searchbutton" for="<?php echo $unique_id; ?>"><span class="mglass">&#9906;</span></label>
    </form>
</div>