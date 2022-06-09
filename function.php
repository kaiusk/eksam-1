<?php
function my_style_enqueue_styles() {
    wp_enqueue_style( 'general', get_template_directory_uri() . '/assets/css/general.css' );
}

add_action('wp_enqueue_scripts', 'my_style_enqueue_styles');

// Changing excerpt length
/*function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');*/

function register_my_links_menu() {
    register_nav_menu('links-menu',__( 'Links Menu' ));
}
add_action( 'init', 'register_my_links_menu' );

/*function register_my_extra_menu() {
    register_nav_menu('extra-menu',__( 'Extra Menu' ));
}
add_action( 'init', 'register_my_extra_menu' );*/
?>