<?php
if (!function_exists('post_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     *
     * @since Twenty Fifteen 1.0
     */
    function post_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(400, 400, true);
    }
endif;
add_action('after_setup_theme', 'post_setup');
function my_style_enqueue_styles() {
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/general.css');
}
add_action('wp_enqueue_scripts', 'my_style_enqueue_styles');
