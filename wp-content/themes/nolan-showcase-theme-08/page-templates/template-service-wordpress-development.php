<?php
/**
 * Template Name: Service - WordPress Development
 *
 * @package Nolan_Showcase_Theme_08
 */

nst08_render_service_page(
	array(
		'eyebrow'         => 'WordPress development',
		'title'           => 'Custom WordPress builds for teams that need control, speed, and maintainable publishing.',
		'intro'           => 'Northstar builds classic WordPress themes, structured page systems, and editor-friendly workflows that avoid fragile plugin piles while still supporting real marketing operations.',
		'meta'            => array(
			array( 'label' => 'Best fit', 'value' => 'Content-rich sites' ),
			array( 'label' => 'Core focus', 'value' => 'Theme + editor systems' ),
			array( 'label' => 'After launch', 'value' => 'Security and maintenance' ),
		),
		'overview_label'  => 'Build scope',
		'overview_title'  => 'A WordPress implementation that respects editors, developers, and future maintenance.',
		'overview_copy'   => 'Projects can include custom themes, classic theme support, block/editor compatibility, plugin integration, performance optimization, security review, hosting migrations, content modeling, and launch QA.',
		'cards'           => array(
			array( 'index' => '01', 'title' => 'Custom themes', 'copy' => 'Readable templates, reusable sections, responsive CSS, accessible navigation, and a visual system that does not depend on remote libraries.' ),
			array( 'index' => '02', 'title' => 'Editor compatibility', 'copy' => 'Fields, page templates, and content patterns are planned so non-technical teams can publish without breaking the layout.' ),
			array( 'index' => '03', 'title' => 'Plugin integration', 'copy' => 'Forms, SEO tools, memberships, search, analytics, and CRM plugins are connected with a bias toward fewer moving parts.' ),
			array( 'index' => '04', 'title' => 'Performance', 'copy' => 'CSS, JavaScript, image strategy, caching assumptions, database behavior, and hosting constraints are reviewed before launch.' ),
			array( 'index' => '05', 'title' => 'Security', 'copy' => 'Update practices, user roles, backups, plugin exposure, forms, spam controls, and admin hygiene are included in the implementation plan.' ),
			array( 'index' => '06', 'title' => 'Migrations', 'copy' => 'Hosting moves, URL changes, redirects, DNS, search visibility, and tracking continuity are handled with a launch checklist.' ),
		),
		'checklist_label' => 'Audit points',
		'checklist_title' => 'What gets checked before the build path is approved.',
		'checks'          => array( 'Theme and plugin inventory', 'Editor workflow and reusable content needs', 'Hosting, cache, DNS, and backup status', 'Current PageSpeed and Core Web Vitals issues', 'Security exposure and user role hygiene', 'Redirects, SEO foundations, and tracking continuity' ),
		'deliverables'    => array( 'Custom classic theme templates', 'Responsive component system', 'Plugin integration notes', 'Migration and launch checklist', 'Performance and security recommendations', 'Editor handoff guide' ),
		'cta_title'       => 'Plan a WordPress build that will still make sense six months after launch.',
		'cta_copy'        => 'Share the current site, the publishing workflow, and the business goals. Northstar will map a build scope with technical risks called out early.',
		'cta_button'      => 'Start a WordPress audit',
	)
);
