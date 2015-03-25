<?php
/**
 * Theme functions
 *
 * Sets up the theme and provides some helper functions.
 *
 * @package Pine
 */


/* OEMBED SIZING
 ========================== */
 
if ( ! isset( $content_width ) )
	$content_width = 600;
	
	
/* THEME SETUP
 ========================== */
 
if ( ! function_exists( 'pine_setup' ) ):
function pine_setup() {

	// Available for translation
	load_theme_textdomain( 'pine', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Add custom nav menu support
	register_nav_menu( 'primary', __( 'Primary Menu', 'pine' ) );
	
	// Add featured image support
	add_theme_support( 'post-thumbnails' );
	
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
	
	// Add custom image sizes
	// add_image_size( 'name', 500, 300 );
}
endif;
add_action( 'after_setup_theme', 'pine_setup' );

/* THEME LOGIN LOGO
 ========================== */
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/site-login-logo.png);
            background-size: 80px;
            margin: 0 auto;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Change the link values so the logo links to my WordPress site

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Pine';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* SIDEBARS & WIDGET AREAS
 ========================== */
function pine_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'pine' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'pine_widgets_init' );


/* ENQUEUE SCRIPTS & STYLES
 ========================== */
function pine_scripts() {
	// theme style.css file
	wp_enqueue_style( 'pine-style', get_stylesheet_uri() );
	
	// threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	// vendor scripts
//	wp_enqueue_script(
//		'vendor',
//		get_template_directory_uri() . '/assets/vendor/newscript.js',
//		array('jquery')
//	);
	// theme scripts
	wp_enqueue_script(
		'theme-init',
		get_template_directory_uri() . '/assets/theme.js',
		array('jquery')
	);
}    
add_action('wp_enqueue_scripts', 'pine_scripts');


/* MISC EXTRAS
 ========================== */
 
// Comments & pingbacks display template
include('inc/functions/comments.php');

// Optional Customizations
// Includes: TinyMCE tweaks, admin menu & bar settings, query overrides
include('inc/functions/customizations.php');