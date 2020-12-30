<?php

function child_theme_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );

//theme support
add_theme_support( 'menus' );
add_theme_support( 'custom-logo' );

//register menus
register_nav_menus(
    array(
        'top-menu' =>__('Top Menu', 'theme'),
        'footer-menu' =>__('Footer menu', 'theme'),
        'footer-social' =>__('Footer Social', 'theme'),
        'header-social' =>__('Header Social', 'theme')
        
    )
);



function load_files() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('stylecss', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/fonts/font-awesome-4.7.0/css/font-awesome.css');
    wp_enqueue_style('owlcurousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('themedefault', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css?family=Lato:100,300,400,700,900');

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', true );
    wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/owl.carousel.js', true );



    
}
add_action('wp_enqueue_scripts', 'load_files');

function carousel_script() {
    wp_enqueue_script( 'carouselnew', get_template_directory_uri() . '/js/carousel.js', true );

}
add_action('wp_enqueue_scripts', 'carousel_script');


function footer_widgets_init() {

    
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area' ),
        'before_widget' => '<div class="footer_content">',
        'after_widget' => '</div>',
        'before_title' => '<p>',
        'after_title' => '</p>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area' ),
        'before_widget' => '<div class="footer_content">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer_title">',
        'after_title' => '</h2>',
    ) );
 
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area' ),
        'before_widget' => '<div class="footer_content">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="footer_title">',
        'after_title' => '</h2>',
    ) );
 
    
         
}
 
// Register sidebars by running footer_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'footer_widgets_init' );


/**
 * Theme Option Page Example
 */
function pu_theme_menu()
{
  add_theme_page( 'Theme Option', 'Theme Options', 'manage_options', 'pu_theme_options.php', 'pu_theme_page');
}
add_action('admin_menu', 'pu_theme_menu');

/**
 * Register the settings to use on the theme options page
 */
add_action( 'admin_init', 'pu_register_settings' );
/**
 * Function to register the settings
 */
function pu_register_settings()
{
    // Register the settings with Validation callback
    register_setting( 'pu_theme_options', 'pu_theme_options', 'pu_validate_settings' );
    // Add settings section
    add_settings_section( 'pu_text_section', 'Text box Title', 'pu_display_section', 'pu_theme_options.php' );
    // Create textbox field
    $field_args = array(
      'type'      => 'text',
      'id'        => 'pu_textbox',
      'name'      => 'pu_textbox',
      'desc'      => 'Example of textbox description',
      'std'       => '',
      'label_for' => 'pu_textbox',
      'class'     => 'css_class'
    );
    add_settings_field( 'example_textbox', 'Example Textbox', 'pu_display_setting', 'pu_theme_options.php', 'pu_text_section', $field_args );
}











