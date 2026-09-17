<?php
/**
 * Template part for displaying posts in a loop
 *
 * @package Lemon_Media_Company
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
    <?php lemon_media_post_thumbnail(); ?>

    <div class="post-card-body">
        <div class="post-meta">
            <?php
            lemon_media_posted_on();
            echo ' | ';
            lemon_media_posted_by();
            ?>
        </div>

        <h2 class="entry-title" style="font-size:1.5rem; margin-bottom:12px;">
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>

        <div class="entry-summary" style="color:var(--text-muted); font-size:0.95rem; margin-bottom:15px;">
            <?php the_excerpt(); ?>
        </div>

        <a href="<?php the_permalink(); ?>" class="btn-talk" style="padding: 8px 18px; font-size: 0.85rem;">
            <?php esc_html_e( 'Read More →', 'lemon-media' ); ?>
        </a>
    </div>
</article>
