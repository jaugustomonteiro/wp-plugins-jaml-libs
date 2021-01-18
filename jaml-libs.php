<?php
/*
Plugin name: Jaml Libs
Plugin uri: 
Description: Plugin para adicionar libs com bootstrap e outros
Version: 1.0
Author: Augusto Monteiro
Author uri: 
License: GPLv2 or later
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

define( 'JAMLLIBS_DIR', plugin_dir_path( __FILE__ ) );

require_once JAMLLIBS_DIR . 'inc/jaml-script.php';
