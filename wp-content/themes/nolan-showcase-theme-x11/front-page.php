<?php
/**
 * File purpose: Static-first homepage template for the Fernline Nursery storefront.
 * References: header.php, footer.php, local assets/images, assets/css/theme.css.
 * Behavior: Outputs a shop-style homepage with collections, filters, carousel, testimonials, and care resources.
 * Return values: Outputs markup.
 *
 * @package Nolan_Showcase_Theme_X11
 */

get_header();

$products = array(
	array( 'cat' => 'indoor', 'title' => __( 'Monstera Deliciosa', 'nolan-showcase-theme-x11' ), 'meta' => __( 'Medium / easy-care', 'nolan-showcase-theme-x11' ), 'price' => '$38', 'img' => 'product-monstera.svg' ),
	array( 'cat' => 'indoor', 'title' => __( 'Snake Plant', 'nolan-showcase-theme-x11' ), 'meta' => __( 'Low-light / hardy', 'nolan-showcase-theme-x11' ), 'price' => '$24', 'img' => 'product-pot.svg' ),
	array( 'cat' => 'indoor', 'title' => __( 'Trailing Pothos', 'nolan-showcase-theme-x11' ), 'meta' => __( 'Hanging / fast growth', 'nolan-showcase-theme-x11' ), 'price' => '$26', 'img' => 'product-hanging.svg' ),
	array( 'cat' => 'outdoor', 'title' => __( 'Citrus Patio Pot', 'nolan-showcase-theme-x11' ), 'meta' => __( 'Seasonal / bright light', 'nolan-showcase-theme-x11' ), 'price' => '$48', 'img' => 'product-pot.svg' ),
	array( 'cat' => 'bundles', 'title' => __( 'Gift Bundle', 'nolan-showcase-theme-x11' ), 'meta' => __( 'Ready to gift', 'nolan-showcase-theme-x11' ), 'price' => '$62', 'img' => 'bundle-box.svg' ),
	array( 'cat' => 'tools', 'title' => __( 'Potting Soil Kit', 'nolan-showcase-theme-x11' ), 'meta' => __( 'Soil + tools', 'nolan-showcase-theme-x11' ), 'price' => '$18', 'img' => 'care-guide.svg' ),
	array( 'cat' => 'indoor', 'title' => __( 'Hanging Fern', 'nolan-showcase-theme-x11' ), 'meta' => __( 'Bright room / trailing', 'nolan-showcase-theme-x11' ), 'price' => '$34', 'img' => 'product-hanging.svg' ),
	array( 'cat' => 'pots', 'title' => __( 'Statement Planter', 'nolan-showcase-theme-x11' ), 'meta' => __( 'Decor / neutral finish', 'nolan-showcase-theme-x11' ), 'price' => '$44', 'img' => 'product-pot.svg' ),
	array( 'cat' => 'outdoor', 'title' => __( 'Garden Combo', 'nolan-showcase-theme-x11' ), 'meta' => __( 'Outdoor / giftable', 'nolan-showcase-theme-x11' ), 'price' => '$56', 'img' => 'product-monstera.svg' ),
	array( 'cat' => 'subs', 'title' => __( 'Monthly Refresh', 'nolan-showcase-theme-x11' ), 'meta' => __( 'Recurring care', 'nolan-showcase-theme-x11' ), 'price' => '$49/mo', 'img' => 'bundle-box.svg' ),
	array( 'cat' => 'tools', 'title' => __( 'Repotting Guide', 'nolan-showcase-theme-x11' ), 'meta' => __( 'Starter kit', 'nolan-showcase-theme-x11' ), 'price' => '$12', 'img' => 'care-guide.svg' ),
	array( 'cat' => 'bundles', 'title' => __( 'Welcome Bundle', 'nolan-showcase-theme-x11' ), 'meta' => __( 'Housewarming set', 'nolan-showcase-theme-x11' ), 'price' => '$58', 'img' => 'bundle-box.svg' ),
);

