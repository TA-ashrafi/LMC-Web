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

    <footer class="footer">
        <div class="shell footer-grid">
            <div>
                <a class="brand footer-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <span class="lemon-mark" aria-hidden="true"><span></span></span>
                    <span>Lemon <em>Media</em></span>
                </a>
                <p><?php echo esc_html( get_theme_mod( 'footer_about_text', __( 'Full-service digital marketing and talent management agency.', 'lemon-media' ) ) ); ?></p>
            </div>

            <div>
                <p class="footer-label"><?php esc_html_e( 'Explore', 'lemon-media' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'lemon-media' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/#work' ) ); ?>"><?php esc_html_e( 'Our Work', 'lemon-media' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/#clients' ) ); ?>"><?php esc_html_e( 'Our Clients', 'lemon-media' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/#story' ) ); ?>"><?php esc_html_e( 'Our Story', 'lemon-media' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/#services' ) ); ?>"><?php esc_html_e( 'Our Services', 'lemon-media' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/#join-team' ) ); ?>"><?php esc_html_e( 'Join Our Team', 'lemon-media' ); ?></a>
                <a href="<?php echo esc_url( home_url( '/#contact' ) ); ?>"><?php esc_html_e( 'Contact Us', 'lemon-media' ); ?></a>
            </div>

            <div>
                <p class="footer-label"><?php esc_html_e( 'Connect', 'lemon-media' ); ?></p>
                <a href="https://www.instagram.com/lemonmediacompany" target="_blank" rel="noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram" aria-hidden="true"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg> Instagram
                </a>
                <a href="https://www.linkedin.com/company/lemon-media-company/" target="_blank" rel="noreferrer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin" aria-hidden="true"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect width="4" height="12" x="2" y="9"></rect><circle cx="4" cy="4" r="2"></circle></svg> LinkedIn
                </a>
                <a href="tel:<?php echo esc_attr( get_theme_mod( 'footer_phone', '+91 97115 59909' ) ); ?>">
                    <?php echo esc_html( get_theme_mod( 'footer_phone', '+91 97115 59909' ) ); ?>
                </a>
            </div>
        </div>

        <div class="shell footer-bottom">
            <span><?php echo esc_html( get_theme_mod( 'footer_copyright', '© 2026 Lemon Media Company' ) ); ?></span>
            <span><?php esc_html_e( 'Delhi · Mumbai · Everywhere', 'lemon-media' ); ?></span>
        </div>
    </footer>
</div><!-- .min-h-screen -->

<?php wp_footer(); ?>
</body>
</html>
