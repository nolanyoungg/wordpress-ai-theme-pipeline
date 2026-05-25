<?php
/**
 * Purpose: Comments display and response form.
 * WordPress role: Loaded by comments_template() on posts.
 * Related files: single.php, assets/css/theme.css.
 * Important behavior: Handles protected posts and paginated comment navigation.
 *
 * @package Nolan_Showcase_Theme_X13
 */

if ( post_password_required() ) {
	return;
}
?>
<section id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2><?php printf( esc_html( _nx( 'One response', '%1$s responses', get_comments_number(), 'comments title', 'nolan-showcase-theme-x13' ) ), esc_html( number_format_i18n( get_comments_number() ) ) ); ?></h2>
		<ol class="comment-list"><?php wp_list_comments( array( 'style' => 'ol', 'short_ping' => true ) ); ?></ol>
		<?php the_comments_navigation(); ?>
	<?php endif; ?>
	<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'nolan-showcase-theme-x13' ); ?></p>
	<?php endif; ?>
	<?php comment_form(); ?>
</section>
