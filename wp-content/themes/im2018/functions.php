<?php
/**
 * im2018 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package im2018
 */
 
function printThemePath() {
   echo get_site_url() . '/wp-content/themes/' . get_template();
}

if ( ! function_exists( 'im2018_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function im2018_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on im2018, use a find and replace
		 * to change 'im2018' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'im2018', get_template_directory() . '/languages' );

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
		
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'im2018' ),
			'secondary' => esc_html__( 'Secondary', 'im2018')
		) );


		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'im2018_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'im2018_setup' );


/** 
* Add Bootstrap Nav Walker
*/

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';






/** 
* Add featured image custom sizes
*/

add_image_size( 'im2018_thumbnail', 550, 700, true ); // width, height, crop
add_image_size( 'staff_headshot_thumbnail', 400, 400, true );





/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function im2018_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'im2018_content_width', 640 );
}
add_action( 'after_setup_theme', 'im2018_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
 
 
 function im2018_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'im2018' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'im2018' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'im2018_widgets_init' );


/**
 * Register ACF options pages
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title' => 'Case Study Archive Settings',
        'menu_title' => 'Case Study Archive',
        'parent_slug' => 'theme-general-settings',
    ));
    
     acf_add_options_sub_page(array(
        'page_title' => 'Webinars Archive Settings',
        'menu_title' => 'Webinars Archive',
        'parent_slug' => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
     acf_add_options_sub_page(array(
        'page_title'    => '404 Page Settings',
        'menu_title'    => '404 Page',
        'parent_slug'   => 'theme-general-settings',
    ));

    
}


/* add filetype json to media library */
function my_myme_types($mime_types){
$mime_types['json'] = 'json'; //Adding json extension
$mime_types['js'] = 'js'; //Adding js extension
return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);


// override default oEmbed size
function alx_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}
 
add_filter( 'embed_oembed_html', 'alx_embed_html', 10, 3 );



/* 
 * Customize Menu Item Classes
 * @author Bill Erickson
 * @link http://www.billerickson.net/customize-which-menu-item-is-marked-active/
 *
 * @param array $classes, current menu classes
 * @param object $item, current menu item
 * @param object $args, menu arguments
 * @return array $classes
 */
function be_menu_item_classes( $classes, $item, $args ) {

	

	if( ( is_singular( 'post' ) || is_category() ) && 'Blog' == $item->title )
		$classes[] = 'current-menu-item active';
		
	if( ( is_singular( 'case_studies' ) || is_tax( 'services') || is_tax( 'technologies' )  || is_tax( 'projectyear' )  ) && 'Our Work' == $item->title )
		$classes[] = 'current-menu-item active';
		
	if( ( is_singular( 'webinars' )  ) && 'Webinars' == $item->title )
		$classes[] = 'current-menu-item active';
		
	if( ( is_singular( 'team_bios' )  ) && 'About Us' == $item->title )
		$classes[] = 'current-menu-item active';
		
	
	
		
	return array_unique( $classes );
}
add_filter( 'nav_menu_css_class', 'be_menu_item_classes', 10, 3 );


/**
* Remove p tags from Shortcodes
*/
remove_filter( 'the_content', 'wpautop' );
add_filter( 'the_content', 'wpautop');
add_filter( 'the_content', 'shortcode_unautop');


// Remove p tags from images, scripts, and iframes.
function remove_some_ptags( $content ) {
  $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
  $content = preg_replace('/<p>\s*(<script.*>*.<\/script>)\s*<\/p>/iU', '\1', $content);
  $content = preg_replace('/<p>\s*(<iframe.*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
  return $content;
}
add_filter( 'the_content', 'remove_some_ptags' );

/**
 * Remove empty paragraphs created by wpautop()
 * @author Ryan Hamilton
 * @link https://gist.github.com/Fantikerz/5557617
 */
function remove_empty_p( $content ) {
	$content = force_balance_tags( $content );
	$content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
	$content = preg_replace( '~\s?<p>(\s| )+</p>\s?~', '', $content );
	return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);

add_filter('the_content', 'remove_empty_tags_recursive', 20, 1);
function remove_empty_tags_recursive ($str, $repto = NULL) {
         $str = force_balance_tags($str);
         //** Return if string not given or empty.
         if (!is_string ($str)
         || trim ($str) == '')
        return $str;
 
        //** Recursive empty HTML tags.
       return preg_replace (
 
              //** Pattern written by Junaid Atari.
              '~\s?<p>(\s|&nbsp;)+</p>\s?~',
 
             //** Replace with nothing if string empty.
             !is_string ($repto) ? '' : $repto,
 
            //** Source string
           $str
);}


/**
 * Enqueue scripts and styles.
 */
function im2018_scripts() {
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
	
	wp_enqueue_style( 'lightgallery-css',  get_template_directory_uri() . '/js/lightgallery/css/lightgallery.min.css');
	
	wp_enqueue_style( 'im2018-style', get_stylesheet_uri() );
	
	
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',  array('jquery'), '3.3.7', true);

	wp_enqueue_script( 'im2018-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'im2018-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'lottie', get_template_directory_uri() . '/js/lottie.js', array());
	
	wp_enqueue_script( 'lightgallery', get_template_directory_uri() . '/js/lightgallery/js/lightgallery.min.js', array('jquery'), true);

	wp_enqueue_script( 'im2018-main', get_template_directory_uri() . '/js/main.js', array('jquery'),  date("h:i:s"), true);
	
	
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'im2018_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

