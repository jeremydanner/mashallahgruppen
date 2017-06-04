<?php
declare(strict_types=1);

/*
*   Author @ https://HandelsMarketing.se
*
*   (c) Mashallahgruppen
*
*/
// Register plugin helpers.
require template_path('library/plate.php');
// Set theme defaults.
add_action('after_setup_theme', function () {
    // Show the admin bar.
    show_admin_bar(false);
    // Add post thumbnails support.
    add_theme_support('post-thumbnails');
    // Add support for post formats.
    //add_theme_support('post-formats', ['aside', 'audio', 'gallery', 'image', 'link', 'quote', 'video']);
    // Add title tag theme support.
    add_theme_support('title-tag');
    // Add HTML5 support.
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'widgets',
    ]);
    // Add primary WordPress menu.
    register_nav_menu('primary-menu', __('Primary Menu', 'wordplate'));
});
// Enqueue and register scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');
     wp_enqueue_style('wordplate', mix('styles/app.css'));
     wp_register_script('wordplate', mix('scripts/app.js'), '', '', true);
     wp_enqueue_script('wordplate');
});
// Set custom title.
add_filter('wp_title', function () {
    global $post;
    $name = get_bloginfo('name');
    $description = get_bloginfo('description');
    if (is_front_page() || is_home()) {
        if ($description) {
            return sprintf('%s - %s', $name, $description);
        }
        return $name;
    }
    if (is_category()) {
        return sprintf('%s - %s', trim(single_cat_title('', false)), $name);
    }
    return sprintf('%s - %s', trim($post->post_title), $name);
});
// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);
// Set custom excerpt more.
add_filter('excerpt_more', function () {
    return '...';
});
// Set custom excerpt length.
add_filter('excerpt_length', function () {
    return 101;
});
// Enable the option show in rest
add_filter( 'acf/rest_api/field_settings/show_in_rest', '__return_true' );
// Enable the option edit in rest
add_filter( 'acf/rest_api/field_settings/edit_in_rest', '__return_true' );
// Register custom post types.
require get_template_directory().'/post-types/education.php';
require get_template_directory().'/post-types/employee.php';
require get_template_directory().'/post-types/faq.php';
require get_template_directory().'/post-types/former-student.php';
// Register taxonomies.
require get_template_directory().'/taxonomies/field-of-education.php';
require get_template_directory().'/taxonomies/location.php';
require get_template_directory().'/taxonomies/faq-category.php';

// ChrisBorg V
// ----------------------------------------------------------------------------

// Add theme supported features.
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

// Enqueue styles and scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');
    wp_enqueue_style( 'costum', get_template_directory_uri() . '/css/costum.css',false,'','all');
    wp_enqueue_style( 'page', get_template_directory_uri() . '/css/page.css',false,'1.1','all');
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css',false,'1.1','all');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.1.1.min.js', '', '', true);
    wp_register_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', '', '', true);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', '', '', true);

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', '', '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('tether');
    wp_enqueue_script('bootstrap');
});
