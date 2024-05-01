<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage JITILAB
 * @since JITILAB 1.0
 */

if ( ! function_exists( 'jitilab_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since JITILAB 1.0
	 *
	 * @return void
	 */
	function jitilab_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on JITILAB, use a find and replace
		 * to change 'jitilab' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jitilab', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

    /**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1366, 768 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'jitilab' )
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 354;
		$logo_height = 81;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

	    // Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

		// Remove feed icon link from legacy RSS widget.
		add_filter( 'rss_widget_feed_link', '__return_empty_string' );
	}
}
add_action( 'after_setup_theme', 'jitilab_setup' );

/**
 * Register widget area.
 *
 * @since JITILAB 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function jitilab_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'jitilab' ),
			'id'            => 'primary-sidebar',
			'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'jitilab' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'jitilab_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since JITILAB 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function jitilab_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'jitilab_content_width', 675 );
}
add_action( 'after_setup_theme', 'jitilab_content_width', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since JITILAB 1.0
 *
 * @return void
 */
function jitilab_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	
	// Styles
  wp_enqueue_style( 'jitilab-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Single post
	if(is_singular('post') || is_singular('page')) {
		// Styles

		wp_deregister_style('wp-block-library');
		wp_deregister_style('wp-block-library-theme-inline'); // no effect
		wp_deregister_style('classic-theme-styles');
		wp_deregister_style('global-styles-inline'); // no effect

		// Font Awesome
		wp_enqueue_style('jitilab-fa-style', get_template_directory_uri() . '/dist/fonts/fontawesome-free-6.5.2-web/css/fontawesome.min.css', array(), filemtime(get_template_directory() . '/dist/fonts/fontawesome-free-6.5.2-web/css/fontawesome.min.css'), 'all');
		wp_enqueue_style('jitilab-fa-brands-style', get_template_directory_uri() . '/dist/fonts/fontawesome-free-6.5.2-web/css/brands.min.css', array(), filemtime(get_template_directory() . '/dist/fonts/fontawesome-free-6.5.2-web/css/brands.min.css'), 'all');
		wp_enqueue_style('jitilab-fa-solid-style', get_template_directory_uri() . '/dist/fonts/fontawesome-free-6.5.2-web/css/solid.min.css', array(), filemtime(get_template_directory() . '/dist/fonts/fontawesome-free-6.5.2-web/css/solid.min.css'), 'all');

		// Frontpage
		if(is_home() || is_front_page()) {
			// Owl
			wp_enqueue_style('jitilab-owl-carousel-style', get_template_directory_uri() . '/dist/owl/assets/owl.carousel.min.css', array(), filemtime(get_template_directory() . '/dist/owl/assets/owl.carousel.min.css'), 'all');
			wp_enqueue_style('jitilab-owl-theme-style', get_template_directory_uri() . '/dist/owl/assets/owl.theme.default.min.css', array(), filemtime(get_template_directory() . '/dist/owl/assets/owl.theme.default.min.css'), 'all');

			// Main CSS
			wp_enqueue_style('jitilab-home-style', get_template_directory_uri() . '/dist/css/home.css', array(), filemtime(get_template_directory() . '/dist/css/home.css'), 'all');

			// Scripts

			// Owl
			wp_enqueue_script( 'jitilab-owl-carousel-js', get_template_directory_uri() . '/dist/owl/owl.carousel.min.js', array('jitilab-jquery-js'), filemtime(get_template_directory() . '/dist/owl/owl.carousel.min.js'), true );

			// JS
			wp_enqueue_script( 'jitilab-home-js', get_template_directory_uri() . '/dist/js/home.js', array('jitilab-jquery-js', 'jitilab-main-js'), filemtime(get_template_directory() . '/dist/js/home.js'), true );
		}
	}

	// Scripts
	if(!is_admin()) {
		wp_dequeue_script( 'jquery');
    wp_deregister_script( 'jquery');

		wp_enqueue_script( 'jitilab-jquery-js', get_template_directory_uri() . '/dist/js/jquery-3.7.1.min.js', array(), '3.7.1', true );
	}

	wp_enqueue_script( 'jitilab-main-js', get_template_directory_uri() . '/dist/js/main.js', array('jitilab-jquery-js'), filemtime(get_template_directory() . '/dist/js/main.js'), true );
}
add_action( 'wp_enqueue_scripts', 'jitilab_scripts' );

/**
 * Calculate classes for the main <html> element.
 *
 * @since JITILAB 1.0
 *
 * @return void
 */
function jitilab_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since JITILAB 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'jitilab_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

if ( ! function_exists( 'wp_get_list_item_separator' ) ) :
	/**
	 * Retrieves the list item separator based on the locale.
	 *
	 * Added for backward compatibility to support pre-6.0.0 WordPress versions.
	 *
	 * @since 6.0.0
	 */
	function wp_get_list_item_separator() {
		/* translators: Used between list items, there is a space after the comma. */
		return __( ', ', 'jitilab' );
	}
endif;

// Add body class
add_filter( 'body_class', 'jitilab_default_body_class' );
function jitilab_default_body_class( $classes ) {
	$classes[] = 'antialiased bg-body text-body font-body jtl-bg-white';

	return $classes;
}

// Set upload size limit (media)
add_filter( 'upload_size_limit', 'jitilab_set_upload_size_limit' );
function jitilab_set_upload_size_limit( $bytes ) {
  return 1000000; // 1 megabytes
}

// Get post thumbnail with default image
if(!function_exists('jitilab_get_the_post_thumbnail_url')) {
	function jitilab_get_the_post_thumbnail_url($post_id) {
		$thumbnail_url = esc_url(get_the_post_thumbnail_url($post_id, 'full'));
		
		if($thumbnail_url === '') {
			return '';
		} else {
			$attachment_id = attachment_url_to_postid($thumbnail_url);
			$thumbnail_path = wp_get_original_image_path($attachment_id);

			$ext = pathinfo($thumbnail_url, PATHINFO_EXTENSION);
			$webp_img = str_replace('.' . $ext, '.webp', $thumbnail_path);

			if (file_exists($webp_img)) {
				return str_replace('.' . $ext, '.webp', $thumbnail_url);
			}

			return $thumbnail_url;
		}
	}
}

// Auto create webp image from jpeg/png
if(!function_exists('jitilab_create_webp_image')) {
	add_filter('wp_handle_upload', 'jitilab_create_webp_image');
	function jitilab_create_webp_image($file) {
		$ext = pathinfo($file['url'], PATHINFO_EXTENSION);

		if($file['type'] == 'image/png') {
			$img = imagecreatefrompng($file['file']);
			
			imagepalettetotruecolor($img);  
			imagealphablending($img, true);
			imagesavealpha($img, true);
			imagewebp($img, str_replace('.' . $ext, '.webp', $file['file']), 100);
			imagedestroy($img);
		}

		if($file['type'] == 'image/jpeg') {
			$img = imagecreatefromjpeg($file['file']);
			
			imagepalettetotruecolor($img);  
			imagealphablending($img, true);
			imagesavealpha($img, true);
			imagewebp($img, str_replace('.' . $ext, '.webp', $file['file']), 100);
			imagedestroy($img);
		}

		return $file;
	}
}

// Auto delete webp image if exists
if(!function_exists('jitilab_delete_webp_image')) {
	add_filter('wp_delete_file', 'jitilab_delete_webp_image');
	function jitilab_delete_webp_image($file) {
		$ext = pathinfo($file, PATHINFO_EXTENSION);

		if(file_exists(str_replace('.' . $ext, '.webp', $file))) {
			@unlink(str_replace('.' . $ext, '.webp', $file));
		}

		return $file;
	}
}

// Modify search query
if(!function_exists('jitilab_modify_search_query')) {
	function jitilab_modify_search_query( $query ) {
		if($query->is_main_query() && $query->is_search() && !is_admin()) {
			$query->set('post_type', array('post'));
			$query->set('post_status', 'publish');
		}
	}

	add_action( 'pre_get_posts', 'jitilab_modify_search_query' );
}

// Set post views
if(!function_exists('jitilab_set_post_views')) {
	function jitilab_set_post_views($post_id) {
		$count_key = "jitilab_post_views_count";
		$count = get_post_meta($post_id, $count_key, true);

		if($count === '') {
			$count = 1;

			delete_post_meta($post_id, $count_key);
			add_post_meta($post_id, $count_key, 1);
		} else {
			$count++;

			update_post_meta($post_id, $count_key, $count);
		}
	}
}

//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// Custom functions
if(!function_exists('jitilab_get_default_logo_url')) {
	function jitilab_get_default_logo_url() {
		return get_template_directory_uri() . '/dist/img/logo.webp';
	}
}

// Delete all attached media before delete the post
add_action( 'before_delete_post', function( $id ) {
	$attachments = get_attached_media( '', $id );
	foreach ($attachments as $attachment) {
		wp_delete_attachment( $attachment->ID, 'true' );
	}
} );

// Modify posts per page for archive and search page
if(!function_exists('jitilab_archive_pagesize')) {
	function jitilab_archive_pagesize( $query ) {
		if ( ! is_admin() && $query->is_main_query() && (is_archive() || is_search()) ) {
			$query->set( 'posts_per_page', 12 );
			
			return;
		}
	}
	add_action( 'pre_get_posts', 'jitilab_archive_pagesize', 1 );
}

// Lazyload img for the content
if(!function_exists('jitilab_lazyload_img_the_content')) {
	function jitilab_lazyload_img_the_content($the_content) {
		if(is_admin() || !is_singular()) {
			return;
		}

		if($the_content === '') {
			return;
		}
		
		// Create a new istance of DOMDocument
		$post = new DOMDocument();
		libxml_use_internal_errors(true);
		// Load $the_content as HTML
		$post->loadHTML($the_content);
		libxml_clear_errors();
		// Look up for all the <img> tags.
		$imgs = $post->getElementsByTagName('img');

		// Iteration time
		foreach( $imgs as $img ) {
			// Let's make sure the img has not been already manipulated by us
			// by checking if it has a data-src attribute (we could also check
			// if it has the fs-img class, or whatever check you might feel is
			// the most appropriate.
			if( $img->hasAttribute('data-image') ) continue;

			// Also, let's check that the <img> we found is not child of a <noscript>
			// tag, we want to leave those alone as well.
			if( $img->parentNode->tagName == 'noscript' ) continue;

			// Let's clone the node for later usage.
			$clone = $img->cloneNode();

			// Get the src attribute, remove it from the element, swap it with
			// data-src
			$src = $img->getAttribute('src');
			$img->removeAttribute('src');   
			$img->setAttribute('data-image', $src);

			// Get the class and add jtl-lazyload to the existing classes
			$imgClass = $img->getAttribute('class');
			$img->setAttribute('class', $imgClass . ' jtl-lazyload');

			// Let's create the <noscript> element and append our original
			// tag, which we cloned earlier, as its child. Then, let's insert
			// it before our manipulated element
			$no_script = $post->createElement('noscript');
			$no_script->appendChild($clone);
			$img->parentNode->insertBefore($no_script, $img);
		};

		return $post->saveHTML();
	}

	add_filter('the_content', 'jitilab_lazyload_img_the_content');
}

// Lazyload img for the content
if(!function_exists('jitilab_get_formatted_phone_number')) {
	function jitilab_get_formatted_phone_number($phone) {
		return preg_replace("/[^+0-9]/", '', $phone);
	}
}