<?php

	/**
	 * Define location for a menu
	 *
	 * The first parameter is the ID value used to reference
	 * the menu in the wp_nav_menu function (see header.php)
	 *
	 * The second paramter is the text that appears in the 
	 * WordPress admin to describe the menu locatin -- notes from Chris Maissan
	 */
	register_nav_menu( 'main-menu', 'Primary site navigation' );

	/**
	 * Define a sidebar
	 *
	 * Accepts an array of configuration options
	 *
	 * "id" is used to reference the sidebar in the 
	 * dynamic_sidebar function (see sidebar.php)
	 *
	 * "name" is the text that appears in the WordPress admin
	 * to describe the sidebar or widget area -- notes from Chris Maissan
	 */
	register_sidebar( array(
		'id' => 'sidebar-right',
		'name' => 'Right Sidebar'
	) );


	/** stop WordPress re-ordering the category list */
	function taxonomy_checklist_checked_ontop_filter ($args)
		{
		    $args['checked_ontop'] = false;
		    return $args;
		}
		add_filter('wp_terms_checklist_args','taxonomy_checklist_checked_ontop_filter');

		?>