<?php
/**
 * Purpose: Standard page template for agency pages.
 * WordPress role: Displays WordPress Pages.
 * Related files: template-parts/content-page.php, header.php, footer.php.
 * Important behavior: Adds polished service-hub sections when the page slug is what-we-do or contact form markup when contact.
 *
 * @package Nolan_Showcase_Theme_X13
 */

get_header();
?>
<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'page' );
		if ( is_page( 'what-we-do' ) ) :
			$services = array(
				'Website design', 'WordPress development', 'Website maintenance', 'Website support', 'WooCommerce', 'SEO', 'Analytics', 'AI chatbot integration', 'AI automation', 'Performance optimization',
			);
			?>
			<section class="section"><div class="card-grid">
				<?php foreach ( $services as $service ) : ?>
					<article class="service-card"><h3><?php echo esc_html( $service ); ?></h3><p><?php esc_html_e( 'For business owners who need a dependable website experience with clearer decisions and measurable outcomes.', 'nolan-showcase-theme-x13' ); ?></p><p><strong><?php esc_html_e( 'Included:', 'nolan-showcase-theme-x13' ); ?></strong> <?php esc_html_e( 'Planning, implementation, review, launch support, and practical documentation.', 'nolan-showcase-theme-x13' ); ?></p><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Talk about this service', 'nolan-showcase-theme-x13' ); ?></a></article>
				<?php endforeach; ?>
			</div></section>
			<?php
		endif;
		if ( is_page( 'contact' ) ) :
			get_search_form();
			?>
			<section class="section contact-panel" aria-label="<?php esc_attr_e( 'Quote request form', 'nolan-showcase-theme-x13' ); ?>">
				<form class="quote-form" action="#" method="post">
					<label><?php esc_html_e( 'Name', 'nolan-showcase-theme-x13' ); ?><input type="text" name="name" autocomplete="name"></label>
					<label><?php esc_html_e( 'Email', 'nolan-showcase-theme-x13' ); ?><input type="email" name="email" autocomplete="email"></label>
					<label><?php esc_html_e( 'Phone', 'nolan-showcase-theme-x13' ); ?><input type="tel" name="phone" autocomplete="tel"></label>
					<label><?php esc_html_e( 'Company', 'nolan-showcase-theme-x13' ); ?><input type="text" name="company" autocomplete="organization"></label>
					<label><?php esc_html_e( 'Website URL', 'nolan-showcase-theme-x13' ); ?><input type="url" name="website" autocomplete="url"></label>
					<label><?php esc_html_e( 'Service needed', 'nolan-showcase-theme-x13' ); ?><select name="service"><option><?php esc_html_e( 'WordPress design or redesign', 'nolan-showcase-theme-x13' ); ?></option><option><?php esc_html_e( 'Development or fixes', 'nolan-showcase-theme-x13' ); ?></option><option><?php esc_html_e( 'Maintenance and support', 'nolan-showcase-theme-x13' ); ?></option><option><?php esc_html_e( 'WooCommerce, SEO, analytics, or AI', 'nolan-showcase-theme-x13' ); ?></option></select></label>
					<label><?php esc_html_e( 'Budget', 'nolan-showcase-theme-x13' ); ?><select name="budget"><option><?php esc_html_e( 'Under $5,000', 'nolan-showcase-theme-x13' ); ?></option><option><?php esc_html_e( '$5,000-$15,000', 'nolan-showcase-theme-x13' ); ?></option><option><?php esc_html_e( '$15,000+', 'nolan-showcase-theme-x13' ); ?></option><option><?php esc_html_e( 'Ongoing support', 'nolan-showcase-theme-x13' ); ?></option></select></label>
					<label><?php esc_html_e( 'Timeline', 'nolan-showcase-theme-x13' ); ?><select name="timeline"><option><?php esc_html_e( 'This month', 'nolan-showcase-theme-x13' ); ?></option><option><?php esc_html_e( '1-3 months', 'nolan-showcase-theme-x13' ); ?></option><option><?php esc_html_e( 'Flexible', 'nolan-showcase-theme-x13' ); ?></option></select></label>
					<label class="full"><?php esc_html_e( 'Message', 'nolan-showcase-theme-x13' ); ?><textarea name="message" rows="6"></textarea></label>
					<button class="button" type="submit"><?php esc_html_e( 'Send Quote Request', 'nolan-showcase-theme-x13' ); ?></button>
				</form>
				<p class="form-note"><?php esc_html_e( 'This static form is ready to replace with Gravity Forms, WPForms, or Contact Form 7 shortcode output.', 'nolan-showcase-theme-x13' ); ?></p>
			</section>
			<?php
		endif;
	endwhile;
	?>
</main>
<?php get_footer(); ?>
