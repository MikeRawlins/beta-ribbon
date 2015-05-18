<?php
/**
 * @package beta-ribbon
 * @version 0.1
 */
/*
Plugin Name: Beta Ribbon
Plugin URI: 
Description: When activated this will show a BETA ribbon on the top left corner of your website. Forked from Ubuntu Ribbon by Željko Popivoda
Author: Mike Rawlins
Version: 0.1
License: 
Author URI: 
*/

function render_beta_ribbon() {
	$ribbon_url = plugins_url('beta-ribbon.png', __FILE__ );
	if(function_exists('is_admin_bar_showing')) {
		$padding_top = is_admin_bar_showing() ? 28 : 0;
	} else {
		$padding_top = 0;
	}
	echo "class='beta-ribbon' <img src='{$ribbon_url}' alt='This is BETA' style='position: absolute; top: ".$padding_top ."px; left: 0; z-index: 100000;  border:none;' />";
}
add_action('wp_footer', 'render_beta_ribbon');
