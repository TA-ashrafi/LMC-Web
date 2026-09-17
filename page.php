<?php
/**
 * Static Page Template
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
        <h1><?php the_title(); ?></h1>
    </div>
</div>

<main id="primary" class="site-main">
    <div class="container">
        <div class="posts-layout no-sidebar">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail" style="margin-bottom:25px;">
                            <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%; border-radius:12px;' ) ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lemon-media' ),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div>
                </article>

                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
