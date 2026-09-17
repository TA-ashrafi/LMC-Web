<?php
/**
 * Footer Template
 *
 * @package Lemon_Media_Company
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Col 1: About -->
            <div class="footer-col">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title" style="color:#fff; display:inline-block; margin-bottom:15px;">
                    Lemon<span style="color:var(--primary-color);">Media</span>
                </a>
                <p style="margin-bottom: 20px;">
                    <?php echo esc_html( get_theme_mod( 'footer_about_text', __( 'Lemon Media Company is a full-service creative agency helping brands scale through strategic content, digital marketing, and design.', 'lemon-media' ) ) ); ?>
                </p>
            </div>

            <!-- Col 2: Quick Links -->
            <div class="footer-col">
                <h4><?php esc_html_e( 'Quick Links', 'lemon-media' ); ?></h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#work' ) ); ?>"><?php esc_html_e( 'Our Work', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#clients' ) ); ?>"><?php esc_html_e( 'Our Clients', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#story' ) ); ?>"><?php esc_html_e( 'Our Story', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#join-team' ) ); ?>"><?php esc_html_e( 'Join Our Team', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Contact Us', 'lemon-media' ); ?></a></li>
                </ul>
            </div>

            <!-- Col 3: Services -->
            <div class="footer-col">
                <h4><?php esc_html_e( 'Our Services', 'lemon-media' ); ?></h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url( home_url( '/#social-media' ) ); ?>"><?php esc_html_e( 'Social Media', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#content-creation' ) ); ?>"><?php esc_html_e( 'Content Creation', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#photography-videography' ) ); ?>"><?php esc_html_e( 'Photography & Video', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#performance-marketing' ) ); ?>"><?php esc_html_e( 'Performance Ads', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#influencer-marketing' ) ); ?>"><?php esc_html_e( 'Influencers', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#website-development' ) ); ?>"><?php esc_html_e( 'Web Development', 'lemon-media' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#brand-packaging-design' ) ); ?>"><?php esc_html_e( 'Branding & Packaging', 'lemon-media' ); ?></a></li>
                </ul>
            </div>

            <!-- Col 4: Contact Info / Widgets -->
            <div class="footer-col">
                <h4><?php esc_html_e( 'Get In Touch', 'lemon-media' ); ?></h4>
                <p><strong>Email:</strong> <?php echo esc_html( get_theme_mod( 'footer_email', 'contact@lemonmediaco.com' ) ); ?></p>
                <p style="margin-top:10px;"><strong>Phone:</strong> <?php echo esc_html( get_theme_mod( 'footer_phone', '+91 98765 43210' ) ); ?></p>

                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <div style="margin-top:20px;">
                        <?php dynamic_sidebar( 'footer-1' ); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="footer-bottom">
            <p><?php echo esc_html( get_theme_mod( 'footer_copyright', '© 2026 Lemon Media Company. All Rights Reserved.' ) ); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
