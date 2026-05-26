<?php
/**
 * Template Name: Service - Analytics and Performance
 *
 * @package Nolan_Showcase_Theme_08
 */

nst08_render_service_page(
	array(
		'eyebrow' => 'Analytics and performance',
		'title' => 'Measurement and speed improvements grounded in validated events, dashboards, and user experience.',
		'intro' => 'Northstar helps teams clean up GA4, GTM, conversion tracking, call tracking, e-commerce events, PageSpeed, Core Web Vitals, reports, and dashboards.',
		'meta' => array(
			array( 'label' => 'Tools', 'value' => 'GA4 + GTM' ),
			array( 'label' => 'Speed', 'value' => 'Core Web Vitals' ),
			array( 'label' => 'Output', 'value' => 'Dashboards' ),
		),
		'overview_label' => 'Measurement scope',
		'overview_title' => 'Clean data and better performance decisions start with an explicit measurement plan.',
		'overview_copy' => 'Engagements cover GA4, GTM, conversion tracking, call tracking, e-commerce events, PageSpeed, Core Web Vitals, reporting dashboards, tracking cleanup, measurement plans, event validation, and recommendations.',
		'cards' => array(
			array( 'index' => '01', 'title' => 'GA4 and GTM', 'copy' => 'Properties, streams, tags, triggers, parameters, cross-domain needs, and duplicate tracking are reviewed.' ),
			array( 'index' => '02', 'title' => 'Conversions', 'copy' => 'Forms, calls, purchases, lead quality signals, checkout steps, and campaign landing pages are mapped to business decisions.' ),
			array( 'index' => '03', 'title' => 'E-commerce events', 'copy' => 'View item, add to cart, begin checkout, purchase, refunds, promotions, and item data quality are validated.' ),
			array( 'index' => '04', 'title' => 'PageSpeed', 'copy' => 'Scripts, CSS, fonts, images, cache behavior, server response, and third-party tools are prioritized by user impact.' ),
			array( 'index' => '05', 'title' => 'Core Web Vitals', 'copy' => 'LCP, CLS, INP, field data, templates, and device differences are evaluated before fixes are ranked.' ),
			array( 'index' => '06', 'title' => 'Dashboards', 'copy' => 'Reports separate operational health, marketing performance, conversion paths, and technical issues.' ),
		),
		'checklist_label' => 'Validation checklist',
		'checklist_title' => 'Tracking cleanup is verified, not assumed.',
		'checks' => array( 'Measurement plan tied to business decisions', 'GA4 events and conversions tested in debug tools', 'GTM tags reviewed for duplication and firing rules', 'Call tracking and form tracking confirmed', 'PageSpeed and Core Web Vitals baseline captured', 'Dashboard definitions and reporting cadence documented' ),
		'deliverables' => array( 'Measurement plan', 'GA4/GTM cleanup notes', 'Event validation report', 'PageSpeed findings', 'Core Web Vitals recommendations', 'Reporting dashboard outline' ),
		'cta_title' => 'Stop guessing which website changes worked.',
		'cta_copy' => 'Northstar can clean up tracking, validate conversion events, and prioritize performance fixes that support business decisions.',
		'cta_button' => 'Audit analytics and speed',
	)
);
