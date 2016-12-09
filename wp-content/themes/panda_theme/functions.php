<?php 

	function enqueue_styles() {
		// регистриуешь и подключаешь
		wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' ); 
		wp_enqueue_style('bootstrap'); 
		wp_enqueue_style( 'panda_theeme', get_stylesheet_uri());
		wp_register_style('animate', get_template_directory_uri() . '/css/animate.css' ); 
		wp_enqueue_style('animate'); 
		wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css' ); 
		wp_enqueue_style('flexslider'); 
		wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css' ); 
		wp_enqueue_style('responsive');
	} 
	
	add_action('wp_enqueue_scripts', 'enqueue_styles'); 

	function enqueue_scripts() { 
		wp_register_script('bootsrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true); 
		wp_enqueue_script('bootsrapjs');	
			
		wp_register_script('jquery.flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '', true); 
		wp_enqueue_script('jquery.flexslider');	
		wp_register_script('mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true); 
		wp_enqueue_script('mainjs');

	} 
	add_action('wp_enqueue_scripts', 'enqueue_scripts');
add_theme_support( 'post-thumbnails' ); 
/* Отключаем админ панель для всех, кроме администраторов.
if (!current_user_can('administrator')):
  show_admin_bar(false);
endif;*/
/* Отключаем админ панель для всех пользователей.
  show_admin_bar(false); */

?>
