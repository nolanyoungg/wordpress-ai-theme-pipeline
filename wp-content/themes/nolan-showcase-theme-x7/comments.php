<?php
/**
 * Comments template.
 *
 * @package Nolan_Showcase_Theme_X7
 */

if ( post_password_required() ) {
	return;
}
?>

<section id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title h4">
			<?php
			echo esc_html(
				sprintf(
					/* translators: %d: comment count. */
					_n( '%d Comment', '%d Comments', get_comments_number(), 'nolan-showcase-theme-x7' ),
					(int) get_comments_number()
				)
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
	if ( ! comments_open() && get_comments_number() ) :
		?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'nolan-showcase-theme-x7' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>
</section>

