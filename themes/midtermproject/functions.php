<?php
function midtermproject_scripts() {
	
	// Theme stylesheet.
	wp_register_style( 'midtermproject-style', get_stylesheet_uri() );
   wp_enqueue_style( 'midtermproject-style');
	

 }
add_action( 'wp_enqueue_scripts', 'midtermproject_scripts' );



//add_action( 'wp_enqueue_scripts', 'cis_add_hello_script' );
function cis_add_hello_script() {
	//die('cis_add_hello_script');
	wp_register_script(
        'hello-script', // name the script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/assets/js/hello.js', // this is the location of the script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
	wp_enqueue_script('hello-script');
}
add_action( 'wp_enqueue_scripts', 'cis_add_hello_script' );

function midtermproject_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Secondary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'midtermproject_widgets_init' );


function midtermproject_content_width() {

	$content_width = $GLOBALS['content_width'];

	// Get layout.
	$page_layout = get_theme_mod( 'page_layout' );

	// Check if layout is one column.
	if ( 'one-column' === $page_layout ) {
		if ( midtermproject_is_frontpage() ) {
			$content_width = 644;
		} elseif ( is_page() ) {
			$content_width = 740;
		}
	}


	// Check if is single post and there is no sidebar.
	if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
		$content_width = 740;
	}


	$GLOBALS['content_width'] = apply_filters( 'midtermproject_content_width', $content_width );
}
add_action( 'template_redirect', 'midtermproject_content_width', 0 );




// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'midtermproject' ),
		'social' => __( 'Social Links Menu', 'midtermproject' ),) );
	
?>