$reviews = array(
	array( __( '“The shop feels calm and easy to browse, and the plants arrived in excellent shape.”', 'nolan-showcase-theme-x11' ), __( 'Hannah W. · apartment refresh', 'nolan-showcase-theme-x11' ) ),
	array( __( '“Great advice on light and watering. The note cards made gifting painless.”', 'nolan-showcase-theme-x11' ), __( 'Jordan P. · host gift order', 'nolan-showcase-theme-x11' ) ),
	array( __( '“I came for one plant and left with a full setup for my apartment.”', 'nolan-showcase-theme-x11' ), __( 'Mina S. · starter collection', 'nolan-showcase-theme-x11' ) ),
);
?>

<section class="hero">
	<div class="container hero__grid">
		<div class="hero__copy" data-reveal>
			<p class="hero__kicker"><?php esc_html_e( 'Plants for rooms, patios, and better routines', 'nolan-showcase-theme-x11' ); ?></p>
			<h1 class="hero__title"><?php esc_html_e( 'Plants and care essentials for spaces that feel alive.', 'nolan-showcase-theme-x11' ); ?></h1>
			<p class="hero__subtitle"><?php esc_html_e( 'Fernline Nursery curates houseplants, outdoor plants, planters, soil, and gifting bundles with a clean retail feel and practical plant care guidance.', 'nolan-showcase-theme-x11' ); ?></p>
			<div class="hero__actions">
				<a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Shop Plants', 'nolan-showcase-theme-x11' ); ?></a>
				<a class="button button-secondary" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Browse Collections', 'nolan-showcase-theme-x11' ); ?></a>
			</div>
			<ul class="hero__trust" aria-label="<?php echo esc_attr_x( 'Proof tags', 'aria label', 'nolan-showcase-theme-x11' ); ?>">
				<li><?php esc_html_e( 'Curated by category', 'nolan-showcase-theme-x11' ); ?></li>
				<li><?php esc_html_e( 'Pickup + shipping support', 'nolan-showcase-theme-x11' ); ?></li>
				<li><?php esc_html_e( 'Plant care made practical', 'nolan-showcase-theme-x11' ); ?></li>
				<li><?php esc_html_e( 'Bundles for gifting', 'nolan-showcase-theme-x11' ); ?></li>
			</ul>
		</div>
		<div class="hero__media" data-reveal>
			<div class="hero__image-stack" aria-hidden="true">
				<img class="hero__img hero__img--primary" src="<?php echo esc_url( nolan_showcase_x11_image_uri( 'hero-nursery.svg' ) ); ?>" width="1200" height="800" alt="">
				<img class="hero__img hero__img--secondary" src="<?php echo esc_url( nolan_showcase_x11_image_uri( 'product-monstera.svg' ) ); ?>" width="1200" height="800" alt="">
				<img class="hero__img hero__img--tertiary" src="<?php echo esc_url( nolan_showcase_x11_image_uri( 'bundle-box.svg' ) ); ?>" width="1200" height="800" alt="">
				<div class="hero__badge"><span><?php esc_html_e( 'new arrivals', 'nolan-showcase-theme-x11' ); ?></span><strong>24</strong></div>
			</div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head" data-reveal>
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Shop with clarity', 'nolan-showcase-theme-x11' ); ?></p>
				<h2 class="section-title"><?php esc_html_e( 'A clean nursery experience for people who want the right plant, not just any plant.', 'nolan-showcase-theme-x11' ); ?></h2>
			</div>
			<p class="section-subtitle"><?php esc_html_e( 'Categories stay easy to scan, product cards show the essentials, and every order includes practical care guidance.', 'nolan-showcase-theme-x11' ); ?></p>
		</div>
		<div class="grid grid--services">
			<?php
			$collections = array(
				array( 'title' => __( 'Houseplants', 'nolan-showcase-theme-x11' ), 'copy' => __( 'Low-light to bright-light varieties that fit home and office routines.', 'nolan-showcase-theme-x11' ), 'img' => 'product-monstera.svg' ),
				array( 'title' => __( 'Outdoor Plants', 'nolan-showcase-theme-x11' ), 'copy' => __( 'Seasonal greens and flowering options for patios, porches, and entryways.', 'nolan-showcase-theme-x11' ), 'img' => 'product-pot.svg' ),
				array( 'title' => __( 'Pots &amp; Planters', 'nolan-showcase-theme-x11' ), 'copy' => __( 'Clean ceramic, fiber, and lightweight planters that work in real rooms.', 'nolan-showcase-theme-x11' ), 'img' => 'product-pot.svg' ),
				array( 'title' => __( 'Gift Bundles', 'nolan-showcase-theme-x11' ), 'copy' => __( 'Easy plant gifts paired with notes, add-ons, and retail-ready packaging.', 'nolan-showcase-theme-x11' ), 'img' => 'bundle-box.svg' ),
				array( 'title' => __( 'Soil &amp; Tools', 'nolan-showcase-theme-x11' ), 'copy' => __( 'Practical care essentials to keep the shelf-life of your plants strong.', 'nolan-showcase-theme-x11' ), 'img' => 'care-guide.svg' ),
				array( 'title' => __( 'Subscriptions', 'nolan-showcase-theme-x11' ), 'copy' => __( 'Monthly or seasonal refreshes for homes, offices, and hospitality spaces.', 'nolan-showcase-theme-x11' ), 'img' => 'product-hanging.svg' ),
			);
			foreach ( $collections as $collection ) :
				?>
				<article class="card" data-reveal>
					<div class="card__media" aria-hidden="true"><img src="<?php echo esc_url( nolan_showcase_x11_image_uri( $collection['img'] ) ); ?>" width="800" height="600" alt=""></div>
					<div class="card__body">
						<h3 class="card__title"><?php echo wp_kses_post( $collection['title'] ); ?></h3>
						<p class="card__copy"><?php echo esc_html( $collection['copy'] ); ?></p>
					</div>
				</article>
				<?php
			endforeach;
			?>
		</div>
	</div>
