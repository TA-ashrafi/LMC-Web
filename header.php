<?php
/**
 * Header Template
 *
 * @package Lemon_Media_Company
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$logo_height = get_theme_mod( 'logo_max_height', '45' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <style>
        .custom-logo, .site-logo img, .brand img {
            max-height: <?php echo esc_attr( $logo_height ); ?>px !important;
            width: auto;
            object-fit: contain;
        }
    </style>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="min-h-screen overflow-x-hidden bg-background text-foreground">
    <header class="site-header">
        <div class="shell nav-row">
            <!-- Brand Logo -->
            <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Lemon Media home', 'lemon-media' ); ?>">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <span class="lemon-mark" aria-hidden="true"><span></span></span>
                    <span>Lemon <em>Media</em></span>
                <?php endif; ?>
            </a>

            <!-- Desktop Navigation -->
            <nav class="desktop-nav" aria-label="<?php esc_attr_e( 'Main navigation', 'lemon-media' ); ?>">
                <?php
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container'      => false,
                            'menu_class'     => 'nav-menu-list',
                            'fallback_cb'    => false,
                        )
                    );
                } else {
                    $our_work_page    = get_page_by_path( 'our-work' );
                    $our_clients_page = get_page_by_path( 'our-clients' );
                    $our_story_page   = get_page_by_path( 'our-story' );
                    $our_services_page= get_page_by_path( 'our-services' );
                    $join_team_page   = get_page_by_path( 'join-our-team' );
                    $contact_page     = get_page_by_path( 'contact-us' );

                    $work_url    = $our_work_page ? get_permalink( $our_work_page->ID ) : home_url( '/#work' );
                    $clients_url = $our_clients_page ? get_permalink( $our_clients_page->ID ) : home_url( '/#clients' );
                    $story_url   = $our_story_page ? get_permalink( $our_story_page->ID ) : home_url( '/#story' );
                    $services_url= $our_services_page ? get_permalink( $our_services_page->ID ) : home_url( '/#services' );
                    $join_url    = $join_team_page ? get_permalink( $join_team_page->ID ) : home_url( '/#join-team' );
                    $contact_url = $contact_page ? get_permalink( $contact_page->ID ) : home_url( '/#contact' );
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'lemon-media' ); ?></a>
                    <a href="<?php echo esc_url( $work_url ); ?>"><?php esc_html_e( 'Our Work', 'lemon-media' ); ?></a>
                    <a href="<?php echo esc_url( $clients_url ); ?>"><?php esc_html_e( 'Our Clients', 'lemon-media' ); ?></a>
                    <a href="<?php echo esc_url( $story_url ); ?>"><?php esc_html_e( 'Our Story', 'lemon-media' ); ?></a>
                    <a href="<?php echo esc_url( $services_url ); ?>"><?php esc_html_e( 'Our Services', 'lemon-media' ); ?></a>
                    <a href="<?php echo esc_url( $join_url ); ?>"><?php esc_html_e( 'Join Our Team', 'lemon-media' ); ?></a>
                    <a href="<?php echo esc_url( $contact_url ); ?>"><?php esc_html_e( 'Contact Us', 'lemon-media' ); ?></a>
                    <?php
                }
                ?>
            </nav>

            <!-- Header CTA & Mobile Button -->
            <?php
            $btn_text = get_theme_mod( 'header_cta_btn_text', __( 'Start a project', 'lemon-media' ) );
            $btn_link = get_theme_mod( 'header_cta_btn_link', '#contact' );
            ?>
            <?php if ( ! empty( $btn_text ) ) : ?>
                <a class="dark-button desktop-cta" href="<?php echo esc_url( $btn_link ); ?>">
                    <?php echo esc_html( $btn_text ); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right" aria-hidden="true"><path d="M7 7h10v10"></path><path d="M7 17 17 7"></path></svg>
                </a>
            <?php endif; ?>

            <button class="menu-button" type="button" aria-label="<?php esc_attr_e( 'Open menu', 'lemon-media' ); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu" aria-hidden="true"><path d="M4 5h16"></path><path d="M4 12h16"></path><path d="M4 19h16"></path></svg>
            </button>
        </div>
    </header>
