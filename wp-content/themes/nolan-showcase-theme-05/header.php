<?php
/**
 * File purpose: Site header, skip link, branding, desktop navigation, and mobile drawer trigger.
 * References: functions.php theme support and assets/js/theme.js menu behavior.
 * Behavior: Outputs accessible navigation for the Fernline Nursery storefront.
 * Return values: Outputs markup.
 *
 * @package Nolan_Showcase_Theme_05
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#site-content"><?php esc_html_e( 'Skip to content', 'nolan-showcase-theme-05' ); ?></a>

<header class="site-header" data-preview-header>
	<div class="header-shell">
		<a class="brand-mark site-branding" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<span class="brand-symbol">F</span>
			<span>
				<span class="brand-name"><?php esc_html_e( 'Fernline Nursery', 'nolan-showcase-theme-05' ); ?></span>
				<span class="brand-tagline"><?php esc_html_e( 'Plants, planters, and care made simple', 'nolan-showcase-theme-05' ); ?></span>
			</span>
		</a>

		<nav class="desktop-nav" aria-label="<?php echo esc_attr_x( 'Primary navigation', 'aria label', 'nolan-showcase-theme-05' ); ?>">
			<ul class="primary-menu">
				<li class="menu-item-has-children">
					<button type="button" data-menu-item="what-we-do" aria-expanded="false" aria-controls="panel-shop"><?php esc_html_e( 'Shop', 'nolan-showcase-theme-05' ); ?></button>
					<a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>" class="screen-reader-text"><?php esc_html_e( 'Shop', 'nolan-showcase-theme-05' ); ?></a>
				</li>
				<li class="menu-item-has-children">
					<button type="button" data-menu-item="who-we-are" aria-expanded="false" aria-controls="panel-about"><?php esc_html_e( 'About', 'nolan-showcase-theme-05' ); ?></button>
					<a href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>" class="screen-reader-text"><?php esc_html_e( 'About', 'nolan-showcase-theme-05' ); ?></a>
				</li>
				<li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Collections', 'nolan-showcase-theme-05' ); ?></a></li>
				<li class="menu-item-has-children">
					<button type="button" data-menu-item="resources" aria-expanded="false" aria-controls="panel-care"><?php esc_html_e( 'Care', 'nolan-showcase-theme-05' ); ?></button>
					<a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="screen-reader-text"><?php esc_html_e( 'Care', 'nolan-showcase-theme-05' ); ?></a>
				</li>
			</ul>
			<a class="header-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Visit Nursery', 'nolan-showcase-theme-05' ); ?></a>
		</nav>

		<button class="menu-toggle" type="button" data-mobile-toggle aria-expanded="false" aria-controls="mobile-menu">
			<span aria-hidden="true"></span>
			<span class="screen-reader-text"><?php esc_html_e( 'Open menu', 'nolan-showcase-theme-05' ); ?></span>
		</button>
	</div>

	<div class="nolan-menu__backdrop" data-menu-backdrop hidden></div>

	<div class="nolan-menu__panel" id="panel-shop" data-menu-dropdown="what-we-do" hidden>
		<div class="nolan-menu__panel-inner">
			<div class="nolan-menu__rail" aria-label="<?php echo esc_attr_x( 'Shop categories', 'aria label', 'nolan-showcase-theme-05' ); ?>">
				<button class="nolan-menu__rail-button" type="button" data-rail-item="indoor"><?php esc_html_e( 'Houseplants', 'nolan-showcase-theme-05' ); ?></button>
				<button class="nolan-menu__rail-button" type="button" data-rail-item="outdoor"><?php esc_html_e( 'Outdoor Plants', 'nolan-showcase-theme-05' ); ?></button>
				<button class="nolan-menu__rail-button" type="button" data-rail-item="pots"><?php esc_html_e( 'Pots &amp; Planters', 'nolan-showcase-theme-05' ); ?></button>
				<button class="nolan-menu__rail-button" type="button" data-rail-item="bundles"><?php esc_html_e( 'Gift Bundles', 'nolan-showcase-theme-05' ); ?></button>
				<button class="nolan-menu__rail-button" type="button" data-rail-item="tools"><?php esc_html_e( 'Soil &amp; Tools', 'nolan-showcase-theme-05' ); ?></button>
				<button class="nolan-menu__rail-button" type="button" data-rail-item="subs"><?php esc_html_e( 'Subscriptions', 'nolan-showcase-theme-05' ); ?></button>
			</div>
			<div class="nolan-menu__content">
				<section class="nolan-menu__content-section" data-rail-content="indoor" tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'product-monstera.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'Houseplants', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'Low-light and bright-light houseplants selected for structure, easy care, and strong shelf presence.', 'nolan-showcase-theme-05' ); ?></p><ul><li><?php esc_html_e( 'Best for homes and offices', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Includes care notes', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Easy gift option', 'nolan-showcase-theme-05' ); ?></li></ul><a class="btn btn-text" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Browse collection', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
				<section class="nolan-menu__content-section" data-rail-content="outdoor" hidden tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'product-pot.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'Outdoor Plants', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'Seasonal greens and flowering options for patios, porches, and entryways.', 'nolan-showcase-theme-05' ); ?></p><ul><li><?php esc_html_e( 'Bright light friendly', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Seasonal refreshes', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Easy pickup or shipping', 'nolan-showcase-theme-05' ); ?></li></ul><a class="btn btn-text" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Browse collection', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
				<section class="nolan-menu__content-section" data-rail-content="pots" hidden tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'product-pot.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'Pots &amp; Planters', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'Clean, modern planters in neutral finishes that work in real rooms.', 'nolan-showcase-theme-05' ); ?></p><ul><li><?php esc_html_e( 'Decor-friendly finishes', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Helpful sizing guidance', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Pairs with add-ons', 'nolan-showcase-theme-05' ); ?></li></ul><a class="btn btn-text" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Browse collection', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
				<section class="nolan-menu__content-section" data-rail-content="bundles" hidden tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'bundle-box.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'Gift Bundles', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'Ready-to-gift plant bundles with notes, add-ons, and easy checkout.', 'nolan-showcase-theme-05' ); ?></p><ul><li><?php esc_html_e( 'Housewarming ready', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Care note included', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Retail-ready packaging', 'nolan-showcase-theme-05' ); ?></li></ul><a class="btn btn-text" href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Browse collection', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
				<section class="nolan-menu__content-section" data-rail-content="tools" hidden tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'care-guide.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'Soil &amp; Tools', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'Practical care essentials to keep your plants healthy after checkout.', 'nolan-showcase-theme-05' ); ?></p><ul><li><?php esc_html_e( 'Repotting help', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Potting mixes', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Simple add-on items', 'nolan-showcase-theme-05' ); ?></li></ul><a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Learn more', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
				<section class="nolan-menu__content-section" data-rail-content="subs" hidden tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'product-hanging.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'Subscriptions', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'Monthly or seasonal refreshes for homes, offices, and hospitality spaces.', 'nolan-showcase-theme-05' ); ?></p><ul><li><?php esc_html_e( 'Recurring care', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Seasonal swaps', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Polished routines', 'nolan-showcase-theme-05' ); ?></li></ul><a class="btn btn-text" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Ask about options', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
			</div>
		</div>
	</div>

	<div class="nolan-menu__panel" id="panel-about" data-menu-dropdown="who-we-are" hidden>
		<div class="nolan-menu__panel-inner">
			<div class="nolan-menu__rail" aria-label="<?php echo esc_attr_x( 'About categories', 'aria label', 'nolan-showcase-theme-05' ); ?>">
				<button class="nolan-menu__rail-button" type="button" data-rail-item="nursery"><?php esc_html_e( 'The Nursery', 'nolan-showcase-theme-05' ); ?></button>
				<button class="nolan-menu__rail-button" type="button" data-rail-item="sourcing"><?php esc_html_e( 'Sourcing', 'nolan-showcase-theme-05' ); ?></button>
				<button class="nolan-menu__rail-button" type="button" data-rail-item="pickup"><?php esc_html_e( 'Shipping &amp; Pickup', 'nolan-showcase-theme-05' ); ?></button>
			</div>
			<div class="nolan-menu__content">
				<section class="nolan-menu__content-section" data-rail-content="nursery" tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'hero-nursery.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'The Nursery', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'A bright local shop focused on healthy plants, simple guidance, and helpful retail presentation.', 'nolan-showcase-theme-05' ); ?></p><ul><li><?php esc_html_e( 'Curated inventory, not clutter', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Practical advice', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Pickup + shipping support', 'nolan-showcase-theme-05' ); ?></li></ul><a class="btn btn-text" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Learn more', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
				<section class="nolan-menu__content-section" data-rail-content="sourcing" hidden tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'product-monstera.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'Sourcing', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'Plants selected for strong structure, predictable care, and retail-ready shelf presence.', 'nolan-showcase-theme-05' ); ?></p><ul><li><?php esc_html_e( 'Quality checks before listing', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Staples and gifts', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Healthy shelf-ready stock', 'nolan-showcase-theme-05' ); ?></li></ul><a class="btn btn-text" href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Learn more', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
				<section class="nolan-menu__content-section" data-rail-content="pickup" hidden tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'bundle-box.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'Shipping &amp; Pickup', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'Clear fulfillment options so checkout stays simple.', 'nolan-showcase-theme-05' ); ?></p><ul><li><?php esc_html_e( 'Local pickup windows', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Careful packing', 'nolan-showcase-theme-05' ); ?></li><li><?php esc_html_e( 'Helpful follow-up notes', 'nolan-showcase-theme-05' ); ?></li></ul><a class="btn btn-text" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Get in touch', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
			</div>
		</div>
	</div>

	<div class="nolan-menu__panel" id="panel-care" data-menu-dropdown="resources" hidden>
		<div class="nolan-menu__panel-inner">
			<div class="nolan-menu__rail" aria-label="<?php echo esc_attr_x( 'Care topics', 'aria label', 'nolan-showcase-theme-05' ); ?>">
				<button class="nolan-menu__rail-button" type="button" data-rail-item="water"><?php esc_html_e( 'Watering', 'nolan-showcase-theme-05' ); ?></button>
				<button class="nolan-menu__rail-button" type="button" data-rail-item="light"><?php esc_html_e( 'Light', 'nolan-showcase-theme-05' ); ?></button>
				<button class="nolan-menu__rail-button" type="button" data-rail-item="repot"><?php esc_html_e( 'Repotting', 'nolan-showcase-theme-05' ); ?></button>
				<button class="nolan-menu__rail-button" type="button" data-rail-item="health"><?php esc_html_e( 'Plant health', 'nolan-showcase-theme-05' ); ?></button>
			</div>
			<div class="nolan-menu__content">
				<section class="nolan-menu__content-section" data-rail-content="water" tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'care-guide.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'How often should I water?', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'A quick guide to watering rhythms for common houseplants and outdoor stock.', 'nolan-showcase-theme-05' ); ?></p><a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Read more', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
				<section class="nolan-menu__content-section" data-rail-content="light" hidden tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'care-guide.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'Where should this plant go?', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'A practical light guide for windows, shelves, and low-light corners.', 'nolan-showcase-theme-05' ); ?></p><a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Read more', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
				<section class="nolan-menu__content-section" data-rail-content="repot" hidden tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'care-guide.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'When should I repot?', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'Sizing, drainage, and the signs it’s time to move up a pot.', 'nolan-showcase-theme-05' ); ?></p><a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Read more', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
				<section class="nolan-menu__content-section" data-rail-content="health" hidden tabindex="-1">
					<div class="nolan-menu__preview"><img src="<?php echo esc_url( nolan_showcase_05_image_uri( 'care-guide.svg' ) ); ?>" alt="" width="520" height="380"></div>
					<div><h3><?php esc_html_e( 'Common plant health checks', 'nolan-showcase-theme-05' ); ?></h3><p><?php esc_html_e( 'What to look for when leaves discolor, droop, or stop growing.', 'nolan-showcase-theme-05' ); ?></p><a class="btn btn-text" href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Read more', 'nolan-showcase-theme-05' ); ?></a></div>
				</section>
			</div>
		</div>
	</div>

	<nav id="mobile-menu" class="mobile-drawer" aria-label="<?php echo esc_attr_x( 'Mobile navigation', 'aria label', 'nolan-showcase-theme-05' ); ?>" data-mobile-drawer hidden>
		<button class="menu-toggle" type="button" data-mobile-close aria-label="<?php esc_attr_e( 'Close menu', 'nolan-showcase-theme-05' ); ?>"><span aria-hidden="true"></span></button>
		<ul class="mobile-menu">
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'nolan-showcase-theme-05' ); ?></a></li>
			<li><button type="button" data-mobile-trigger="shop" aria-expanded="false"><?php esc_html_e( 'Shop', 'nolan-showcase-theme-05' ); ?></button><div data-mobile-panel="shop" hidden><a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Houseplants', 'nolan-showcase-theme-05' ); ?></a><a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Outdoor Plants', 'nolan-showcase-theme-05' ); ?></a><a href="<?php echo esc_url( home_url( '/what-we-do/' ) ); ?>"><?php esc_html_e( 'Pots &amp; Planters', 'nolan-showcase-theme-05' ); ?></a></div></li>
			<li><button type="button" data-mobile-trigger="about" aria-expanded="false"><?php esc_html_e( 'About', 'nolan-showcase-theme-05' ); ?></button><div data-mobile-panel="about" hidden><a href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'The Nursery', 'nolan-showcase-theme-05' ); ?></a><a href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Sourcing', 'nolan-showcase-theme-05' ); ?></a><a href="<?php echo esc_url( home_url( '/who-we-are/' ) ); ?>"><?php esc_html_e( 'Shipping &amp; Pickup', 'nolan-showcase-theme-05' ); ?></a></div></li>
			<li><a href="<?php echo esc_url( home_url( '/work/' ) ); ?>"><?php esc_html_e( 'Collections', 'nolan-showcase-theme-05' ); ?></a></li>
			<li><button type="button" data-mobile-trigger="care" aria-expanded="false"><?php esc_html_e( 'Care', 'nolan-showcase-theme-05' ); ?></button><div data-mobile-panel="care" hidden><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Watering', 'nolan-showcase-theme-05' ); ?></a><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Light', 'nolan-showcase-theme-05' ); ?></a><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>"><?php esc_html_e( 'Repotting', 'nolan-showcase-theme-05' ); ?></a></div></li>
			<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'nolan-showcase-theme-05' ); ?></a></li>
		</ul>
		<a class="mobile-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Visit Nursery', 'nolan-showcase-theme-05' ); ?></a>
	</nav>
</header>
<main id="site-content" class="site-main">
