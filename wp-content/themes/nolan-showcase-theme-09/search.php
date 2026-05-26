<?php
/**
 * Search results template.
 *
 * @package Nolan_Showcase_Theme_09
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="theme-section">
        <div class="theme-container">
            <header class="section-heading">
                <p class="eyebrow"><?php echo esc_html__( 'Search', 'nolan-showcase-theme-09' ); ?></p>
                <h1>
                    <?php
                    printf(
                        esc_html__( 'Search results for: %s', 'nolan-showcase-theme-09' ),
                        '<span>' . esc_html( get_search_query() ) . '</span>'
                    );
                    ?>
                </h1>
            </header>

            <?php if ( have_posts() ) : ?>
                <div class="content-grid">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content' );
                    endwhile;
                    ?>
                </div>

                <?php the_posts_navigation(); ?>
            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
