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

    // 1. Header CTA Section
    $wp_customize->add_section( 'lemon_media_header_section', array(
        'title'    => __( 'Header Settings', 'lemon-media' ),
        'priority' => 20,
    ) );

    $wp_customize->add_setting( 'header_cta_btn_text', array(
        'default'           => __( 'Talk To Our Team', 'lemon-media' ),
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

    $wp_customize->add_setting( 'hero_title', array(
        'default'           => __( 'Elevate Your Brand With Lemon Media', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'hero_title', array(
        'label'    => __( 'Hero Heading', 'lemon-media' ),
        'section'  => 'lemon_media_hero_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'hero_subtitle', array(
        'default'           => __( 'We craft data-driven social media strategies, high-converting performance campaigns, stunning photography, and cutting-edge web design.', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'hero_subtitle', array(
        'label'    => __( 'Hero Subheading', 'lemon-media' ),
        'section'  => 'lemon_media_hero_section',
        'type'     => 'textarea',
    ) );

    $wp_customize->add_setting( 'hero_btn_1_text', array(
        'default'           => __( 'Explore Our Work', 'lemon-media' ),
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
        'default'           => __( 'Our Services', 'lemon-media' ),
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


    // 3. Our Story Section
    $wp_customize->add_section( 'lemon_media_story_section', array(
        'title'    => __( 'Our Story / About Settings', 'lemon-media' ),
        'priority' => 30,
    ) );

    $wp_customize->add_setting( 'story_subtitle', array(
        'default'           => __( 'OUR STORY', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'story_subtitle', array(
        'label'    => __( 'Subtitle', 'lemon-media' ),
        'section'  => 'lemon_media_story_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'story_title', array(
        'default'           => __( 'We are a creative agency dedicated to scaling ambitious brands', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'story_title', array(
        'label'    => __( 'Section Heading', 'lemon-media' ),
        'section'  => 'lemon_media_story_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'story_desc', array(
        'default'           => __( 'Lemon Media Company was founded with a single mission: to bring fresh, creative, and measurable digital growth to modern businesses. From high-impact video content to precision influencer campaigns, we tell stories that turn viewers into lifelong customers.', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'story_desc', array(
        'label'    => __( 'Story Content Text', 'lemon-media' ),
        'section'  => 'lemon_media_story_section',
        'type'     => 'textarea',
    ) );

    $wp_customize->add_setting( 'story_stat_1_num', array( 'default' => '250+', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'story_stat_1_num', array( 'label' => __( 'Stat 1 Value', 'lemon-media' ), 'section' => 'lemon_media_story_section' ) );
    $wp_customize->add_setting( 'story_stat_1_lbl', array( 'default' => 'Projects Completed', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'story_stat_1_lbl', array( 'label' => __( 'Stat 1 Label', 'lemon-media' ), 'section' => 'lemon_media_story_section' ) );

    $wp_customize->add_setting( 'story_stat_2_num', array( 'default' => '50M+', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'story_stat_2_num', array( 'label' => __( 'Stat 2 Value', 'lemon-media' ), 'section' => 'lemon_media_story_section' ) );
    $wp_customize->add_setting( 'story_stat_2_lbl', array( 'default' => 'Organic Reach', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'story_stat_2_lbl', array( 'label' => __( 'Stat 2 Label', 'lemon-media' ), 'section' => 'lemon_media_story_section' ) );

    $wp_customize->add_setting( 'story_stat_3_num', array( 'default' => '98%', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'story_stat_3_num', array( 'label' => __( 'Stat 3 Value', 'lemon-media' ), 'section' => 'lemon_media_story_section' ) );
    $wp_customize->add_setting( 'story_stat_3_lbl', array( 'default' => 'Client Satisfaction', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'story_stat_3_lbl', array( 'label' => __( 'Stat 3 Label', 'lemon-media' ), 'section' => 'lemon_media_story_section' ) );


    // 4. Our Services Section (7 specified services)
    $wp_customize->add_section( 'lemon_media_services_section', array(
        'title'    => __( 'Services Settings', 'lemon-media' ),
        'priority' => 35,
    ) );

    $services_list = array(
        1 => array( 'title' => 'Our Social Media Services', 'desc' => 'End-to-end social media management, community engagement, and viral strategy.' ),
        2 => array( 'title' => 'Content Creation', 'desc' => 'Captivating graphics, copywriting, reels, and video storytelling designed to convert.' ),
        3 => array( 'title' => 'Photography & Videography', 'desc' => 'Professional studio photography and high-end video shoots for products & events.' ),
        4 => array( 'title' => 'Performance Marketing', 'desc' => 'Data-driven Meta Ads, Google Ads, and funnel optimization to maximize ROI.' ),
        5 => array( 'title' => 'Influencer Marketing', 'desc' => 'Strategic creator partnerships and viral brand campaigns that amplify reach.' ),
        6 => array( 'title' => 'Website Development', 'desc' => 'Custom, high-performing websites and digital platforms built for seamless UX.' ),
        7 => array( 'title' => 'Brand And Packaging Design', 'desc' => 'Memorable brand identities, logos, guidelines, and premium product packaging.' ),
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


    // 6. Footer & Contact Details
    $wp_customize->add_section( 'lemon_media_footer_section', array(
        'title'    => __( 'Footer & Contact Settings', 'lemon-media' ),
        'priority' => 50,
    ) );

    $wp_customize->add_setting( 'footer_about_text', array(
        'default'           => __( 'Lemon Media Company is a full-service creative agency helping brands scale through strategic content, digital marketing, and design.', 'lemon-media' ),
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'footer_about_text', array(
        'label'    => __( 'Footer About Text', 'lemon-media' ),
        'section'  => 'lemon_media_footer_section',
        'type'     => 'textarea',
    ) );

    $wp_customize->add_setting( 'footer_email', array(
        'default'           => 'contact@lemonmediaco.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'footer_email', array(
        'label'    => __( 'Contact Email', 'lemon-media' ),
        'section'  => 'lemon_media_footer_section',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'footer_phone', array(
        'default'           => '+91 98765 43210',
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
