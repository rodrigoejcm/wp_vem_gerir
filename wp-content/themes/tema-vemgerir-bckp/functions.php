<?php
/**
 * tema-vemgerir functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tema-vemgerir
 */

if ( ! function_exists( 'tema_vemgerir_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tema_vemgerir_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tema-vemgerir, use a find and replace
	 * to change 'tema-vemgerir' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'tema-vemgerir', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'tema-vemgerir' ),
		'secondary' => esc_html__( 'Secondary', 'tema-vemgerir' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'tema_vemgerir_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'tema_vemgerir_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tema_vemgerir_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tema_vemgerir_content_width', 640 );
}
add_action( 'after_setup_theme', 'tema_vemgerir_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tema_vemgerir_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tema-vemgerir' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tema-vemgerir' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tema_vemgerir_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tema_vemgerir_scripts() {
	

	wp_enqueue_style( 'tema-vemgerir-bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

	wp_enqueue_style( 'tema-vemgerir-style', get_stylesheet_uri() );

	wp_enqueue_style( 'tema-vemgerir-style-vemgerir', get_template_directory_uri() . '/css/vemgerir.css' );
	
	wp_enqueue_style( 'tema-vemgerir-style-slider', get_template_directory_uri() . '/css/slick.css' );

	wp_enqueue_script( 'tema-vemgerir-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tema-vemgerir-js-vemgerir', get_template_directory_uri() . '/js/vemgerir.js', array(), '20151215', true );

	wp_enqueue_script( 'tema-vemgerir-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'tema-vemgerir-font-typekit', 'https://use.typekit.net/vpp2bev.js'); 	

	wp_enqueue_script( 'tema-vemgerir-font-typekit-load', get_template_directory_uri() . '/js/typekit-load.js', array(), '20151215', false );


	/**
 	* verificar como incluir as tags integrity e crossorigins da cdn jquery
 	*/

	if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
        wp_deregister_script('tema-vemgerir-jquery-js');
        wp_register_script('tema-vemgerir-jquery-js', 'https://code.jquery.com/jquery-3.1.0.min.js', false, '3.1.0');
        wp_enqueue_script('tema-vemgerir-jquery-js');
    }

    if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
        wp_deregister_script('tema-vemgerir-bootstrap-js');
        wp_register_script('tema-vemgerir-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', false, '3.3.7');
        wp_enqueue_script('tema-vemgerir-bootstrap-js');
    }

    if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
        wp_deregister_script('tema-vemgerir-fontawesome-js');
        wp_register_script('tema-vemgerir-fontawesome-js', 'https://use.fontawesome.com/e92925d528.js', false);
        wp_enqueue_script('tema-vemgerir-fontawesome-js');
    }

	/*NAO DEVE SER IMPORTADO EM PRDUCAO*/
    if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
        wp_deregister_script('tema-vemgerir-holder-js');
        wp_register_script('tema-vemgerir-holder-js', 'https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.3/holder.min.js', false);
        wp_enqueue_script('tema-vemgerir-holder-js');
    }


    wp_enqueue_script( 'tema-vemgerir-slider', get_template_directory_uri() . '/js/slick.min.js', array(), '20151215', false );




	//wp_enqueue_scripts(' tema-vemgerir-jquery-js', 'https://code.jquery.com/jquery-3.1.0.min.js');

	//wp_enqueue_scripts(' tema-vemgerir-bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'tema_vemgerir_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
