<?php
//*****************************************************
//******************** LINK CSS ***********************
//*****************************************************

// MAIN STYLE SHEET REQUIRED BY WORDPRESS
wp_enqueue_style( 'style', get_stylesheet_uri() );


// LOAD IN ALL STYLES COMPILED BY GULP
function load_styles() {
	wp_enqueue_style( 'main.min', get_template_directory_uri() . '/dist/css/main.min.css');
}
add_action('wp_enqueue_scripts', 'load_styles');





//*****************************************************
//******************** LINK JS ************************
//*****************************************************

// LOAD IN JQUERY
wp_enqueue_script( 'jquery' );


// LOAD IN ALL SCRIPTS COMPILED BY JS
function scripts_loadin() {
wp_enqueue_script( 'devwp', get_template_directory_uri() . '/dist/js/devwp.js');
}
add_action('wp_enqueue_scripts', 'scripts_loadin');



//*****************************************************
//********************* FONTS *************************
//*****************************************************

//Merriweather Registration
wp_register_style( 'merriweather_font', 'https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300' );
wp_enqueue_style('merriweather_font');


//Source Sans Pro Registration
wp_register_style( 'source_sans_font', 'https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap' );
wp_enqueue_style('source_sans_font');


//*****************************************************
//*************** MENU REGISTRATIONS ******************
//*****************************************************

//*********** Header ***********
function register_my_menu() {
    register_nav_menu('header-menu', ( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


//*********** Footer Col 1 ***********
function register_col_1() {
    register_nav_menu('footer-column-1', ( 'Footer Column 1' ));
}
add_action( 'init', 'register_col_1' );

//*********** Footer Col 2 ***********
function register_col_2() {
    register_nav_menu('footer-column-2', ( 'Footer Column 2' ));
}
add_action( 'init', 'register_col_2' );

//*********** Footer Col 3 ***********
function register_col_3() {
    register_nav_menu('footer-column-3', ( 'Footer Column 3' ));
}
add_action( 'init', 'register_col_3' );

?>