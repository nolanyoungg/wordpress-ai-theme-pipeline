<?php
/**
 * Comments template.
 *
 * @package Nolan_Showcase_Theme_09
 */

if ( post_password_required() ) {
    return;
}
?>

<section id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php esc_html_e( 'Comments', 'nolan-showcase-theme-09' ); ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style'      => 'ol',
                    'short_ping' => true,
                )
            );
            ?>
        </ol>

        <?php the_comments_navigation(); ?>
    <?php endif; ?>

    <?php
    if ( ! comments_open() && get_comments_number() ) :
        ?>
        <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'nolan-showcase-theme-09' ); ?></p>
        <?php
    endif;

    comment_form();
    ?>
</section>
