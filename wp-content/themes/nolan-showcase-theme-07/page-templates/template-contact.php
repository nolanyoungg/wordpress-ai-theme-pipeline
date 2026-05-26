<?php
/**
 * Template Name: Contact
 *
 * @package Nolan_Showcase_Theme_07
 */

get_header();
?>

<section class="page-hero">
	<div class="container page-hero__grid">
		<div class="page-hero__copy" data-reveal>
			<p class="page-hero__kicker"><?php esc_html_e( 'Contact', 'nolan-showcase-theme-07' ); ?></p>
			<h1 class="page-hero__title"><?php esc_html_e( 'Tell us what you\'re planning.', 'nolan-showcase-theme-07' ); ?></h1>
			<p class="page-hero__subtitle"><?php esc_html_e( 'We\'ll reply with availability, timing recommendations, and a simple plan. No pressure - just clarity.', 'nolan-showcase-theme-07' ); ?></p>
			<ul class="hero__trust">
				<li><?php esc_html_e( 'NYC + travel', 'nolan-showcase-theme-07' ); ?></li>
				<li><?php esc_html_e( 'Editorial + documentary blend', 'nolan-showcase-theme-07' ); ?></li>
				<li><?php esc_html_e( 'Print-ready delivery', 'nolan-showcase-theme-07' ); ?></li>
			</ul>
		</div>
		<div class="page-hero__media" data-reveal aria-hidden="true">
			<img src="<?php echo nolan_s7_asset( 'assets/images/hero-portrait-01.jpg' ); ?>" width="1200" height="820" alt="" loading="eager" decoding="async">
		</div>
	</div>
</section>

