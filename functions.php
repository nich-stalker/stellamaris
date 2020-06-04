<?php
function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap-cdn-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-cdn-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js' );
wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'test', get_stylesheet_directory_uri() . '/responsive.css' );
wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, false);
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.4.1', true );
}
 
add_theme_support( 'align-wide' );

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );
add_theme_support( 'post-thumbnails'); 
?>
<?php
	if ( get_field('imageforourservices') ) {
		echo 'style="background: url(' . get_field('imageforourservices') . ')"';
	}
?>
<?php
	if ( get_field('backgroundimageforsupportus') ) {
		echo 'style="background: url(' . get_field('backgroundimageforsupportus') . ')"';
	}
?>
<?php
	if ( get_field('imageforseafarersupport') ) {
		echo 'style="background: url(' . get_field('imageforseafarersupport') . ')"';
	}
?>
<?php
	if ( get_field('backgroundimagefordonate') ) {
		echo 'style="background: url(' . get_field('backgroundimagefordonate') . ')"';
	}
?>
<?php
	if ( get_field('backgroundimageforvolunteer') ) {
		echo 'style="background: url(' . get_field('backgroundimageforvolunteer') . ')"';
	}
?>
<?php
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );
?>