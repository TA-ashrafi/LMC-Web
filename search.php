<?php
/**
 * Search Results Template
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
        <h1>
            <?php
            /* translators: %s: search query. */
            printf( esc_html__( 'Search Results for: %s', 'lemon-media' ), '<span>' . get_search_query() . '</span>' );
            ?>
        </h1>
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
                    <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'lemon-media' ); ?></p>
                    <div style="margin-top:20px; max-width:400px;">
                        <?php get_search_form(); ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php
get_footer();
