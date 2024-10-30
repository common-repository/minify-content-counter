<?php

/*
Plugin Name: Minify Content Counter
Plugin URI: http://minify.pl
Description: Simple plugin to count the number of characters for post/page
Author: Mateusz Bassow
Version: 1.0
Author URI: http://minify.pl
*/
function loadMinifyScript() {
	wp_enqueue_script(
		'minify_count',
		plugins_url( '/js/minify_count.js' , __FILE__ ),
		array( 'jquery' )
	);
}

function minify_count() {
	$mylocale = get_bloginfo('language');
	if($mylocale == 'pl-PL') {
		$text = 'Liczba znaków';
	} else {
		$text = 'Number of characters';
	}
	echo '<div class="button">'.$text.': <span id="minify_counter">0</span></div>';
}

add_action( 'admin_enqueue_scripts', 'loadMinifyScript' ); 
add_action('media_buttons', 'minify_count', 11);

?>