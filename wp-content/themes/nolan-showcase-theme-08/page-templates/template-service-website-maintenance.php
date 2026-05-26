<?php
/**
 * Template Name: Service - Website Maintenance
 *
 * @package Nolan_Showcase_Theme_08
 */

nst08_render_service_page(
	array(
		'eyebrow' => 'Website maintenance',
		'title' => 'Ongoing website care for teams that cannot afford mystery breakage.',
		'intro' => 'Northstar maintenance keeps WordPress, WooCommerce, and Shopify-adjacent website operations documented, updated, monitored, and ready for measured improvement.',
		'meta' => array(
			array( 'label' => 'Cadence', 'value' => 'Monthly' ),
			array( 'label' => 'Coverage', 'value' => 'Updates + QA' ),
			array( 'label' => 'Support', 'value' => 'Emergency positioning' ),
		),
		'overview_label' => 'Care scope',
		'overview_title' => 'Maintenance that includes updates, testing, reporting, and practical support boundaries.',
		'overview_copy' => 'Plans cover updates, backups, security, plugin testing, uptime, broken layout fixes, content updates, monthly reporting, emergency support positioning, plan cards, included/not included sections, and improvement guidance.',
		'cards' => array(
			array( 'index' => '01', 'title' => 'Updates and backups', 'copy' => 'Core, plugin, theme, and app updates are paired with backup checks and rollback awareness.' ),
			array( 'index' => '02', 'title' => 'Plugin testing', 'copy' => 'Critical pages, forms, checkout, search, account areas, and mobile layouts are checked after meaningful changes.' ),
			array( 'index' => '03', 'title' => 'Security and uptime', 'copy' => 'Monitoring, user review, spam controls, vulnerable plugin awareness, uptime checks, and incident notes are included.' ),
			array( 'index' => '04', 'title' => 'Content updates', 'copy' => 'Small text, image, page, menu, and campaign changes can be handled without pulling internal teams into the CMS.' ),
			array( 'index' => '05', 'title' => 'Monthly reporting', 'copy' => 'Reports cover completed work, open risks, performance signals, analytics notes, and recommended next actions.' ),
			array( 'index' => '06', 'title' => 'Emergency support', 'copy' => 'Urgent issues are triaged by impact: checkout, lead forms, malware, downtime, tracking loss, or broken high-traffic pages.' ),
		),
		'checklist_label' => 'Included / not included',
		'checklist_title' => 'Boundaries are made clear before the plan starts.',
		'checks' => array( 'Included: routine updates, backups, uptime checks, small fixes, reports', 'Included: content updates within agreed monthly capacity', 'Included: emergency triage positioning for business-critical issues', 'Not included: full redesigns, custom apps, major migrations without a separate scope', 'Not included: hosting fees, paid plugin licenses, ad spend, or third-party service costs', 'Not included: guarantee of compatibility for abandoned plugins or unsupported custom code' ),
		'deliverables' => array( 'Maintenance plan card', 'Monthly update report', 'Backup and rollback notes', 'Security and uptime summary', 'Content request workflow', 'Priority support rules' ),
		'cta_title' => 'Put the website on a maintenance rhythm instead of a panic cycle.',
		'cta_copy' => 'Northstar can review the current stack and recommend a care plan with clear coverage, exclusions, and reporting.',
		'cta_button' => 'Request maintenance review',
	)
);
