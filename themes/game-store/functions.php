<?php

function game_store_styles() {
	wp_enqueue_style(
		'game-general',
		get_template_directory_uri() . '/assets/css/gamestore.css',
		[],
		wp_get_theme()->get( 'Version' )
	);
	wp_enqueue_script(
		'gamestore-theme-related',
		get_template_directory_uri() . '/assets/js/gamestore-theme-related.js',
		[],
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'game_store_styles' );

function gamestore_google_fonts() {
	$font_url = 'https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap';
	wp_enqueue_style( 'gamestore-google-fonts', $font_url, [], null );
}
add_action( 'wp_enqueue_scripts', 'gamestore_google_fonts' );