</section>

<section class="section section--soft">
	<div class="container">
		<div class="section-head" data-reveal>
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Featured products', 'nolan-showcase-theme-x11' ); ?></p>
				<h2 class="section-title"><?php esc_html_e( 'Filter by collection to browse a tidy retail grid.', 'nolan-showcase-theme-x11' ); ?></h2>
			</div>
			<div class="section-actions"><a class="button button-secondary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Shop all', 'nolan-showcase-theme-x11' ); ?></a></div>
		</div>
		<nav class="filter-nav" aria-label="<?php echo esc_attr_x( 'Product categories', 'aria label', 'nolan-showcase-theme-x11' ); ?>" data-work-filters data-reveal>
			<button class="filter-nav__btn is-active" type="button" data-filter="all" aria-pressed="true"><?php esc_html_e( 'All', 'nolan-showcase-theme-x11' ); ?></button>
			<button class="filter-nav__btn" type="button" data-filter="indoor" aria-pressed="false"><?php esc_html_e( 'Houseplants', 'nolan-showcase-theme-x11' ); ?></button>
			<button class="filter-nav__btn" type="button" data-filter="outdoor" aria-pressed="false"><?php esc_html_e( 'Outdoor Plants', 'nolan-showcase-theme-x11' ); ?></button>
			<button class="filter-nav__btn" type="button" data-filter="pots" aria-pressed="false"><?php esc_html_e( 'Pots', 'nolan-showcase-theme-x11' ); ?></button>
			<button class="filter-nav__btn" type="button" data-filter="bundles" aria-pressed="false"><?php esc_html_e( 'Bundles', 'nolan-showcase-theme-x11' ); ?></button>
			<button class="filter-nav__btn" type="button" data-filter="tools" aria-pressed="false"><?php esc_html_e( 'Tools', 'nolan-showcase-theme-x11' ); ?></button>
			<button class="filter-nav__btn" type="button" data-filter="subs" aria-pressed="false"><?php esc_html_e( 'Subscriptions', 'nolan-showcase-theme-x11' ); ?></button>
		</nav>
		<div class="grid grid--gallery" aria-label="<?php echo esc_attr_x( 'Featured products', 'aria label', 'nolan-showcase-theme-x11' ); ?>">
			<?php foreach ( $products as $product ) : ?>
				<article class="gallery-card gallery-card--product" data-work-card data-cat="<?php echo esc_attr( $product['cat'] ); ?>" data-hidden="false" data-reveal>
					<img class="gallery-card__img" src="<?php echo esc_url( nolan_showcase_x11_image_uri( $product['img'] ) ); ?>" width="960" height="640" alt="" loading="lazy" decoding="async">
					<div class="gallery-card__meta">
						<p class="gallery-card__cat"><?php echo esc_html( $product['meta'] ); ?></p>
						<h3 class="gallery-card__title"><?php echo esc_html( $product['title'] ); ?></h3>
						<p class="gallery-card__price"><?php echo esc_html( $product['price'] ); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="section section--soft">
	<div class="container">
		<div class="section-head" data-reveal>
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Why shop here', 'nolan-showcase-theme-x11' ); ?></p>
				<h2 class="section-title"><?php esc_html_e( 'Practical plant care and retail clarity from checkout to the first watering.', 'nolan-showcase-theme-x11' ); ?></h2>
			</div>
		</div>
		<div class="grid grid--topic">
			<article class="reason-card" data-reveal><h3><?php esc_html_e( 'Curated stock', 'nolan-showcase-theme-x11' ); ?></h3><p><?php esc_html_e( 'Healthy, shelf-ready plants selected for structure and care.', 'nolan-showcase-theme-x11' ); ?></p></article>
			<article class="reason-card" data-reveal><h3><?php esc_html_e( 'Pickup + shipping', 'nolan-showcase-theme-x11' ); ?></h3><p><?php esc_html_e( 'Simple fulfillment options for local shoppers and shipped orders.', 'nolan-showcase-theme-x11' ); ?></p></article>
			<article class="reason-card" data-reveal><h3><?php esc_html_e( 'Plant care support', 'nolan-showcase-theme-x11' ); ?></h3><p><?php esc_html_e( 'Practical watering and placement notes with every order.', 'nolan-showcase-theme-x11' ); ?></p></article>
		</div>
	</div>
