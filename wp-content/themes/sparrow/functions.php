<?php 

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );
add_action( 'after_setup_theme', 'menu_registration' );
add_action( 'widgets_init', 'register_my_widgets' );
add_filter( 'document_title_separator', 'tiltle_separator' );
// custom action
add_shortcode( 'my_short', 'short_function' );

function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Left sidebar',
		'id'            => "left_sidebar",
		'description'   => 'sidebar description',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widgettitle">',
		'after_title'   => "</h5>\n",
	) );
}

function menu_registration(){
	register_nav_menu( 'top_menu', 'Top menu');
	register_nav_menu( 'bottom_menu', 'Bottom menu');

	add_theme_support('title-tag');
	add_theme_support( 'post-thumbnails', array( 'post' ) );  

	add_image_size( 'post_thumb', 1300, 500, true );

	add_filter('excerpt_more', 'new_excerpt_more');	
	function new_excerpt_more($more) {
		global $post;
		return '<a href="' . get_permalink( $post->ID ) . '"> Read more...</a>';
	}

	add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
	function my_navigation_template( $template, $class ){
	/*
	Вид базового шаблона:
	<nav class="navigation %1$s" role="navigation">
		<h2 class="screen-reader-text">%2$s</h2>
		<div class="nav-links">%3$s</div>
	</nav>
	*/

	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}
}

function tiltle_separator( $sep ){
	$sep = ' | ';
	return $sep;
}

function style_theme(){
	wp_enqueue_style( 'style', get_stylesheet_uri() );	
	wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css' );
	wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css' );
	wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css' );
}

function scripts_theme(){
	wp_enqueue_script(  'init', get_template_directory_uri() . '/assets/js/init.js' );
	wp_enqueue_script(  'init', get_template_directory_uri() . '/assets/js/jquery.flexslider.js' );
	wp_enqueue_script(  'init', get_template_directory_uri() . '/assets/js/doubletaptogo.js' );


	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
	wp_enqueue_script( 'jquery' );

}


function short_function(){
	 return 'TEST ACTION';
}
?>

