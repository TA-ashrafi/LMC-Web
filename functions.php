<?php
/**
 * Lemon Media Company Theme Functions and Definitions
 *
 * @package Lemon_Media_Company
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

if ( ! function_exists( 'lemon_media_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function lemon_media_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // Custom Logo support
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 80,
                'width'       => 240,
                'flex-height' => true,
                'flex-width'  => true,
            )
        );

        // Register Primary Nav Menu
        register_nav_menus(
            array(
                'primary' => __( 'Primary Menu', 'lemon-media' ),
                'footer'  => __( 'Footer Menu', 'lemon-media' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif;
add_action( 'after_setup_theme', 'lemon_media_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function lemon_media_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'lemon_media_content_width', 1200 );
}
add_action( 'after_setup_theme', 'lemon_media_content_width', 0 );

/**
 * Register widget area.
 */
function lemon_media_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Sidebar', 'lemon-media' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar.', 'lemon-media' ),
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => __( 'Footer Widget Area', 'lemon-media' ),
            'id'            => 'footer-1',
            'description'   => __( 'Add widgets here to appear in your footer.', 'lemon-media' ),
            'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="footer-widget-title">',
            'after_title'   => '</h4>',
        )
    );
}
add_action( 'widgets_init', 'lemon_media_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lemon_media_scripts() {
    // Google Fonts - Outfit & Inter
    wp_enqueue_style( 'lemon-media-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700;800&display=swap', array(), null );

    // Core stylesheet
    wp_enqueue_style( 'lemon-media-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Main JavaScript
    if ( file_exists( get_template_directory() . '/assets/js/theme.js' ) ) {
        wp_enqueue_script( 'lemon-media-js', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true );
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'lemon_media_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
