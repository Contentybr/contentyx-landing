<?php
/**
 * Contentyx Landing Page Theme Functions
 *
 * @package Contentyx
 * @since 2.0.0
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function contentyx_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'contentyx'),
        'footer'  => __('Footer Menu', 'contentyx'),
    ));
}
add_action('after_setup_theme', 'contentyx_setup');

/**
 * Enqueue Scripts and Styles
 */
function contentyx_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'contentyx-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'contentyx-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Custom CSS
    wp_enqueue_style(
        'contentyx-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        array('contentyx-style'),
        wp_get_theme()->get('Version')
    );

    // Main JavaScript
    wp_enqueue_script(
        'contentyx-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Pass data to JavaScript
    wp_localize_script('contentyx-main', 'contentyx_data', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('contentyx_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'contentyx_scripts');

/**
 * Register Widget Areas
 */
function contentyx_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Column 1', 'contentyx'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in footer column 1.', 'contentyx'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 2', 'contentyx'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here to appear in footer column 2.', 'contentyx'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 3', 'contentyx'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here to appear in footer column 3.', 'contentyx'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'contentyx_widgets_init');

/**
 * Customizer Settings
 */
function contentyx_customize_register($wp_customize) {
    // Add Contentyx Settings Section
    $wp_customize->add_section('contentyx_settings', array(
        'title'    => __('Contentyx Settings', 'contentyx'),
        'priority' => 30,
    ));

    // CTA Button Text
    $wp_customize->add_setting('contentyx_cta_text', array(
        'default'           => 'Começar Teste Gratuito',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contentyx_cta_text', array(
        'label'   => __('CTA Button Text', 'contentyx'),
        'section' => 'contentyx_settings',
        'type'    => 'text',
    ));

    // CTA Button URL
    $wp_customize->add_setting('contentyx_cta_url', array(
        'default'           => '#pricing',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('contentyx_cta_url', array(
        'label'   => __('CTA Button URL', 'contentyx'),
        'section' => 'contentyx_settings',
        'type'    => 'url',
    ));

    // Email for Form Submissions
    $wp_customize->add_setting('contentyx_form_email', array(
        'default'           => get_option('admin_email'),
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('contentyx_form_email', array(
        'label'       => __('Form Submission Email', 'contentyx'),
        'description' => __('Email address to receive form submissions', 'contentyx'),
        'section'     => 'contentyx_settings',
        'type'        => 'email',
    ));
}
add_action('customize_register', 'contentyx_customize_register');

/**
 * Handle Form Submissions via AJAX
 */
function contentyx_handle_form_submission() {
    // Verify nonce
    check_ajax_referer('contentyx_nonce', 'nonce');

    // Get and sanitize email
    $email = sanitize_email($_POST['email']);

    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Invalid email address'));
    }

    // Get recipient email from customizer
    $to = get_theme_mod('contentyx_form_email', get_option('admin_email'));

    // Email subject and message
    $subject = 'New Trial Signup - Contentyx';
    $message = "New trial signup request:\n\nEmail: {$email}\n\nDate: " . date('Y-m-d H:i:s');

    // Send email
    $sent = wp_mail($to, $subject, $message);

    if ($sent) {
        wp_send_json_success(array('message' => 'Thank you! Check your email.'));
    } else {
        wp_send_json_error(array('message' => 'Something went wrong. Please try again.'));
    }
}
add_action('wp_ajax_contentyx_submit_form', 'contentyx_handle_form_submission');
add_action('wp_ajax_nopriv_contentyx_submit_form', 'contentyx_handle_form_submission');

/**
 * Add custom body classes
 */
function contentyx_body_classes($classes) {
    if (is_front_page()) {
        $classes[] = 'landing-page';
    }
    return $classes;
}
add_filter('body_class', 'contentyx_body_classes');

/**
 * Remove unnecessary WordPress features for landing page
 */
function contentyx_remove_unnecessary_features() {
    // Remove emoji scripts
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    // Remove WordPress generator meta tag
    remove_action('wp_head', 'wp_generator');

    // Remove WLW manifest link
    remove_action('wp_head', 'wlwmanifest_link');

    // Remove RSD link
    remove_action('wp_head', 'rsd_link');

    // Remove shortlink
    remove_action('wp_head', 'wp_shortlink_wp_head');
}
add_action('init', 'contentyx_remove_unnecessary_features');

/**
 * Optimize WordPress for performance
 */
function contentyx_optimize_performance() {
    // Disable embeds
    add_filter('embed_oembed_discover', '__return_false');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_oembed_add_host_js');
}
add_action('init', 'contentyx_optimize_performance');
