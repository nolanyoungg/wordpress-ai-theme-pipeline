<?php
/**
 * Template Name: Contact
 *
 * Purpose:
 * - Fully designed contact/inquiry page template for the /contact/ route.
 * - Implements a functional WordPress-native inquiry form:
 *   - POSTs to `admin-post.php` with nonce validation.
 *   - Sends via `wp_mail()` using the site’s configured email setup (see `functions.php`).
 *
 * Security:
 * - Nonce validation is required server-side.
 * - Inputs are sanitized; output is escaped at render time.
 *
 * @package Nolan_Showcase_Theme_X11
 */

get_header();

$admin_post = esc_url( admin_url( 'admin-post.php' ) );
$status_ok  = isset( $_GET['contact_success'] ) && '1' === (string) $_GET['contact_success']; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
$status_err = isset( $_GET['contact_error'] ) ? sanitize_key( (string) wp_unslash( $_GET['contact_error'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
?>

<section class="page-hero">
	<div class="container page-hero__grid">
		<div class="page-hero__copy" data-reveal>
			<p class="page-hero__kicker"><?php esc_html_e( 'Contact', 'nolan-showcase-theme-x11' ); ?></p>
			<h1 class="page-hero__title"><?php esc_html_e( 'Tell us what you’re planning.', 'nolan-showcase-theme-x11' ); ?></h1>
			<p class="page-hero__subtitle"><?php esc_html_e( 'We’ll reply with availability, timing recommendations, and a simple plan. No pressure — just clarity.', 'nolan-showcase-theme-x11' ); ?></p>
			<ul class="hero__trust">
				<li><?php esc_html_e( 'NYC + travel', 'nolan-showcase-theme-x11' ); ?></li>
				<li><?php esc_html_e( 'Editorial + documentary blend', 'nolan-showcase-theme-x11' ); ?></li>
				<li><?php esc_html_e( 'Print-ready delivery', 'nolan-showcase-theme-x11' ); ?></li>
			</ul>
		</div>
		<div class="page-hero__media" data-reveal aria-hidden="true">
			<img src="<?php echo nolan_showcase_theme_x11_asset_url( 'assets/images/hero-portrait-01.jpg' ); ?>" width="1200" height="820" alt="" loading="eager" decoding="async">
		</div>
	</div>
</section>

<section class="section section--tight">
	<div class="container">
		<div class="contact-grid">
			<div class="contact-form" data-reveal>
				<h2 class="section-title"><?php esc_html_e( 'Inquiry form', 'nolan-showcase-theme-x11' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'Share your goal and timeframe. We’ll reply with a light-first plan and next steps.', 'nolan-showcase-theme-x11' ); ?></p>

				<?php if ( $status_ok ) : ?>
					<div class="notice notice--success" role="status">
						<p><strong><?php esc_html_e( 'Message sent.', 'nolan-showcase-theme-x11' ); ?></strong> <?php esc_html_e( 'We’ll reply as soon as possible with availability and a simple plan.', 'nolan-showcase-theme-x11' ); ?></p>
					</div>
				<?php elseif ( $status_err ) : ?>
					<div class="notice notice--error" role="alert">
						<p><strong><?php esc_html_e( 'We couldn’t send your message.', 'nolan-showcase-theme-x11' ); ?></strong>
						<?php
						if ( 'required' === $status_err ) {
							esc_html_e( 'Please fill in the required fields and try again.', 'nolan-showcase-theme-x11' );
						} elseif ( 'nonce' === $status_err ) {
							esc_html_e( 'Please refresh the page and try again.', 'nolan-showcase-theme-x11' );
						} else {
							esc_html_e( 'Please try again, or email hello@mnyphoto.example.', 'nolan-showcase-theme-x11' );
						}
						?>
						</p>
					</div>
				<?php endif; ?>

				<form class="form" action="<?php echo $admin_post; ?>" method="post">
					<input type="hidden" name="action" value="nolan_showcase_theme_x11_contact">
					<?php wp_nonce_field( 'nolan_showcase_theme_x11_contact', 'nolan_contact_nonce' ); ?>

					<label class="screen-reader-text" for="nolan-company"><?php esc_html_e( 'Company (leave blank)', 'nolan-showcase-theme-x11' ); ?></label>
					<input id="nolan-company" name="nolan_company" type="text" autocomplete="off" tabindex="-1" class="screen-reader-text" aria-hidden="true">

					<div class="form__row">
						<label for="nolan-name"><?php esc_html_e( 'Name', 'nolan-showcase-theme-x11' ); ?> <span aria-hidden="true">*</span></label>
						<input id="nolan-name" name="name" type="text" autocomplete="name" required>
					</div>

					<div class="form__row">
						<label for="nolan-email"><?php esc_html_e( 'Email', 'nolan-showcase-theme-x11' ); ?> <span aria-hidden="true">*</span></label>
						<input id="nolan-email" name="email" type="email" autocomplete="email" required>
					</div>

					<div class="form__row">
						<label for="nolan-phone"><?php esc_html_e( 'Phone Number', 'nolan-showcase-theme-x11' ); ?></label>
						<input id="nolan-phone" name="phone" type="tel" autocomplete="tel" inputmode="tel" placeholder="<?php echo esc_attr__( 'Optional', 'nolan-showcase-theme-x11' ); ?>">
					</div>

					<div class="form__row">
						<label for="nolan-timeframe"><?php esc_html_e( 'Preferred Date or Timeframe', 'nolan-showcase-theme-x11' ); ?></label>
						<input id="nolan-timeframe" name="timeframe" type="text" autocomplete="off" placeholder="<?php echo esc_attr__( 'Example: mid-June weekend, weekday mornings, ASAP', 'nolan-showcase-theme-x11' ); ?>">
					</div>

					<div class="form__row">
						<label for="nolan-location"><?php esc_html_e( 'Location', 'nolan-showcase-theme-x11' ); ?></label>
						<input id="nolan-location" name="location" type="text" autocomplete="off" placeholder="<?php echo esc_attr__( 'Example: Manhattan, Brooklyn, Hudson Valley, on-location', 'nolan-showcase-theme-x11' ); ?>">
					</div>

					<div class="form__row">
						<label for="nolan-message"><?php esc_html_e( 'Message', 'nolan-showcase-theme-x11' ); ?> <span aria-hidden="true">*</span></label>
						<textarea id="nolan-message" name="message" rows="6" required placeholder="<?php echo esc_attr__( 'Tell us what you’re planning and how you’ll use the images.', 'nolan-showcase-theme-x11' ); ?>"></textarea>
					</div>

					<div class="form__row">
						<label>
							<input type="checkbox" name="consent" value="yes">
							<?php esc_html_e( 'You may contact me about this inquiry.', 'nolan-showcase-theme-x11' ); ?>
						</label>
					</div>

					<div class="form__row">
						<button class="btn btn-primary btn-full" type="submit"><?php esc_html_e( 'Send inquiry', 'nolan-showcase-theme-x11' ); ?></button>
						<p class="form-hint"><?php esc_html_e( 'If email delivery fails on your host, install a mail plugin (SMTP) or contact your host for mail configuration.', 'nolan-showcase-theme-x11' ); ?></p>
					</div>
				</form>
			</div>

			<div class="contact-aside" data-reveal>
				<h2 class="section-title"><?php esc_html_e( 'Details', 'nolan-showcase-theme-x11' ); ?></h2>
				<ul class="contact-aside__list">
					<li><strong><?php esc_html_e( 'Email:', 'nolan-showcase-theme-x11' ); ?></strong> <?php echo esc_html__( 'hello@mnyphoto.example', 'nolan-showcase-theme-x11' ); ?></li>
					<li><strong><?php esc_html_e( 'Base:', 'nolan-showcase-theme-x11' ); ?></strong> <?php echo esc_html__( 'Manhattan, NY', 'nolan-showcase-theme-x11' ); ?></li>
					<li><strong><?php esc_html_e( 'Travel:', 'nolan-showcase-theme-x11' ); ?></strong> <?php echo esc_html__( 'Available with planning lead time', 'nolan-showcase-theme-x11' ); ?></li>
				</ul>

				<div class="contact-aside__box">
					<h3 class="contact-aside__title"><?php esc_html_e( 'Booking steps', 'nolan-showcase-theme-x11' ); ?></h3>
					<ol class="contact-aside__steps">
						<li><?php esc_html_e( 'Inquiry + availability', 'nolan-showcase-theme-x11' ); ?></li>
						<li><?php esc_html_e( 'Creative direction + light-first plan', 'nolan-showcase-theme-x11' ); ?></li>
						<li><?php esc_html_e( 'Session + delivery window', 'nolan-showcase-theme-x11' ); ?></li>
					</ol>
				</div>

				<div class="contact-aside__box">
					<h3 class="contact-aside__title"><?php esc_html_e( 'FAQ', 'nolan-showcase-theme-x11' ); ?></h3>
					<div class="faq">
						<details>
							<summary><?php esc_html_e( 'Do you travel?', 'nolan-showcase-theme-x11' ); ?></summary>
							<p><?php esc_html_e( 'Yes. Share the location and timeframe, and we’ll confirm travel logistics and planning lead time.', 'nolan-showcase-theme-x11' ); ?></p>
						</details>
						<details>
							<summary><?php esc_html_e( 'Can you help choose a session type?', 'nolan-showcase-theme-x11' ); ?></summary>
							<p><?php esc_html_e( 'Absolutely. Tell us your goal and how you’ll use the images — we’ll recommend the right structure.', 'nolan-showcase-theme-x11' ); ?></p>
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
			<h2 class="final-cta__title"><?php esc_html_e( 'We reply with clarity — not a sales pitch.', 'nolan-showcase-theme-x11' ); ?></h2>
			<p class="final-cta__copy"><?php esc_html_e( 'Share your date/timeframe and what you need. We’ll respond with availability and next steps.', 'nolan-showcase-theme-x11' ); ?></p>
			<div class="final-cta__actions">
				<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'View Work', 'nolan-showcase-theme-x11' ); ?></a>
				<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Services', 'nolan-showcase-theme-x11' ); ?></a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();

