<?php
/**
 * Template Name: Service - Website Rescue
 *
 * @package Nolan_Showcase_Theme_08
 */

nst08_render_service_page(
	array(
		'eyebrow' => 'Website rescue',
		'title' => 'Emergency diagnostics for broken, slow, or unstable business websites.',
		'intro' => 'Northstar investigates broken sites, slow sites, plugin conflicts, checkout issues, tracking failures, mobile layout bugs, form delivery problems, hosting, DNS, and migrations.',
		'meta' => array(
			array( 'label' => 'First move', 'value' => 'Stabilize' ),
			array( 'label' => 'Common issues', 'value' => 'Forms, speed, checkout' ),
			array( 'label' => 'Outcome', 'value' => 'Repair plan' ),
		),
		'overview_label' => 'Rescue scope',
		'overview_title' => 'Find the failure path, reduce business risk, then improve the underlying system.',
		'overview_copy' => 'The rescue process covers emergency diagnostics, what we check first, stabilize-repair-improve sequencing, hosting and DNS review, plugin conflict tracing, and operational handoff.',
		'cards' => array(
			array( 'index' => '01', 'title' => 'Broken sites', 'copy' => 'White screens, PHP errors, failed updates, missing assets, admin lockouts, and template failures are traced from logs and recent changes.' ),
			array( 'index' => '02', 'title' => 'Slow sites', 'copy' => 'Hosting, cache, scripts, images, database load, plugins, and Core Web Vitals are reviewed before recommendations are made.' ),
			array( 'index' => '03', 'title' => 'Plugin conflicts', 'copy' => 'Conflicts are isolated with backups, staging where possible, version checks, and notes on safer replacement paths.' ),
			array( 'index' => '04', 'title' => 'Checkout and forms', 'copy' => 'Payment failures, shipping logic, form delivery, spam filtering, confirmation messages, and CRM handoffs are tested.' ),
			array( 'index' => '05', 'title' => 'Tracking issues', 'copy' => 'GA4, GTM, pixels, e-commerce events, thank-you pages, and duplicate tags are reviewed for data loss or inflation.' ),
			array( 'index' => '06', 'title' => 'Hosting and DNS', 'copy' => 'Records, SSL, redirects, migration leftovers, server versions, backups, and access ownership are checked early.' ),
		),
		'checklist_label' => 'What we check first',
		'checklist_title' => 'Stabilize, repair, improve.',
		'checks' => array( 'Current backups and restore options', 'Hosting logs, PHP version, SSL, DNS, and redirects', 'Recent plugin, theme, content, or platform changes', 'Critical flows: checkout, forms, login, search, and mobile navigation', 'Tracking tags and conversion events', 'A prioritized repair list with risk and effort notes' ),
		'deliverables' => array( 'Emergency findings report', 'Prioritized repair plan', 'Critical flow test notes', 'Tracking issue summary', 'Hosting/DNS recommendations', 'Improvement backlog' ),
		'cta_title' => 'Triage the issue before it becomes the new normal.',
		'cta_copy' => 'Send the symptoms, timing, recent changes, and access status. Northstar will identify the first responsible diagnostic path.',
		'cta_button' => 'Start rescue diagnostics',
	)
);
