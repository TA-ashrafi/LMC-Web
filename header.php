<?php
/**
 * Header Template
 *
 * @package Lemon_Media_Company
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="container">
        <!-- Site Branding / Logo -->
        <div class="site-branding">
            <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-title">
                    Lemon<span>Media</span>
                </a>
            <?php endif; ?>
        </div>

        <!-- Main Navigation -->
        <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'lemon-media' ); ?>">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'nav-menu',
                        'container'      => false,
                    )
                );
            } else {
                // Fallback Menu with exact requested hierarchy
                ?>
                <ul class="nav-menu">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#work' ) ); ?>"><?php esc_html_e( 'Our Work', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#clients' ) ); ?>"><?php esc_html_e( 'Our Clients', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#story' ) ); ?>"><?php esc_html_e( 'Our Story', 'lemon-media' ); ?></a></li>
                    <li class="menu-item-has-children has-dropdown">
                        <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Our Services', 'lemon-media' ); ?></a>
                        <ul class="sub-menu dropdown">
                            <li><a href="<?php echo esc_url( home_url( '/#social-media' ) ); ?>"><?php esc_html_e( 'Our Social Media Services', 'lemon-media' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/#content-creation' ) ); ?>"><?php esc_html_e( 'Content Creation', 'lemon-media' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/#photography-videography' ) ); ?>"><?php esc_html_e( 'Photography & Videography', 'lemon-media' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/#performance-marketing' ) ); ?>"><?php esc_html_e( 'Performance Marketing', 'lemon-media' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/#influencer-marketing' ) ); ?>"><?php esc_html_e( 'Influencer Marketing', 'lemon-media' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/#website-development' ) ); ?>"><?php esc_html_e( 'Website Development', 'lemon-media' ); ?></a></li>
                            <li><a href="<?php echo esc_url( home_url( '/#brand-packaging-design' ) ); ?>"><?php esc_html_e( 'Brand And Packaging Design', 'lemon-media' ); ?></a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url( home_url( '/#join-team' ) ); ?>"><?php esc_html_e( 'Join Our Team', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Contact Us', 'lemon-media' ); ?></a></li>
                </ul>
                <?php
            }
            ?>
        </nav>

        <!-- Header CTA Actions -->
        <div class="header-actions">
            <?php
            $btn_text = get_theme_mod( 'header_cta_btn_text', __( 'Talk To Our Team', 'lemon-media' ) );
            $btn_link = get_theme_mod( 'header_cta_btn_link', '#contact' );
            if ( ! empty( $btn_text ) ) :
                ?>
                <a href="<?php echo esc_url( $btn_link ); ?>" class="btn-talk"><?php echo esc_html( $btn_text ); ?></a>
            <?php endif; ?>

            <button class="mobile-toggle" aria-label="<?php esc_attr_e( 'Toggle Menu', 'lemon-media' ); ?>">
                ☰
            </button>
        </div>
    </div>
</header>
