<?php
/**
 * Bruno functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bruno
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.35' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bruno_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Bruno, use a find and replace
		* to change 'bruno' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bruno', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'bruno' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'bruno_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'bruno_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bruno_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bruno_content_width', 640 );
}
add_action( 'after_setup_theme', 'bruno_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bruno_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bruno' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bruno' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bruno_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bruno_scripts() {

	// css 
	wp_enqueue_style( 'bruno-swiper', get_template_directory_uri() . '/css/swiper.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'bruno-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bruno-style', 'rtl', 'replace' );

	// Js
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), _S_VERSION );
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), _S_VERSION );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), _S_VERSION, true );

	if ( is_singular('destination') ) {
		wp_enqueue_script( 'destinations', get_template_directory_uri() . '/js/destinations.js', array('jquery'), _S_VERSION, true );
	}
	if ( is_singular('destination') ) {
		wp_enqueue_script( 'location', get_template_directory_uri() . '/js/location.js', array('jquery'), _S_VERSION, true );
	}
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bruno_scripts' );

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

/**
 * Load more posts by @webozza
 */
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

function load_more_posts()
{
    $page = $_POST['page'];
    $destinations = array(
        'post_type' => 'destination',
        'posts_per_page' => 50,
        'paged' => $page,
    );
    $loop = new WP_Query($destinations);
    ob_start();
    if ($loop->have_posts()) {
        while ($loop->have_posts()) {
            $loop->the_post();
            ?>
<!-- Your post markup here -->
<div class="custom-single-post">
    <a href="<?= get_permalink() ?>">
        <?php $thumbnail_url =  get_the_post_thumbnail_url(get_the_ID(), 'full');
					?>
        <img src="<?php echo $thumbnail_url; ?>" alt="Featured Image">
        <div class="content-box">
            <div class="place-name">
                <p><?php the_title(); ?></p>
            </div>
            <div class="content">
                <p><?php include(get_template_directory() . '/content-loop.php'); ?></p>
            </div>
        </div>
        <a class="post-link" href="<?= get_permalink()?>">
            <div><img src="<?= get_template_directory_uri()?>/img/icons/botao.png " alt=""></div>
        </a>
    </a>
</div>

<?php
        }
        wp_reset_postdata();
    }
    $response = ob_get_clean();
    echo $response;
    wp_die();
}