<?
add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_enqueue_scripts', 'script_theme' );

function style_theme() {
    wp_enqueue_style( 'styles', get_stylesheet_uri() );
    wp_enqueue_style( 'icon', get_template_directory_uri() . '/assets/css/group.ico' );
    wp_enqueue_style( 'datepicker', get_template_directory_uri() . '/assets/css/datepicker.css' );
    wp_enqueue_style( 'nouislider', get_template_directory_uri() . '/assets/css/nouislider.css' );
    wp_enqueue_style( 'Quicksand', 'https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap' );
    wp_enqueue_style( 'Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap' );
    wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
}

function script_theme() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js' );
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'datepicker', get_template_directory_uri() . '/assets/js/plagins/datepicker.js', [ 'jquery' ], null, false);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [ 'jquery' ], null, false );
    wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', [ 'jquery' ], null, false );
    wp_enqueue_script( 'mask', get_template_directory_uri() . '/assets/js/plagins/jquery.mask.min.js', [ 'jquery' ], null, true );
}
