<?php
/**
 * Template Name: Service - WooCommerce
 *
 * @package Nolan_Showcase_Theme_08
 */

nst08_render_service_page(
	array(
		'eyebrow' => 'WooCommerce',
		'title' => 'WooCommerce builds and repairs for stores that need flexible commerce inside WordPress.',
		'intro' => 'Northstar helps teams plan product architecture, checkout improvements, shipping and tax configuration, integrations, reporting, and performance without losing WordPress publishing power.',
		'meta' => array(
			array( 'label' => 'Catalogs', 'value' => 'Simple to complex' ),
			array( 'label' => 'Key risk', 'value' => 'Checkout reliability' ),
			array( 'label' => 'Data', 'value' => 'Orders + analytics' ),
		),
		'overview_label' => 'Commerce scope',
		'overview_title' => 'A WooCommerce implementation that makes products, operations, and reporting easier to manage.',
		'overview_copy' => 'Work can include WooCommerce builds, product architecture, checkout improvements, shipping and tax configuration, email templates, inventory/API integrations, variations, speed, reporting, analytics, and launch support.',
		'cards' => array(
			array( 'index' => '01', 'title' => 'Product architecture', 'copy' => 'Categories, attributes, variations, bundles, subscriptions, and metadata are structured before templates are designed.' ),
			array( 'index' => '02', 'title' => 'Checkout improvements', 'copy' => 'Payment, shipping, tax, coupons, account creation, cart recovery, and trust messaging are reviewed as one flow.' ),
			array( 'index' => '03', 'title' => 'Shipping and tax', 'copy' => 'Configuration is documented so store managers understand zones, rates, exemptions, and edge cases.' ),
			array( 'index' => '04', 'title' => 'Email templates', 'copy' => 'Order emails are cleaned up for brand consistency, customer clarity, and operational usefulness.' ),
			array( 'index' => '05', 'title' => 'Integrations', 'copy' => 'Inventory systems, APIs, fulfillment tools, accounting, and CRM handoffs are planned around reliability and logging.' ),
			array( 'index' => '06', 'title' => 'Speed and reporting', 'copy' => 'Database load, cart fragments, plugin overlap, caching, GA4 events, and revenue reports are reviewed together.' ),
		),
		'checklist_label' => 'Store audit',
		'checklist_title' => 'What gets inspected before WooCommerce work is scoped.',
		'checks' => array( 'Product type and variation complexity', 'Shipping, tax, coupon, and payment settings', 'Checkout errors and abandoned cart signals', 'Email template clarity', 'Inventory/API integration requirements', 'Speed, reporting, and analytics accuracy' ),
		'deliverables' => array( 'Product model plan', 'WooCommerce template updates', 'Checkout and cart recommendations', 'Shipping/tax documentation', 'Integration risk notes', 'Reporting and analytics validation' ),
		'cta_title' => 'Make WooCommerce easier for customers and store managers.',
		'cta_copy' => 'Bring the catalog, fulfillment rules, and current checkout issues. Northstar will define the fixes that matter first.',
		'cta_button' => 'Audit a WooCommerce store',
	)
);
