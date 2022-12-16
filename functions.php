
<?php
add_action( 'wp_enqueue_scripts', function () {


	wp_enqueue_style( 'style.min', get_template_directory_uri() . '/assets/css/style.min.css');
    wp_enqueue_style( 'fonts', 'https://fonts.gstatic.com');
    wp_enqueue_style( 'fonts-Sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap');
    wp_enqueue_style( 'fonts-Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,800;1,900&display=swap');
    wp_enqueue_style( 'nanogallery2.min', 'https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/css/nanogallery2.min.css?_v=20221212131123');


    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'nanogallery', 'https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'app.min', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), 'null', true );
});


add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('intro-slider'));
add_theme_support('title-tag');
add_theme_support('custom-logo');
show_admin_bar(false);

?> 

 
