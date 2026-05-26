<?php
/**
 * Empty content template part.
 *
 * @package Nolan_Showcase_Theme_09
 */
?>

<section class="no-results not-found">
    <header class="entry-header">
        <h2><?php esc_html_e( 'Nothing found', 'nolan-showcase-theme-09' ); ?></h2>
    </header>

    <div class="entry-content">
        <p><?php esc_html_e( 'No matching content was found. Try a different search or return to the homepage.', 'nolan-showcase-theme-09' ); ?></p>
        <?php get_search_form(); ?>
    </div>
</section>
