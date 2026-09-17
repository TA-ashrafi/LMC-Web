<?php
/**
 * Comments Template
 *
 * @package Lemon_Media_Company
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area" style="margin-top:50px; padding-top:30px; border-top:1px solid var(--border-color);">

    <?php if ( have_comments() ) : ?>
        <h3 class="comments-title" style="margin-bottom:20px;">
            <?php
            $lemon_media_comment_count = get_comments_number();
            if ( '1' === $lemon_media_comment_count ) {
                printf(
                    /* translators: 1: title. */
                    esc_html__( 'One comment on &ldquo;%1$s&rdquo;', 'lemon-media' ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            } else {
                printf(
                    /* translators: 1: comment count number, 2: title. */
                    esc_html( _nx( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $lemon_media_comment_count, 'comments title', 'lemon-media' ) ),
                    number_format_i18n( $lemon_media_comment_count ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            }
            ?>
        </h3>

        <ol class="comment-list" style="list-style:none; margin-bottom:30px;">
            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                )
            );
            ?>
        </ol>

        <?php
        the_comments_navigation();

        if ( ! comments_open() ) :
            ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'lemon-media' ); ?></p>
            <?php
        endif;

    endif;

    comment_form();
    ?>

</div>
