<?php

// config

	add_theme_support( 'menus' );

// styles

	function minimos_load_styles() {
	
		// base
		wp_enqueue_style("normalize-css", get_template_directory_uri() . "/lib/css/normalize.css");
		wp_enqueue_style("grid-css", get_template_directory_uri() . "/lib/css/simplegrid.css");			
		
		// theme 
		wp_enqueue_style("core-css", get_template_directory_uri() . "/css/core.css");			
		
		// utility 
		wp_enqueue_style("utility-css", get_template_directory_uri() . "/css/utility.css");
				
		// devices		
		wp_enqueue_style("devices-css", get_template_directory_uri() . "/css/media.css");			
		
		// site overrides
		wp_enqueue_style("overrides-css", get_template_directory_uri() . "/style.css");					
	
	}

	add_action("wp_enqueue_scripts", "minimos_load_styles");

// scripts

	function minimos_load_scripts() {

		// replace default jquery		
		wp_deregister_script("jquery");
		wp_register_script("jquery", "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js", FALSE, "2.1.3");
		wp_enqueue_script("jquery");
		
		// common.js
		wp_register_script("common-js", get_template_directory_uri() . "/js/common.js", FALSE, FALSE, TRUE);
		wp_enqueue_script("common-js");
		
		
	}
	
	add_action("wp_enqueue_scripts", "minimos_load_scripts");