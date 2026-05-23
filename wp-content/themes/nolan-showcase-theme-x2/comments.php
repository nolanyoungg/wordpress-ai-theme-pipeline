<?php
/**
 * Comments template.
 *
 * @package Nolan_Showcase_Theme_X2
 */

if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comment_count = get_comments_number();
			printf(
				/* translators: %s: Comment count. */
				esc_html( _n( '%s comment', '%s comments', $comment_count, 'nolan-showcase-theme-x2' ) ),
				esc_html( number_format_i18n( $comment_count ) )
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

	<?php
	comment_form(
		array(
			'title_reply'          => esc_html__( 'Leave a reply', 'nolan-showcase-theme-x2' ),
			'title_reply_before'   => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'    => '</h2>',
			'comment_notes_before' => '',
			'comment_notes_after'  => '',
		)
	);
	?>
</section>

