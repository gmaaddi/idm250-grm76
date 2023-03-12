<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * This function is called when the theme is activated. This is where we
 * will add all of our scripts and styles.
 * @return void
 */
function theme_scripts_and_styles()
{
    // Load CSS Reset
    wp_enqueue_style(
        'css-reset',
        'https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css',
        [],
        null
    );
    // Load in Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap',
        [],
        null
    );

    // Load in local CSS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_style/}
    wp_enqueue_style(
        'idm250-styles', // name of the stylesheet
        get_template_directory_uri() . '/dist/styles/main.css', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/styles/main.css
        [], // dependencies
        filemtime(get_template_directory() . '/dist/styles/main.css'), // version number
        'all' // media
    );

    // Load in local JS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_script/}
    wp_enqueue_script(
        'idm250-scripts', // name of the script
        get_template_directory_uri() . '/dist/scripts/main.js', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/scripts/main.js
        [], // dependencies
        filemtime(get_template_directory() . '/dist/scripts/main.js'), // version number
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

// Add support for post thumbnails in our theme
add_theme_support('post-thumbnails');

// Add support for pages to have excerpts
add_post_type_support('page', 'excerpt');

// Register Menu Locations
function register_theme_menus()
{
    register_nav_menus([
        'primary-menu' => __('Primary Menu'),
        'footer-menu' => __('Footer Menu')
    ]);
}

add_action('init', 'register_theme_menus');


// Sidebar registering
function register_theme_sidebars()
{
    register_sidebar([
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
    ]);
}
add_action('widgets_init', 'register_theme_sidebars');

// For Archive Page
function remove_archive_title_prefix($title)
{
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    }
    return $title;
}
add_filter('get_the_archive_title', 'remove_archive_title_prefix');

// Advanced Custom Fields
function my_acf_json_save_point($path)
{
    // update path
    $path = get_stylesheet_directory() . '/acf';

    // return
    return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');


function my_acf_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    
    // append path
    $paths[] = get_stylesheet_directory() . '/acf';
    
    
    // return
    return $paths;
    
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

// ACF 404
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title' => '404 Page Content',
      'menu_title' => '404 Page Content',
      'menu_slug' => '404-page-content',
      'capability' => 'edit_posts',
      'redirect' => false
    ));
}

function custom_404_template($template) {
    global $wp_query;
    if( $wp_query->is_404 ) {
      $template = get_template_directory() . '/404.php';
    }
    return $template;
  }
  add_filter( '404_template', 'custom_404_template' );