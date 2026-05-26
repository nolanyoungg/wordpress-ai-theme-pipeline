<?php
/**
 * Page content template part.
 *
 * @package Nolan_Showcase_Theme_08
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'page-content-card' ); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>
