<?php
   /*
   Plugin Name: QMap
   Plugin URI: placeholder
   Description: A plugin to show world map in the masthead of the website.
   Version: 2.0
   Author: sarangppande
   Author URI: www.sarangpande.me
   License: GPL2
   */

/**
* Function to add marker on the map
*/
function add_map(){
  $url =  plugins_url( 'html/test.html', __FILE__ );
	$map_div = '<div id="map-container"><div id="map">
  <iframe src="'.$url.'" frameborder="no" scrolling="no" width="100%" height="500px"></iframe></div></div>';
  if(is_home()){
	   echo $map_div;
  }
}
add_action('wpex_hook_header_bottom', 'add_map');
?>
