<?php
/**
 * nctsa functions and definitions
 *
 * @package nctsa
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'nctsa_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nctsa_setup() {

	/*
* Make theme available for translation.
* Translations can be filed in the /languages/ directory.
* If you're building a theme based on nctsa, use a find and replace
* to change 'nctsa' to the name of your theme in all the template files
*/
	load_theme_textdomain( 'nctsa', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'nctsa' ),
		'mobile' => esc_html__( 'Mobile Menu', 'nctsa' ),
		'footer' => esc_html__( 'Footer Menu', 'nctsa' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nctsa_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // nctsa_setup
add_action( 'after_setup_theme', 'nctsa_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function nctsa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nctsa' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'nctsa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nctsa_scripts() {
	wp_enqueue_style( 'nctsa-style', get_stylesheet_uri() );

	wp_enqueue_style( 'foundation', get_stylesheet_directory_uri() . '/foundation/css/foundation.css' );

	wp_enqueue_script( 'nctsa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation/js/foundation.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'foundation-modernizr-js', get_template_directory_uri() . '/foundation/js/vendor/modernizr.js', array( 'jquery' ), '1', true );

	wp_enqueue_script( 'nctsa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'ajax', get_template_directory_uri() . '/js/ajax.js', $deps, $ver, true);
  	wp_localize_script( 'ajax', 'MyAjax', array(
    // URL to wp-admin/ajax.php to process data
    'ajaxurl' => admin_url( 'admin-ajax.php' ),
 
    // Creates a random string to test against for security purposes
    'security' => wp_create_nonce( 'security-string-ajax' )
  ));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nctsa_scripts' );



/**
*Add in validation and processing for ajax form
*/
function contact_ajax(){

	$email_to = "bfrye3@elon.edu";
	$email_host = "bfrye3@elon.edu";

	wp_verify_nonce( 'my-special-string', 'security' );
	$fname = htmlspecialchars(stripslashes(trim($_POST['fname'])));
	$email = htmlspecialchars(stripslashes(trim($_POST['email'])));
	$subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
	$message = htmlspecialchars(stripslashes(trim($_POST['message'])));
	
	$errors = array();
	if(strlen($fname) < 1){
		$errors[] = "Please Enter Your Name";
	}
	if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
	
	} else {
		$errors[] = "Please Enter A Valid Email";
	}
	
	if(strlen($subject) < 1){
		$errors[] = "Please Enter a Subject";
	}
	
	if($errors){
		$error_encode = "<div class='form_errors'>";
		foreach($errors as $error){
			$error_encode .= "$error<br/>";
		}
		$error_encode .= "</div>";
		echo json_encode("$error_encode");
		die();
	} else {
 
		function clean_string($string) {
 
	      $bad = array("content-type","bcc:","to:","cc:","href");
	      return str_replace($bad,"",$string);
	    }

		$email_message  = "From: " .clean_string($fname)."\n";
		$email_message .= "Email: " .clean_string($email)."\n";
		$email_message .= "Subject: " .clean_string($subject)."\n";
		$email_message .= "Message: " .clean_string($message)."\n";

		$subject = clean_string($subject);


		$headers = 'From: '.$email_host."\r\n".
 
		'Reply-To: '.$email."\r\n" ;
 
 
		// $mail_send = wp_mail( 'bfrye3@elon.edu', $subject, $email_message, $email );

		$mail_send = mail( $email_to, $subject, $email_message, $headers );


		
 
		if($mail_send){
			echo json_encode("<div class='form_success'>Success! We will get back with you as soon as possible.</div><script>$('#contact-form')[0].reset();</script>");
			die();
		}
	}
	
	
}
 
add_action( 'wp_ajax_contact_ajax', 'contact_ajax' );
add_action( 'wp_ajax_nopriv_contact_ajax', 'contact_ajax' );





/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
