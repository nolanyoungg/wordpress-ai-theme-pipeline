<?php
/**
 * Template Name: Contact
 *
 * @package Nolan_Showcase_Theme_X7
 */

get_header();
?>

<main class="site-main">
	<section class="hero hero--inner">
		<div class="container">
			<div class="hero__grid">
				<div class="hero__copy">
					<p class="kicker"><?php esc_html_e( 'Contact', 'nolan-showcase-theme-x7' ); ?></p>
					<h1 class="hero__title"><?php esc_html_e( 'Inquire for availability — we’ll guide the next right step.', 'nolan-showcase-theme-x7' ); ?></h1>
					<p class="hero__lead"><?php echo wp_kses_post( __( 'Share your date, location, and what you’re building. We’ll respond with availability, collections, and planning guidance tailored to your goals.', 'nolan-showcase-theme-x7' ) ); ?></p>
					<div class="cluster">
						<a class="btn btn-secondary" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Read guides first', 'nolan-showcase-theme-x7' ); ?></a>
						<a class="btn btn-ghost" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'View work', 'nolan-showcase-theme-x7' ); ?></a>
					</div>
				</div>
				<div class="hero__media">
					<img class="hero__img" src="<?php echo nolan_showcase_x7_asset( 'assets/images/contact-studio-desk.svg' ); ?>" alt="" width="720" height="520" loading="eager" decoding="async">
				</div>
			</div>
		</div>
	</section>

	<section class="section section--contact">
		<div class="container">
			<div class="contact-grid">
				<div class="contact-form card card--padded">
					<h2 class="h3"><?php esc_html_e( 'Send an inquiry', 'nolan-showcase-theme-x7' ); ?></h2>
					<p class="muted"><?php esc_html_e( 'This is a demo form layout. Connect a form plugin or endpoint as needed.', 'nolan-showcase-theme-x7' ); ?></p>

					<form class="form" action="#" method="post">
						<div class="form__row">
							<label for="c-name"><?php esc_html_e( 'Name', 'nolan-showcase-theme-x7' ); ?></label>
							<input id="c-name" name="name" type="text" autocomplete="name" required>
						</div>
						<div class="form__row form__row--two">
							<div>
								<label for="c-email"><?php esc_html_e( 'Email', 'nolan-showcase-theme-x7' ); ?></label>
								<input id="c-email" name="email" type="email" autocomplete="email" required>
							</div>
							<div>
								<label for="c-phone"><?php esc_html_e( 'Phone (optional)', 'nolan-showcase-theme-x7' ); ?></label>
								<input id="c-phone" name="phone" type="tel" autocomplete="tel">
							</div>
						</div>
						<div class="form__row form__row--two">
							<div>
								<label for="c-date"><?php esc_html_e( 'Preferred date', 'nolan-showcase-theme-x7' ); ?></label>
								<input id="c-date" name="date" type="date">
							</div>
							<div>
								<label for="c-location"><?php esc_html_e( 'Location', 'nolan-showcase-theme-x7' ); ?></label>
								<input id="c-location" name="location" type="text" placeholder="<?php echo esc_attr__( 'City / venue', 'nolan-showcase-theme-x7' ); ?>">
							</div>
						</div>
						<div class="form__row">
							<label for="c-type"><?php esc_html_e( 'Session type', 'nolan-showcase-theme-x7' ); ?></label>
							<select id="c-type" name="session_type" required>
								<option value=""><?php esc_html_e( 'Select one…', 'nolan-showcase-theme-x7' ); ?></option>
								<option value="wedding"><?php esc_html_e( 'Wedding', 'nolan-showcase-theme-x7' ); ?></option>
								<option value="branding"><?php esc_html_e( 'Branding', 'nolan-showcase-theme-x7' ); ?></option>
								<option value="event"><?php esc_html_e( 'Event', 'nolan-showcase-theme-x7' ); ?></option>
								<option value="studio"><?php esc_html_e( 'Studio portrait', 'nolan-showcase-theme-x7' ); ?></option>
								<option value="lifestyle"><?php esc_html_e( 'Family / lifestyle', 'nolan-showcase-theme-x7' ); ?></option>
								<option value="commercial"><?php esc_html_e( 'Commercial', 'nolan-showcase-theme-x7' ); ?></option>
							</select>
						</div>
						<div class="form__row">
							<label for="c-message"><?php esc_html_e( 'Tell us about your project', 'nolan-showcase-theme-x7' ); ?></label>
							<textarea id="c-message" name="message" rows="6" placeholder="<?php echo esc_attr__( 'What matters most? Any links, mood boards, or must-have shots?', 'nolan-showcase-theme-x7' ); ?>"></textarea>
						</div>
						<div class="form__actions">
							<button class="btn btn-primary btn-full" type="submit"><?php esc_html_e( 'Send Inquiry', 'nolan-showcase-theme-x7' ); ?></button>
							<p class="form__fineprint"><?php esc_html_e( 'By sending, you agree this demo form does not store submissions.', 'nolan-showcase-theme-x7' ); ?></p>
						</div>
					</form>
				</div>

				<aside class="contact-details">
					<div class="card card--padded">
						<h2 class="h4"><?php esc_html_e( 'Contact details', 'nolan-showcase-theme-x7' ); ?></h2>
						<ul class="contact-list">
							<li><span class="muted"><?php esc_html_e( 'Email:', 'nolan-showcase-theme-x7' ); ?></span> <a href="mailto:hello@example.com">hello@example.com</a></li>
							<li><span class="muted"><?php esc_html_e( 'Based in:', 'nolan-showcase-theme-x7' ); ?></span> <?php esc_html_e( 'New York City', 'nolan-showcase-theme-x7' ); ?></li>
							<li><span class="muted"><?php esc_html_e( 'Response time:', 'nolan-showcase-theme-x7' ); ?></span> <?php esc_html_e( '1–2 business days', 'nolan-showcase-theme-x7' ); ?></li>
						</ul>
						<div class="cluster">
							<a class="btn btn-secondary btn-small" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Planning guides', 'nolan-showcase-theme-x7' ); ?></a>
							<a class="btn btn-ghost btn-small" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Work', 'nolan-showcase-theme-x7' ); ?></a>
						</div>
					</div>

					<div class="card card--padded">
						<h2 class="h4"><?php esc_html_e( 'Choose a session type', 'nolan-showcase-theme-x7' ); ?></h2>
						<div class="grid grid--sessions">
							<div class="mini-card">
								<h3 class="h6"><?php esc_html_e( 'Wedding', 'nolan-showcase-theme-x7' ); ?></h3>
								<p class="muted"><?php esc_html_e( 'Story-complete coverage', 'nolan-showcase-theme-x7' ); ?></p>
							</div>
							<div class="mini-card">
								<h3 class="h6"><?php esc_html_e( 'Branding', 'nolan-showcase-theme-x7' ); ?></h3>
								<p class="muted"><?php esc_html_e( 'Conversion-focused library', 'nolan-showcase-theme-x7' ); ?></p>
							</div>
							<div class="mini-card">
								<h3 class="h6"><?php esc_html_e( 'Studio', 'nolan-showcase-theme-x7' ); ?></h3>
								<p class="muted"><?php esc_html_e( 'Sculpted portraits', 'nolan-showcase-theme-x7' ); ?></p>
							</div>
						</div>
					</div>

					<div class="card card--padded">
						<h2 class="h4"><?php esc_html_e( 'Booking process', 'nolan-showcase-theme-x7' ); ?></h2>
						<ol class="steps steps--compact">
							<li class="steps__item"><span class="steps__num">01</span><span class="steps__txt"><?php esc_html_e( 'Inquiry with date + details', 'nolan-showcase-theme-x7' ); ?></span></li>
							<li class="steps__item"><span class="steps__num">02</span><span class="steps__txt"><?php esc_html_e( 'Confirm scope + collection', 'nolan-showcase-theme-x7' ); ?></span></li>
							<li class="steps__item"><span class="steps__num">03</span><span class="steps__txt"><?php esc_html_e( 'Agreement + retainer reserves the date', 'nolan-showcase-theme-x7' ); ?></span></li>
						</ol>
					</div>
				</aside>
			</div>
		</div>
	</section>

	<section class="section section--faq">
		<div class="container container--narrow">
			<header class="section-head">
				<p class="kicker"><?php esc_html_e( 'FAQ', 'nolan-showcase-theme-x7' ); ?></p>
				<h2 class="h2"><?php esc_html_e( 'Before you hit send', 'nolan-showcase-theme-x7' ); ?></h2>
			</header>
			<div class="faq">
				<details>
					<summary><?php esc_html_e( 'Do you share pricing in the first reply?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'Yes. We’ll send current collections and a recommendation based on your session type and goals.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Can we book without a call?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'Often, yes — especially for branding or studio sessions. If your project is complex, we’ll suggest a short clarity call.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'Do you offer weekend sessions?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'Yes, limited weekend dates are reserved for weddings and select sessions. Weekdays are often the most flexible.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'How should we prepare?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'Start with your goal (brand library, celebration, milestone), then share mood references. We’ll help with wardrobe and pacing.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
				<details>
					<summary><?php esc_html_e( 'What if we feel awkward on camera?', 'nolan-showcase-theme-x7' ); ?></summary>
					<p><?php echo wp_kses_post( __( 'That’s normal — and it’s our job to guide you. Expect simple prompts and calm direction. No forced posing.', 'nolan-showcase-theme-x7' ) ); ?></p>
				</details>
			</div>
		</div>
	</section>

	<section class="section section--content">
		<div class="container container--narrow">
			<?php
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
			?>
		</div>
	</section>

	<?php get_template_part( 'template-parts/section', 'final-cta' ); ?>
</main>

<?php
get_footer();

