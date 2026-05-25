<?php
/**
 * Comments template.
 *
 * Purpose:
 * - Displays comments list, navigation, and comment form for singular content.
 *
 * @package Nolan_Showcase_Theme_X11
 */

if ( post_password_required() ) {
	return;
}
?>

<section class="comments" id="comments">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments__title">
			<?php
			printf(
				/* translators: 1: comment count, 2: title. */
				esc_html( _nx( '%1$s comment on “%2$s”', '%1$s comments on “%2$s”', get_comments_number(), 'comments title', 'nolan-showcase-theme-x11' ) ),
				esc_html( number_format_i18n( get_comments_number() ) ),
				esc_html( get_the_title() )
			);
			?>
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

	<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="comments__closed"><?php esc_html_e( 'Comments are closed.', 'nolan-showcase-theme-x11' ); ?></p>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'title_reply'          => __( 'Leave a comment', 'nolan-showcase-theme-x11' ),
			'class_submit'         => 'btn btn-primary btn-smball',
			'comment_notes_before' => '<p class="form-hint">' . esc_html__( 'Your email is kept private. Fields marked * are required.', 'nolan-showcase-theme-x11' ) . '</p>',
		)
	);
	?>
</section>