<section class="section section--tight">
	<div class="container">
		<div class="contact-grid">
			<div class="contact-form" data-reveal>
				<h2 class="section-title"><?php esc_html_e( 'Inquiry form', 'nolan-showcase-theme-07' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'This is a styled demo form (no external services). For a real site, connect it to your preferred form plugin or email handler.', 'nolan-showcase-theme-07' ); ?></p>

				<form id="inquiry-form" class="form" action="<?php echo esc_url( home_url( '/contact/' ) ); ?>" method="post" novalidate>
					<div class="form__row">
						<label for="s7-name"><?php esc_html_e( 'Name', 'nolan-showcase-theme-07' ); ?></label>
						<input id="s7-name" name="name" type="text" autocomplete="name" required>
					</div>
					<div class="form__row">
						<label for="s7-email"><?php esc_html_e( 'Email', 'nolan-showcase-theme-07' ); ?></label>
						<input id="s7-email" name="email" type="email" autocomplete="email" required>
					</div>
					<div class="form__row">
						<label for="s7-phone"><?php esc_html_e( 'Phone Number', 'nolan-showcase-theme-07' ); ?></label>
						<input id="s7-phone" name="phone" type="tel" autocomplete="tel">
					</div>
					<div class="form__row">
						<label for="s7-type"><?php esc_html_e( 'Session type', 'nolan-showcase-theme-07' ); ?></label>
						<select id="s7-type" name="session_type">
							<option><?php esc_html_e( 'Portrait session', 'nolan-showcase-theme-07' ); ?></option>
							<option><?php esc_html_e( 'Wedding / engagement', 'nolan-showcase-theme-07' ); ?></option>
							<option><?php esc_html_e( 'Event coverage', 'nolan-showcase-theme-07' ); ?></option>
							<option><?php esc_html_e( 'Brand photography', 'nolan-showcase-theme-07' ); ?></option>
							<option><?php esc_html_e( 'Product & detail', 'nolan-showcase-theme-07' ); ?></option>
							<option><?php esc_html_e( 'Lifestyle / family', 'nolan-showcase-theme-07' ); ?></option>
						</select>
					</div>
					<div class="form__row">
						<label for="s7-budget"><?php esc_html_e( 'Budget/Investment Range', 'nolan-showcase-theme-07' ); ?></label>
						<select id="s7-budget" name="budget">
							<option><?php esc_html_e( 'Still exploring', 'nolan-showcase-theme-07' ); ?></option>
							<option><?php esc_html_e( '$750-$1,500', 'nolan-showcase-theme-07' ); ?></option>
							<option><?php esc_html_e( '$1,500-$3,500', 'nolan-showcase-theme-07' ); ?></option>
							<option><?php esc_html_e( '$3,500+', 'nolan-showcase-theme-07' ); ?></option>
						</select>
					</div>
					<div class="form__row">
						<label for="s7-date"><?php esc_html_e( 'Preferred date/timeframe', 'nolan-showcase-theme-07' ); ?></label>
						<input id="s7-date" name="timeframe" type="text" autocomplete="off" placeholder="<?php echo esc_attr__( 'Example: mid-June weekend, weekday mornings, ASAP', 'nolan-showcase-theme-07' ); ?>">
					</div>
					<div class="form__row">
						<label for="s7-location"><?php esc_html_e( 'Location', 'nolan-showcase-theme-07' ); ?></label>
						<input id="s7-location" name="location" type="text" autocomplete="off" placeholder="<?php echo esc_attr__( 'Example: Manhattan, Brooklyn, Hudson Valley, on-location', 'nolan-showcase-theme-07' ); ?>">
					</div>
					<div class="form__row">
						<label for="s7-message"><?php esc_html_e( 'Message', 'nolan-showcase-theme-07' ); ?></label>
						<textarea id="s7-message" name="message" rows="5" placeholder="<?php echo esc_attr__( 'Tell us what you\'re planning and how you\'ll use the images.', 'nolan-showcase-theme-07' ); ?>"></textarea>
					</div>
					<div class="form__row">
						<button class="btn btn-primary btn-full" type="submit"><?php esc_html_e( 'Send inquiry (demo)', 'nolan-showcase-theme-07' ); ?></button>
						<p class="form-hint"><?php esc_html_e( 'Prefer email? Use hello@mnyphoto.example.', 'nolan-showcase-theme-07' ); ?></p>
					</div>
				</form>
			</div>

			<div class="contact-aside" data-reveal>
				<h2 class="section-title"><?php esc_html_e( 'Details', 'nolan-showcase-theme-07' ); ?></h2>
				<ul class="contact-aside__list">
					<li><strong><?php esc_html_e( 'Email:', 'nolan-showcase-theme-07' ); ?></strong> <?php echo esc_html__( 'hello@mnyphoto.example', 'nolan-showcase-theme-07' ); ?></li>
					<li><strong><?php esc_html_e( 'Base:', 'nolan-showcase-theme-07' ); ?></strong> <?php echo esc_html__( 'Manhattan, NY', 'nolan-showcase-theme-07' ); ?></li>
					<li><strong><?php esc_html_e( 'Travel:', 'nolan-showcase-theme-07' ); ?></strong> <?php echo esc_html__( 'Available with planning lead time', 'nolan-showcase-theme-07' ); ?></li>
				</ul>

				<div class="contact-aside__box">
					<h3 class="contact-aside__title"><?php esc_html_e( 'Booking steps', 'nolan-showcase-theme-07' ); ?></h3>
					<ol class="contact-aside__steps">
						<li><?php esc_html_e( 'Inquiry + availability', 'nolan-showcase-theme-07' ); ?></li>
						<li><?php esc_html_e( 'Creative direction + plan', 'nolan-showcase-theme-07' ); ?></li>
						<li><?php esc_html_e( 'Session + delivery window', 'nolan-showcase-theme-07' ); ?></li>
					</ol>
				</div>

				<div class="contact-aside__box">
					<h3 class="contact-aside__title"><?php esc_html_e( 'FAQ', 'nolan-showcase-theme-07' ); ?></h3>
					<div class="faq">
						<details>
							<summary><?php esc_html_e( 'Do you travel?', 'nolan-showcase-theme-07' ); ?></summary>
							<p><?php esc_html_e( 'Yes. Share the location and timeframe, and we\'ll confirm travel logistics and planning lead time.', 'nolan-showcase-theme-07' ); ?></p>
						</details>
						<details>
							<summary><?php esc_html_e( 'Can you help choose a session type?', 'nolan-showcase-theme-07' ); ?></summary>
							<p><?php esc_html_e( 'Absolutely. Tell us your goals and how you\'ll use the images - we\'ll recommend the right structure.', 'nolan-showcase-theme-07' ); ?></p>
						</details>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section section--cta">
	<div class="container">
		<div class="final-cta" data-reveal>
			<h2 class="final-cta__title"><?php esc_html_e( 'We reply with clarity - not a sales pitch.', 'nolan-showcase-theme-07' ); ?></h2>
			<p class="final-cta__copy"><?php esc_html_e( 'Share your date/timeframe and what you need. We\'ll respond with availability and next steps.', 'nolan-showcase-theme-07' ); ?></p>
			<div class="final-cta__actions">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'View Work', 'nolan-showcase-theme-07' ); ?></a>
				<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Services', 'nolan-showcase-theme-07' ); ?></a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();

