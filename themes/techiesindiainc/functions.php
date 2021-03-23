<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfifteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentyfifteen' );

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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for custom logo.
	 *
	 * @since Twenty Fifteen 1.5
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	$color_scheme  = twentyfifteen_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentyfifteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );

	wp_enqueue_script( 'twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
	}

	wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_scripts' );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'twentyfifteen_search_form_modify' );

/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';


/*--------------------Custom-Post-Type-Portfolio--------------------*/

function portfolio_post_type() {
	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Portfolio' )
			),
		'public' => true,
		'menu_icon'=> 'dashicons-format-gallery',
		'has_archive' => true,
		'supports' => array( 'title', 'editor',  'thumbnail')
		)
	);
}
add_action( 'init', 'portfolio_post_type' );

function portfolio_taxonomies() {
    register_taxonomy(
        'portfolio-categories',
        'portfolio',
        array(
            'labels' => array(
                'name' => 'Portfolio Categories',
                'add_new_item' => 'Add New Portfolio Category',
                'new_item_name' => "New Portfolio Type"
            ),
			'public' => true,
            'show_ui' => true,
            'show_tagcloud' => false,
			'show_admin_column' => true,
			'query_var'   => true,
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'portfolio_taxonomies', 0 );

/*-------------------Custom-Post-Type-Culture----------------------*/

function culture_post_type() {
	register_post_type( 'culture',
		array(
			'labels' => array(
				'name' => __( 'Culture' ),
				'singular_name' => __( 'Culture' )
			),
		'public' => true,
		'menu_icon'=> 'dashicons-money',
		'has_archive' => true,
		'supports' => array( 'title', 'editor',  'thumbnail','custom-fields')
		)
	);
}
add_action( 'init', 'culture_post_type' );

function culture_taxonomies() {
    register_taxonomy(
        'culture-categories',
        'culture',
        array(
            'labels' => array(
                'name' => 'Culture Categories',
                'add_new_item' => 'Add New Culture Category',
                'new_item_name' => "New Culture Type"
            ),
			'public' => true,
            'show_ui' => true,
            'show_tagcloud' => false,
			'show_admin_column' => true,
			'query_var'   => true,
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'culture_taxonomies', 0 );

/*-------------------Custom-Post-Type-Team----------------------*/

function team_post_type() {
	register_post_type( 'team',
		array(
			'labels' => array(
				'name' => __( 'Team' ),
				'singular_name' => __( 'Team' )
			),
		'public' => true,
		'menu_icon'=> 'dashicons-businessman',
		'has_archive' => true,
		'supports' => array( 'title', 'editor',  'thumbnail')
		)
	);
}
add_action( 'init', 'team_post_type' );

function team_taxonomies() {
    register_taxonomy(
        'team-categories',
        'team',
        array(
            'labels' => array(
                'name' => 'Team Categories',
                'add_new_item' => 'Add New Team Category',
                'new_item_name' => "New Team Type"
            ),
			'public' => true,
            'show_ui' => true,
            'show_tagcloud' => false,
			'show_admin_column' => true,
			'query_var'   => true,
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'team_taxonomies', 0 );

/*-------------------Custom-Post-Type-Grow-Team----------------------*/

function growteam_post_type() {
	register_post_type( 'growteam',
		array(
			'labels' => array(
				'name' => __( 'Grow Team' ),
				'singular_name' => __( 'Grow Team' )
			),
		'public' => true,
		'menu_icon'=> 'dashicons-businessman',
		'has_archive' => true,
		'supports' => array( 'title', 'editor',  'thumbnail','custom-fields')
		)
	);
}
add_action( 'init', 'growteam_post_type' );

function growteam_taxonomies() {
    register_taxonomy(
        'growteam-categories',
        'growteam',
        array(
            'labels' => array(
                'name' => 'Grow Team Categories',
                'add_new_item' => 'Add New Grow Team Category',
                'new_item_name' => "New Grow Team Type"
            ),
			'public' => true,
            'show_ui' => true,
            'show_tagcloud' => false,
			'show_admin_column' => true,
			'query_var'   => true,
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'growteam_taxonomies', 0 );

/*-------------------Custom-Post-Type-Knowledge-Video----------------------*/

function video_post_type() {
	register_post_type( 'video',
		array(
			'labels' => array(
				'name' => __( 'Video' ),
				'singular_name' => __( 'Video' )
			),
		'public' => true,
		'menu_icon'=> 'dashicons-format-video',
		'has_archive' => true,
		'supports' => array( 'title', 'editor',  'thumbnail')
		)
	);
}
add_action( 'init', 'video_post_type' );

function video_taxonomies() {
    register_taxonomy(
        'video-categories',
        'video',
        array(
            'labels' => array(
                'name' => 'Video Categories',
                'add_new_item' => 'Add New Video Category',
                'new_item_name' => "New Video Type"
            ),
			'public' => true,
            'show_ui' => true,
            'show_tagcloud' => false,
			'show_admin_column' => true,
			'query_var'   => true,
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'video_taxonomies', 0 );

/*---------------------Custom-Post-Type-Career-------------------------*/

function career_post_type() {
	register_post_type( 'careers',
		array(
		'labels' => array(
			'name' => __( 'Careers' ),
			'singular_name' => __( 'Career' )
		),
		'public' => true,
		'menu_icon'=> 'dashicons-portfolio',
		'has_archive' => true,
		'supports' => array( 'title', 'editor',  'thumbnail', 'custom-fields')
		)
	);
}
add_action( 'init', 'career_post_type' );

function career_taxonomies() {
    register_taxonomy(
        'careers-categories',
        'careers',
        array(
            'labels' => array(
                'name' => 'Careers Categories',
                'add_new_item' => 'Add New Careers Category',
                'new_item_name' => "New Careers Type"
            ),
			'public' => true,
            'show_ui' => true,
            'show_tagcloud' => false,
			'show_admin_column' => true,
			'query_var'   => true,
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'career_taxonomies', 0 );

/*---------------------Custom-Post-Type-Capabilities-------------------------*/

 /*function Capabilities_post_type() {
	register_post_type( 'capabilitie'
		array(
		'labels' => array(
			'name' => __( 'Capabilities' ),
			'singular_name' => __( 'Capabilities' )
		),
		'public' => true,
		'menu_icon'=> 'dashicons-portfolio',
		'has_archive' => true,
		'supports' => array( 'title', 'editor',  'thumbnail', 'custom-fields')
		)
	);
}
add_action( 'init', 'capabilities_post_type' );

function capabilities_taxonomies() {
    register_taxonomy(
        'capabilities-categories',
        'capabilitie',
        array(
            'labels' => array(
                'name' => 'Capabilities Categories',
                'add_new_item' => 'Add New Services Category',
                'new_item_name' => "New Capabilities Type"
            ),
			'public' => true,
            'show_ui' => true,
            'show_tagcloud' => false,
			'show_admin_column' => true,
			'query_var'   => true,
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'capabilities_taxonomies', 0 );
*/
function new_excerpt_length($length) {
return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');


function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "/images/no-image.jpg";
  }
  return $first_img;
}


function webdesignreport_post_type() {
	register_post_type( 'designreport',
		array(
			'labels' => array(
				'name' => __( 'Web Design Report' ),
				'singular_name' => __( 'Web Design Report' )
			),
		'public' => true,
		'menu_icon'=> 'dashicons-businessman',
		'has_archive' => true,
		'supports' => array( 'title', 'editor',  'thumbnail','custom-fields')
		)
	);
}
add_action( 'init', 'webdesignreport_post_type' );
function designreport_taxonomies() {
    register_taxonomy(
        'report-company',
        'designreport',
        array(
            'labels' => array(
                'name' => 'Company Categories',
                'add_new_item' => 'Add New Company Category',
                'new_item_name' => "New Company Type"
            ),
			'public' => true,
            'show_ui' => true,
            'show_tagcloud' => false,
			'show_admin_column' => true,
			'query_var'   => true,
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'designreport_taxonomies', 0 );


/*------------------Testimonials------------------*/
function testimonials_post_type() {
	register_post_type( 'testimonials',
		array(
			'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonials' )
			),
		'public' => true,
		'menu_icon'=> 'dashicons-businessman',
		'has_archive' => true,
		'supports' => array( 'title', 'editor',  'thumbnail', 'custom-fields')
		)
	);
}
add_action( 'init', 'testimonials_post_type' );

function my_function( $query ){
   if ( is_post_type_archive( 'careers' ) ) {
        wp_redirect(home_url('career'));
   }
}
add_action( 'pre_get_posts', 'my_function' );

add_filter( 'wp_get_attachment_image_attributes', function( $attr )
{
    if( isset( $attr['sizes'] ) )
        unset( $attr['sizes'] );

    if( isset( $attr['srcset'] ) )
        unset( $attr['srcset'] );

    return $attr;

 }, PHP_INT_MAX );

// Override the calculated image sizes
add_filter( 'wp_calculate_image_sizes', '__return_empty_array',  PHP_INT_MAX );

// Override the calculated image sources
add_filter( 'wp_calculate_image_srcset', '__return_empty_array', PHP_INT_MAX );

// Remove the reponsive stuff from the content
remove_filter( 'the_content', 'wp_make_content_images_responsive' );

//Exclude pages from WordPress Search
if (!is_admin()) {
function wpb_search_filter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','wpb_search_filter');
}

//Contact form 7 page redirection
add_action( 'wp_footer', 'mycustom_wp_footer' );

function mycustom_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
   if(192 == event.detail.contactFormId || 4 == event.detail.contactFormId || 3121 == event.detail.contactFormId || 782 == event.detail.contactFormId || 191 == event.detail.contactFormId ) { // Sends sumissions on form 947 to the first thank you page
    location = '/thankyou/';
    } else { // Sends submissions on all unaccounted for forms to the third thank you page
        location = '/thank-you/';
    }
}, false );
</script>
<?php
}

//** --remove - version-- */
add_filter( 'style_loader_src',  'sdt_remove_ver_css_js', 9999, 2 );
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999, 2 );

function sdt_remove_ver_css_js( $src, $handle )
{
    $handles_with_version = [ 'style' ]; // <-- Adjust to your needs!

    if ( strpos( $src, 'ver=' ) && ! in_array( $handle, $handles_with_version, true ) )
        $src = remove_query_arg( 'ver', $src );

    return $src;
}
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

//Search

function __search_by_title_only( $search, &$wp_query )
{
    global $wpdb;
 
    if ( empty( $search ) )
        return $search; // skip processing - no search term in query
 
    $q = $wp_query->query_vars;    
    $n = ! empty( $q['exact'] ) ? '' : '%';
 
    $search =
    $searchand = '';
 
    foreach ( (array) $q['search_terms'] as $term ) {
        $term = esc_sql( like_escape( $term ) );
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
 
    if ( ! empty( $search ) ) {
        $search = " AND ({$search}) ";
        if ( ! is_user_logged_in() )
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
 
    return $search;
}
add_filter( 'posts_search', '__search_by_title_only', 500, 2 );

add_filter( 'big_image_size_threshold', '__return_false' );