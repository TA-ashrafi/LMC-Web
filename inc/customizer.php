<?php
/**
 * Lemon Media Company Theme Customizer
 *
 * @package Lemon_Media_Company
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function lemon_media_customize_register( $wp_customize ) {

    // 1. Header Section
    $wp_customize->add_section( 'lemon_media_header_section', array(
        'title'    => __( 'Header Settings', 'lemon-media' ),
        'priority' => 20,
    ) );

    $wp_customize->add_setting( 'header_cta_btn_text', array(
        'default'           => __( 'Start a project', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'header_cta_btn_text', array(
        'label'    => __( 'Header CTA Button Text', 'lemon-media' ),
        'section'  => 'lemon_media_header_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'header_cta_btn_link', array(
        'default'           => '#contact',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'header_cta_btn_link', array(
        'label'    => __( 'Header CTA Button Link', 'lemon-media' ),
        'section'  => 'lemon_media_header_section',
        'type'     => 'url',
    ) );


    // 2. Hero Section
    $wp_customize->add_section( 'lemon_media_hero_section', array(
        'title'    => __( 'Hero Banner Settings', 'lemon-media' ),
        'priority' => 25,
    ) );

    $wp_customize->add_setting( 'hero_eyebrow', array(
        'default'           => __( 'Creative growth agency — Delhi · Mumbai', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_eyebrow', array(
        'label'    => __( 'Hero Eyebrow Text', 'lemon-media' ),
        'section'  => 'lemon_media_hero_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'hero_title', array(
        'default'           => __( 'We make brands impossible to ignore.', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_title', array(
        'label'    => __( 'Hero Heading', 'lemon-media' ),
        'section'  => 'lemon_media_hero_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'hero_subtitle', array(
        'default'           => __( 'A full-service studio for brands that want to be seen, chosen and remembered. Strategy, content, performance, branding and digital — all under one roof.', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'hero_subtitle', array(
        'label'    => __( 'Hero Subheading', 'lemon-media' ),
        'section'  => 'lemon_media_hero_section',
        'type'     => 'textarea',
    ) );

    $wp_customize->add_setting( 'hero_btn_1_text', array(
        'default'           => __( 'See the work', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_btn_1_text', array(
        'label'    => __( 'Primary Button Text', 'lemon-media' ),
        'section'  => 'lemon_media_hero_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'hero_btn_1_url', array(
        'default'           => '#work',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'hero_btn_1_url', array(
        'label'    => __( 'Primary Button Link', 'lemon-media' ),
        'section'  => 'lemon_media_hero_section',
        'type'     => 'url',
    ) );

    $wp_customize->add_setting( 'hero_btn_2_text', array(
        'default'           => __( 'Explore services', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_btn_2_text', array(
        'label'    => __( 'Secondary Button Text', 'lemon-media' ),
        'section'  => 'lemon_media_hero_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'hero_btn_2_url', array(
        'default'           => '#services',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'hero_btn_2_url', array(
        'label'    => __( 'Secondary Button Link', 'lemon-media' ),
        'section'  => 'lemon_media_hero_section',
        'type'     => 'url',
    ) );

    $wp_customize->add_setting( 'hero_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_image', array(
        'label'    => __( 'Hero Image', 'lemon-media' ),
        'section'  => 'lemon_media_hero_section',
    ) ) );


    // 3. Our Story / Studio Section
    $wp_customize->add_section( 'lemon_media_story_section', array(
        'title'    => __( 'Our Story / Studio Settings', 'lemon-media' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'story_subtitle', array(
        'default'           => __( 'The studio', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'story_subtitle', array(
        'label'    => __( 'Subtitle / Eyebrow', 'lemon-media' ),
        'section'  => 'lemon_media_story_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'story_title', array(
        'default'           => __( 'Close-knit by design. Big in ambition.', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'story_title', array(
        'label'    => __( 'Section Heading', 'lemon-media' ),
        'section'  => 'lemon_media_story_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'story_desc', array(
        'default'           => __( 'Strategy, design, media and production sit side by side in Delhi and Mumbai. Fewer layers mean sharper decisions, faster making and work that holds together from brief to broadcast.', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'story_desc', array(
        'label'    => __( 'Story Content Text', 'lemon-media' ),
        'section'  => 'lemon_media_story_section',
        'type'     => 'textarea',
    ) );


    // 4. Our Services Section (7 specified services)
    $wp_customize->add_section( 'lemon_media_services_section', array(
        'title'    => __( 'Services Settings', 'lemon-media' ),
        'priority' => 35,
    ) );

    $services_list = array(
        1 => array( 'title' => 'Our Social Media Services', 'desc' => 'Campaigns, films, stills & social storytelling' ),
        2 => array( 'title' => 'Content Creation', 'desc' => 'Captivating graphics, copywriting, reels, and video content' ),
        3 => array( 'title' => 'Photography & Videography', 'desc' => 'Professional studio photography and high-end video production' ),
        4 => array( 'title' => 'Performance Marketing', 'desc' => 'Paid media, CRO & data-driven conversion funnels' ),
        5 => array( 'title' => 'Influencer Marketing', 'desc' => 'Strategic creator partnerships and viral activations' ),
        6 => array( 'title' => 'Website Development', 'desc' => 'Fast, expressive, conversion-led sites' ),
        7 => array( 'title' => 'Brand And Packaging Design', 'desc' => 'Positioning, voice, visual systems & shelf presence' ),
    );

    foreach ( $services_list as $i => $service ) {
        $wp_customize->add_setting( "service_{$i}_title", array(
            'default'           => __( $service['title'], 'lemon-media' ),
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "service_{$i}_title", array(
            'label'    => sprintf( __( 'Service %d Title', 'lemon-media' ), $i ),
            'section'  => 'lemon_media_services_section',
            'type'     => 'text',
        ) );

        $wp_customize->add_setting( "service_{$i}_desc", array(
            'default'           => __( $service['desc'], 'lemon-media' ),
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( "service_{$i}_desc", array(
            'label'    => sprintf( __( 'Service %d Description', 'lemon-media' ), $i ),
            'section'  => 'lemon_media_services_section',
            'type'     => 'textarea',
        ) );
    }


    // 5. Our Clients Section
    $wp_customize->add_section( 'lemon_media_clients_section', array(
        'title'    => __( 'Our Clients Settings', 'lemon-media' ),
        'priority' => 40,
    ) );

    $wp_customize->add_setting( 'clients_title', array(
        'default'           => __( 'Trusted By Industry Leaders', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'clients_title', array(
        'label'    => __( 'Section Title', 'lemon-media' ),
        'section'  => 'lemon_media_clients_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'clients_list', array(
        'default'           => 'Apex Global, Nexa Tech, Urban Style, Bloom Organics, Vantage Media, Crest Commerce',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'clients_list', array(
        'label'       => __( 'Clients List (Comma Separated Names)', 'lemon-media' ),
        'section'     => 'lemon_media_clients_section',
        'type'        => 'text',
        'description' => __( 'Enter brand names separated by commas.', 'lemon-media' ),
    ) );


    // 6. Contact Us / Join Our Team Section
    $wp_customize->add_section( 'lemon_media_contact_section', array(
        'title'    => __( 'Contact & Careers Settings', 'lemon-media' ),
        'priority' => 45,
    ) );

    $wp_customize->add_setting( 'contact_title', array(
        'default'           => __( 'Let’s grow something bright.', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'contact_title', array(
        'label'    => __( 'Contact Heading', 'lemon-media' ),
        'section'  => 'lemon_media_contact_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'contact_desc', array(
        'default'           => __( 'Tell us where you want your brand to go. We’ll bring the strategy, creative fire and honest route to get there.', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'contact_desc', array(
        'label'    => __( 'Contact Description', 'lemon-media' ),
        'section'  => 'lemon_media_contact_section',
        'type'     => 'textarea',
    ) );

    $wp_customize->add_setting( 'contact_whatsapp_url', array(
        'default'           => 'https://wa.me/919711559909',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'contact_whatsapp_url', array(
        'label'    => __( 'WhatsApp Contact Link', 'lemon-media' ),
        'section'  => 'lemon_media_contact_section',
        'type'     => 'url',
    ) );


    // 7. Footer Settings
    $wp_customize->add_section( 'lemon_media_footer_section', array(
        'title'    => __( 'Footer Settings', 'lemon-media' ),
        'priority' => 50,
    ) );

    $wp_customize->add_setting( 'footer_about_text', array(
        'default'           => __( 'Full-service digital marketing and talent management agency.', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'footer_about_text', array(
        'label'    => __( 'Footer About Text', 'lemon-media' ),
        'section'  => 'lemon_media_footer_section',
        'type'     => 'textarea',
    ) );

    $wp_customize->add_setting( 'footer_email', array(
        'default'           => 'nayanika@lemonmediaco.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'footer_email', array(
        'label'    => __( 'Contact Email', 'lemon-media' ),
        'section'  => 'lemon_media_footer_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'footer_phone', array(
        'default'           => '+91 97115 59909',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'footer_phone', array(
        'label'    => __( 'Contact Phone', 'lemon-media' ),
        'section'  => 'lemon_media_footer_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'footer_copyright', array(
        'default'           => __( '© 2026 Lemon Media Company. All Rights Reserved.', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'footer_copyright', array(
        'label'    => __( 'Copyright Text', 'lemon-media' ),
        'section'  => 'lemon_media_footer_section',
        'type'     => 'text',
    ) );
}
add_action( 'customize_register', 'lemon_media_customize_register' );