</section>

<section class="section section--soft">
	<div class="container">
		<div class="section-head" data-reveal>
			<div>
				<p class="eyebrow"><?php esc_html_e( 'Featured collections', 'nolan-showcase-theme-x11' ); ?></p>
				<h2 class="section-title"><?php esc_html_e( 'Three stories that show how the nursery experience feels on the shelf and in the home.', 'nolan-showcase-theme-x11' ); ?></h2>
			</div>
		</div>
		<div class="carousel" data-carousel aria-label="<?php echo esc_attr_x( 'Nursery carousel', 'aria label', 'nolan-showcase-theme-x11' ); ?>">
			<div class="carousel__viewport">
				<article class="carousel__slide" data-carousel-slide>
					<div class="carousel__media"><img src="<?php echo esc_url( nolan_showcase_x11_image_uri( 'product-monstera.svg' ) ); ?>" alt=""></div>
					<div><p class="carousel__kicker"><?php esc_html_e( 'Featured collection', 'nolan-showcase-theme-x11' ); ?></p><h3 class="carousel__title"><?php esc_html_e( 'Statement houseplants for bright, livable rooms', 'nolan-showcase-theme-x11' ); ?></h3><p class="carousel__copy"><?php esc_html_e( 'A quick way to browse the most-loved indoor plants without digging through a crowded shelf.', 'nolan-showcase-theme-x11' ); ?></p><a class="btn btn-text" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Browse indoor plants', 'nolan-showcase-theme-x11' ); ?></a></div>
				</article>
				<article class="carousel__slide" data-carousel-slide hidden aria-hidden="true">
					<div class="carousel__media"><img src="<?php echo esc_url( nolan_showcase_x11_image_uri( 'product-hanging.svg' ) ); ?>" alt=""></div>
					<div><p class="carousel__kicker"><?php esc_html_e( 'Featured collection', 'nolan-showcase-theme-x11' ); ?></p><h3 class="carousel__title"><?php esc_html_e( 'Hanging plants that soften walls and shelves', 'nolan-showcase-theme-x11' ); ?></h3><p class="carousel__copy"><?php esc_html_e( 'Perfect for small-space setups where movement, drape, and easy care matter.', 'nolan-showcase-theme-x11' ); ?></p><a class="btn btn-text" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Browse hanging plants', 'nolan-showcase-theme-x11' ); ?></a></div>
				</article>
				<article class="carousel__slide" data-carousel-slide hidden aria-hidden="true">
					<div class="carousel__media"><img src="<?php echo esc_url( nolan_showcase_x11_image_uri( 'bundle-box.svg' ) ); ?>" alt=""></div>
					<div><p class="carousel__kicker"><?php esc_html_e( 'Featured collection', 'nolan-showcase-theme-x11' ); ?></p><h3 class="carousel__title"><?php esc_html_e( 'Gift bundles with notes, add-ons, and simple pickup', 'nolan-showcase-theme-x11' ); ?></h3><p class="carousel__copy"><?php esc_html_e( 'Bundle options make checkout quick for gifts and housewarming orders.', 'nolan-showcase-theme-x11' ); ?></p><a class="btn btn-text" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask about bundles', 'nolan-showcase-theme-x11' ); ?></a></div>
				</article>
			</div>
			<div class="carousel__controls">
				<div class="carousel__nav">
					<button class="button button-secondary" type="button" data-carousel-prev><?php esc_html_e( 'Previous', 'nolan-showcase-theme-x11' ); ?></button>
					<button class="button button-secondary" type="button" data-carousel-next><?php esc_html_e( 'Next', 'nolan-showcase-theme-x11' ); ?></button>
				</div>
				<div class="carousel__dots" data-carousel-dots aria-label="<?php echo esc_attr_x( 'Carousel slides', 'aria label', 'nolan-showcase-theme-x11' ); ?>"></div>
			</div>
		</div>
	</div>
