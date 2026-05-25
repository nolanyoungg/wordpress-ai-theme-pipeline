<?php
/**
 * Comments template.
 *
 * Connects posts/pages to WordPress comments, comment pagination, and the
 * comment form. Assumes discussion settings control whether comments appear.
 *
 * @package Nolan_Showcase_Theme_X12
 */

if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2><?php echo esc_html( sprintf( _n( '%s comment', '%s comments', get_comments_number(), 'nolan-showcase-theme-x12' ), number_format_i18n( get_comments_number() ) ) ); ?></h2>
		<ol class="comment-list">
			<?php wp_list_comments( array( 'style' => 'ol', 'short_ping' => true ) ); ?>
		</ol>
		<?php the_comments_navigation(); ?>
	<?php endif; ?>
	<?php
	if ( ! comments_open() && get_comments_number() ) {
		echo '<p class="no-comments">' . esc_html__( 'Comments are closed.', 'nolan-showcase-theme-x12' ) . '</p>';
	}
	comment_form();
	?>
</section>
