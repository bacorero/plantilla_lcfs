<?php

//Registramos el menu superior
register_nav_menus(
	array(
		'menu' => 'Menu superior',));

//Imágenes
add_theme_support( 'post-thumbnails' );			//Habilitamos "imagen destacada" en el administrador
add_image_size( 'slider_thumbs', 450, 300, true);
add_image_size( 'list_articles_thumbs', 450, 350, true);

?>