<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_framework_theme'),
		'two' => __('Two', 'options_framework_theme'),
		'three' => __('Three', 'options_framework_theme'),
		'four' => __('Four', 'options_framework_theme'),
		'five' => __('Five', 'options_framework_theme')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_framework_theme'),
		'two' => __('Pancake', 'options_framework_theme'),
		'three' => __('Omelette', 'options_framework_theme'),
		'four' => __('Crepe', 'options_framework_theme'),
		'five' => __('Waffle', 'options_framework_theme')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );
		
	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __('Basic Settings', 'options_framework_theme'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Logo', 'options_framework_theme'),
		'desc' => __('Upload Your Logo.', 'options_framework_theme'),
		'id' => 'logo_uploader',
		'type' => 'upload');

	/*$options[] = array(
		'name' => __('Years of experience', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'years_of_experience',
		'type' => 'text');

	$options[] = array(
		'name' => __('Satisfied clients', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'satisfied_clients',
		'type' => 'text');

	$options[] = array(
		'name' => __('Products in our office', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'products_in_our_office',
		'type' => 'text');*/



	/*$options[] = array(
		'name' =>  __('Background', 'options_framework_theme'),
		'desc' => __('Change the background.', 'options_framework_theme'),
		'id' => 'example_background',
		'std' => $background_defaults,
		'type' => 'background' );*/

	/*$options[] = array( 'name' => __('Typography', 'options_framework_theme'),
		'desc' => __('Typography.', 'options_framework_theme'),
		'id' => "typography",
		'std' => $typography_defaults,
		'type' => 'typography' );

	$options[] = array(
		'name' => __('Content', 'options_framework_theme'),
		'desc' => __('Banner Content', 'options_framework_theme'),
		'id' => 'banner_content',
		'std' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor laborum quasi',
		'type' => 'textarea');*/

	
	// $options[] = array(
	// 	'name' => __('Our Partners & Clients', 'options_framework_theme'),
	// 	'type' => 'heading');
	
	// $options[] = array(
	// 	'name' => __('Heading', 'options_framework_theme'),
	// 	'desc' => __('', 'options_framework_theme'),
	// 	'id' => 'opc_heading',
	// 	'type' => 'text');

	// $options[] = array(
	// 	'name' => __('Content', 'options_framework_theme'),
	// 	'desc' => __('', 'options_framework_theme'),
	// 	'id' => 'opc_content',
	// 	'type' => 'textarea');


	$options[] = array(
		'name' => __('Social Media Settings', 'options_framework_theme'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Facebook', 'options_framework_theme'),
		'desc' => __('ex. http://facebook.com/username', 'options_framework_theme'),
		'id' => 'link_facebook',
		'std' => 'http://facebook.com/',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Twitter', 'options_framework_theme'),
		'desc' => __('ex. http://twitter.com/username', 'options_framework_theme'),
		'id' => 'link_twitter',
		'std' => 'http://twitter.com/',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('GooglePlus', 'options_framework_theme'),
		'desc' => __('ex. http://plus.google.com/username', 'options_framework_theme'),
		'id' => 'link_gplus',
		'std' => 'http://plus.google.com.com/',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Pinterest', 'options_framework_theme'),
		'desc' => __('ex. http://plus.google.com/username', 'options_framework_theme'),
		'id' => 'link_pinterest',
		'std' => 'http://pinterest.com/',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Youtube', 'options_framework_theme'),
		'desc' => __('ex. http://plus.google.com/username', 'options_framework_theme'),
		'id' => 'link_youtube',
		'std' => 'http://youtube.com/',
		'type' => 'text');

	$options[] = array(
		'name' => __('Forms and Contact Details', 'options_framework_theme'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Contact Number', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'contact_number',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => __('Contact Address', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'contact_address',
		'std' => '',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Fax', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'contact_fax',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => __('Email', 'options_framework_theme'),
		'desc' => __('', 'options_framework_theme'),
		'id' => 'contact_email',
		'std' => '',
		'type' => 'text');


	$options[] = array(
		'name' => __('Footer', 'options_framework_theme'),
		'type' => 'heading');

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);
	
	$options[] = array(
		'name' => __('Copyright Text Editor', 'options_framework_theme'),
		'id' => 'copyright_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

	return $options;
}