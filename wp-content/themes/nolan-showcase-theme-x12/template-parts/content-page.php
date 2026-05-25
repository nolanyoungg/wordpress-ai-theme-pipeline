<?php
/**
 * Page content template.
 *
 * Connects WordPress page content to the theme layout. Assumes editor content
 * may include styled blocks, headings, and forms from popular form plugins.
 *
 * @package Nolan_Showcase_Theme_X12
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry-page' ); ?>>
	<header class="page-header">
		<h1><?php the_title(); ?></h1>
	</header>
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nolan-showcase-theme-x12' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>
