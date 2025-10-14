<?php
/**
 * Portfolio Theme Functions
 */

// Enqueue styles and scripts
function portfolio_theme_scripts() {
    wp_enqueue_style('portfolio-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue custom JavaScript if needed
    wp_enqueue_script('portfolio-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'portfolio_theme_scripts');

// Theme setup
function portfolio_theme_setup() {
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'portfolio-theme'),
    ));
    
    // Add custom image sizes
    add_image_size('portfolio-thumb', 400, 300, true);
    add_image_size('portfolio-large', 800, 600, true);
}
add_action('after_setup_theme', 'portfolio_theme_setup');

// Register custom post type for portfolio
function create_portfolio_post_type() {
    $labels = array(
        'name' => 'Portfolio',
        'singular_name' => 'Portfolio Item',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Portfolio Item',
        'edit_item' => 'Edit Portfolio Item',
        'new_item' => 'New Portfolio Item',
        'view_item' => 'View Portfolio Item',
        'search_items' => 'Search Portfolio',
        'not_found' => 'No portfolio items found',
        'not_found_in_trash' => 'No portfolio items found in trash',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'tags'),
    );

    register_post_type('portfolio', $args);
}
add_action('init', 'create_portfolio_post_type');

// Add custom fields for portfolio items
function add_portfolio_meta_boxes() {
    add_meta_box(
        'portfolio_details',
        'Portfolio Details',
        'portfolio_details_callback',
        'portfolio',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_portfolio_meta_boxes');

function portfolio_details_callback($post) {
    wp_nonce_field('portfolio_details_nonce', 'portfolio_details_nonce');
    
    $project_url = get_post_meta($post->ID, '_project_url', true);
    $github_url = get_post_meta($post->ID, '_github_url', true);
    $technologies = get_post_meta($post->ID, '_technologies', true);
    
    echo '<table class="form-table">';
    echo '<tr>';
    echo '<th><label for="project_url">Project URL</label></th>';
    echo '<td><input type="url" id="project_url" name="project_url" value="' . esc_attr($project_url) . '" size="50" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="github_url">GitHub URL</label></th>';
    echo '<td><input type="url" id="github_url" name="github_url" value="' . esc_attr($github_url) . '" size="50" /></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<th><label for="technologies">Technologies Used</label></th>';
    echo '<td><input type="text" id="technologies" name="technologies" value="' . esc_attr($technologies) . '" size="50" placeholder="e.g., React, Node.js, MongoDB" /></td>';
    echo '</tr>';
    echo '</table>';
}

function save_portfolio_details($post_id) {
    if (!isset($_POST['portfolio_details_nonce']) || !wp_verify_nonce($_POST['portfolio_details_nonce'], 'portfolio_details_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['project_url'])) {
        update_post_meta($post_id, '_project_url', sanitize_url($_POST['project_url']));
    }
    
    if (isset($_POST['github_url'])) {
        update_post_meta($post_id, '_github_url', sanitize_url($_POST['github_url']));
    }
    
    if (isset($_POST['technologies'])) {
        update_post_meta($post_id, '_technologies', sanitize_text_field($_POST['technologies']));
    }
}
add_action('save_post', 'save_portfolio_details');

// Customize excerpt length
function portfolio_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'portfolio_excerpt_length');

// Add custom CSS for admin
function portfolio_admin_styles() {
    echo '<style>
        .portfolio-details th { width: 150px; }
        .portfolio-details input[type="url"], 
        .portfolio-details input[type="text"] { width: 100%; }
    </style>';
}
add_action('admin_head', 'portfolio_admin_styles');

// Add theme customizer options
function portfolio_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => 'Hero Section',
        'priority' => 30,
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default' => 'Welcome to My Portfolio',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label' => 'Hero Title',
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => 'I\'m a passionate developer creating amazing digital experiences',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label' => 'Hero Subtitle',
        'section' => 'hero_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'portfolio_customize_register');
?>
