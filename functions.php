<?php

// styles

	function minimos_load_styles() {
	
		// libraries
		wp_enqueue_style("minimos-normalize", get_template_directory_uri() . "/lib/css/normalize.css");
		wp_enqueue_style("minimos-grid", get_template_directory_uri() . "/lib/css/simplegrid.css");			
		
		// theme css
		wp_enqueue_style("theme-core", get_template_directory_uri() . "/css/core.css");			
		wp_enqueue_style("theme-core", get_template_directory_uri() . "/css/skins.css");			
		wp_enqueue_style("theme-utility", get_template_directory_uri() . "/css/utility.css");
		wp_enqueue_style("theme-colors", get_template_directory_uri() . "/css/colors.css");			
		wp_enqueue_style("theme-media", get_template_directory_uri() . "/css/media.css");			
		wp_enqueue_style("theme-overrides", get_template_directory_uri() . "/style.css");					
	
	}

	add_action("wp_enqueue_scripts", "minimos_load_styles");

// scripts

	function minimos_load_scripts() {

		// replace default jquery		
		wp_deregister_script("jquery");
		wp_register_script("jquery", "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js", FALSE, "2.1.3");
		wp_enqueue_script("jquery");
		
		// common.js
		wp_register_script("theme-common", get_template_directory_uri() . "/js/common.js", FALSE, FALSE, TRUE);
		wp_enqueue_script("theme-common");
		
		
	}
	
	add_action("wp_enqueue_scripts", "minimos_load_scripts");