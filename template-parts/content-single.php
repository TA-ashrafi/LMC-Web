<?php
/**
 * Template part for displaying single post content
 *
 * @package Lemon_Media_Company
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header" style="margin-bottom:25px;">
        <h1 class="entry-title" style="font-size:2.5rem; margin-bottom:15px;"><?php the_title(); ?></h1>
        <div class="post-meta">
            <?php
            lemon_media_posted_on();
            echo ' | ';
            lemon_media_posted_by();
            ?>
        </div>
    </header>

    <?php lemon_media_post_thumbnail(); ?>

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

    <footer class="entry-footer" style="margin-top:30px; padding-top:20px; border-top:1px solid var(--border-color); font-size:0.9rem; color:var(--text-muted);">
        <?php lemon_media_entry_footer(); ?>
    </footer>
</article>
