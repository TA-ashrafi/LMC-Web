<?php
/**
 * Archive Template
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
        <?php the_archive_title( '<h1>', '</h1>' ); ?>
        <?php the_archive_description( '<div class="archive-description" style="color:#d1d5db; margin-top:10px;">', '</div>' ); ?>
    </div>
</div>

<main id="primary" class="site-main">
    <div class="container">
        <div class="posts-layout">
            <div class="main-content">
                <?php if ( have_posts() ) : ?>
                    <div class="posts-grid" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap:30px;">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/content', get_post_type() );
                        endwhile;
                        ?>
                    </div>

                    <div style="margin-top:30px;">
                        <?php the_posts_pagination(); ?>
                    </div>
                <?php else : ?>
                    <p><?php esc_html_e( 'No posts found in this archive.', 'lemon-media' ); ?></p>
                <?php endif; ?>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php
get_footer();
