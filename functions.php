<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/admin.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/app.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/chivo.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/font-awesome.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/fontello.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/framework.backup.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/framework.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/inline.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/levirebrushed.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/linea-arrows-styles.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/linea-styles.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/patch.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/skins.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/slick-theme.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/superslides.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/wp.backup.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/wp.css' );



}
?>