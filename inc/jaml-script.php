<?php

define( 'JAMLLIBS_PLUGIN_DIR', WP_PLUGIN_URL . '/jaml-libs/');

function jaml_script_load(){
	//CSS
	wp_enqueue_style( 'boxicons', JAMLLIBS_PLUGIN_DIR . 'libs/boxicons/css/boxicons.min.css');
    wp_enqueue_style( 'slimselect', JAMLLIBS_PLUGIN_DIR . 'libs/slimselect/slimselect.min.css');
	wp_enqueue_style( 'bootstrap', JAMLLIBS_PLUGIN_DIR . 'libs/bootstrap/bootstrap.min.css');
	
	
	//JAVASCRIPT
	wp_enqueue_script( 'jquery', JAMLLIBS_PLUGIN_DIR . 'libs/jquery/jquery-3.5.1.min.js');
	wp_enqueue_script( 'jquery.mask', JAMLLIBS_PLUGIN_DIR . 'libs/jquery/jquery.mask.js');
    wp_enqueue_script( 'slimselect', JAMLLIBS_PLUGIN_DIR . 'libs/slimselect/slimselect.min.js');
	wp_enqueue_script( 'bootstrap', JAMLLIBS_PLUGIN_DIR . 'libs/bootstrap/bootstrap.min.js');
}

add_action( 'wp_enqueue_scripts', 'jaml_script_load' );