</section>

<section class="section section--band">
	<div class="container">
		<div class="stats" data-reveal aria-label="<?php echo esc_attr_x( 'Proof band', 'aria label', 'nolan-showcase-theme-x11' ); ?>">
			<div class="stat"><p class="stat__num"><span data-countup data-to="36">36</span>+</p><p class="stat__label"><?php esc_html_e( 'plant and product options', 'nolan-showcase-theme-x11' ); ?></p></div>
			<div class="stat"><p class="stat__num">2</p><p class="stat__label"><?php esc_html_e( 'pickup and shipping paths', 'nolan-showcase-theme-x11' ); ?></p></div>
			<div class="stat"><p class="stat__num">1</p><p class="stat__label"><?php esc_html_e( 'care note with every order', 'nolan-showcase-theme-x11' ); ?></p></div>
			<div class="stat"><p class="stat__num">Gift</p><p class="stat__label"><?php esc_html_e( 'ready bundles', 'nolan-showcase-theme-x11' ); ?></p></div>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="section-head" data-reveal><div><p class="eyebrow"><?php esc_html_e( 'Client notes', 'nolan-showcase-theme-x11' ); ?></p><h2 class="section-title"><?php esc_html_e( 'The shop feels calm and easy to browse, and the plants arrive in excellent shape.', 'nolan-showcase-theme-x11' ); ?></h2></div></div>
		<div class="testimonial-grid" data-testimonials>
			<?php foreach ( $reviews as $index => $review ) : ?>
				<article class="testimonial" data-testimonial<?php echo 0 === $index ? '' : ' hidden aria-hidden="true"'; ?>>
					<p class="testimonial__quote"><?php echo esc_html( $review[0] ); ?></p>
					<p class="testimonial__meta"><?php echo esc_html( $review[1] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
		<div class="carousel__nav" style="margin-top:14px" aria-label="<?php echo esc_attr_x( 'Testimonials', 'aria label', 'nolan-showcase-theme-x11' ); ?>">
			<button class="button button-secondary" type="button" data-testimonial-nav><?php esc_html_e( 'One', 'nolan-showcase-theme-x11' ); ?></button>
			<button class="button button-secondary" type="button" data-testimonial-nav><?php esc_html_e( 'Two', 'nolan-showcase-theme-x11' ); ?></button>
			<button class="button button-secondary" type="button" data-testimonial-nav><?php esc_html_e( 'Three', 'nolan-showcase-theme-x11' ); ?></button>
		</div>
	</div>
</section>

<section class="section section--soft">
	<div class="container">
		<div class="section-head" data-reveal><div><p class="eyebrow"><?php esc_html_e( 'Care resources', 'nolan-showcase-theme-x11' ); ?></p><h2 class="section-title"><?php esc_html_e( 'Short guides that make plant care less guessy.', 'nolan-showcase-theme-x11' ); ?></h2></div></div>
		<div class="grid grid--topic">
			<article class="resource-card" data-reveal><img class="resource-card__img" src="<?php echo esc_url( nolan_showcase_x11_image_uri( 'care-guide.svg' ) ); ?>" alt=""><div class="resource-card__body"><p class="resource-card__tag"><?php esc_html_e( 'Watering', 'nolan-showcase-theme-x11' ); ?></p><h3 class="resource-card__title"><?php esc_html_e( 'How often should I water?', 'nolan-showcase-theme-x11' ); ?></h3><p class="resource-card__copy"><?php esc_html_e( 'A quick guide to watering rhythms for common houseplants and outdoor stock.', 'nolan-showcase-theme-x11' ); ?></p><a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Read more', 'nolan-showcase-theme-x11' ); ?></a></div></article>
			<article class="resource-card" data-reveal><img class="resource-card__img" src="<?php echo esc_url( nolan_showcase_x11_image_uri( 'care-guide.svg' ) ); ?>" alt=""><div class="resource-card__body"><p class="resource-card__tag"><?php esc_html_e( 'Light', 'nolan-showcase-theme-x11' ); ?></p><h3 class="resource-card__title"><?php esc_html_e( 'Where should this plant go?', 'nolan-showcase-theme-x11' ); ?></h3><p class="resource-card__copy"><?php esc_html_e( 'A practical light guide for windows, shelves, and low-light corners.', 'nolan-showcase-theme-x11' ); ?></p><a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Read more', 'nolan-showcase-theme-x11' ); ?></a></div></article>
			<article class="resource-card" data-reveal><img class="resource-card__img" src="<?php echo esc_url( nolan_showcase_x11_image_uri( 'care-guide.svg' ) ); ?>" alt=""><div class="resource-card__body"><p class="resource-card__tag"><?php esc_html_e( 'Repotting', 'nolan-showcase-theme-x11' ); ?></p><h3 class="resource-card__title"><?php esc_html_e( 'When should I repot?', 'nolan-showcase-theme-x11' ); ?></h3><p class="resource-card__copy"><?php esc_html_e( 'Sizing, drainage, and the signs it’s time to move up a pot.', 'nolan-showcase-theme-x11' ); ?></p><a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Read more', 'nolan-showcase-theme-x11' ); ?></a></div></article>
		</div>
	</div>
</section>

<section class="section">
	<div class="container">
		<div class="feature-story" data-reveal>
			<div class="feature-story__media"><img src="<?php echo esc_url( nolan_showcase_x11_image_uri( 'hero-nursery.svg' ) ); ?>" alt=""></div>
			<div class="feature-story__body">
				<p class="eyebrow"><?php esc_html_e( 'Start here', 'nolan-showcase-theme-x11' ); ?></p>
				<h2 class="section-title"><?php esc_html_e( 'Need a quick recommendation?', 'nolan-showcase-theme-x11' ); ?></h2>
				<p class="section-subtitle"><?php esc_html_e( 'Tell us the room, the light, and the kind of maintenance you can actually keep up with.', 'nolan-showcase-theme-x11' ); ?></p>
				<div class="hero__actions">
					<a class="button" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-x11' ); ?></a>
					<a class="button button-secondary" href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'View Collections', 'nolan-showcase-theme-x11' ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
