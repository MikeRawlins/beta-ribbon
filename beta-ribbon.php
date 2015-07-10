<?php
/**
 * @package beta-ribbon
 * @version 0.2
 */
/*
Plugin Name: Beta Ribbon
Plugin URI: https://turriffweb.co.uk/wordpress-plugins/beta-ribbon/
Description: When activated this will show a BETA ribbon on the top left corner of your website.
Author: Mike Rawlins
Version: 0.1
License:             
	DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
                    Version 2, December 2004

 Copyright (C) 2004 Sam Hocevar <sam@hocevar.net>

 Everyone is permitted to copy and distribute verbatim or modified
 copies of this license document, and changing it is allowed as long
 as the name is changed.

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

  0. You just DO WHAT THE FUCK YOU WANT TO.
Author URI: 
*/

function render_beta_ribbon() {
	$ribbon_url = plugins_url('beta-ribbon.png', __FILE__ );
	if(function_exists('is_admin_bar_showing')) {
		$padding_top = is_admin_bar_showing() ? 28 : 0;
	} else {
		$padding_top = 0;
	}
	echo "class='beta-ribbon' <img src='{$ribbon_url}' alt='This is BETA' style='position: absolute; top: ".$padding_top ."px; left: 0; z-index: 1000;  border:none;' />";
}
add_action('wp_footer', 'render_beta_ribbon');
