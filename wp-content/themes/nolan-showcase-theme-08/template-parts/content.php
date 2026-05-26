<?php
/**
 * Default content template part.
 *
 * @package Nolan_Showcase_Theme_08
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'content-card' ); ?>>
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
        endif;
        ?>
    </header>

    <div class="entry-content">
        <?php
        if ( is_singular() ) {
            the_content();
        } else {
            the_excerpt();
        }
        ?>
    </div>
</article>
