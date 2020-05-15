<?php

/**

* Plugin Name: Fastgreece API

* Author URI: Fastgreece.com

*/
function fg_posts () {
	return 'eindpoint';
}


add_action('rest_api_init', function(){
	register_rest_route('fg/v1', 'posts', [

		'methods' => GET,

		'callback' => 'fg_posts', 

	]);
});
?>