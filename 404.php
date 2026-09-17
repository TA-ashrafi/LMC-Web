<?php
/**
 * 404 Error Page Template
 *
 * @package Lemon_Media_Company
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<div class="page-header-banner">
    <div class="container">
        <h1 style="font-size: 5rem; color: var(--primary-color);">404</h1>
        <h2><?php esc_html_e( 'Oops! That page can’t be found.', 'lemon-media' ); ?></h2>
    </div>
</div>

<main id="primary" class="site-main">
    <div class="container" style="text-align:center; max-width:600px;">
        <p style="font-size:1.1rem; color:var(--text-muted); margin-bottom:30px;">
            <?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search or navigate back home?', 'lemon-media' ); ?>
        </p>

        <div style="margin-bottom:30px;">
            <?php get_search_form(); ?>
        </div>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">
            <?php esc_html_e( 'Back To Homepage', 'lemon-media' ); ?>
        </a>
    </div>
</main>

<?php
get_footer();
