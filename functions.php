<?php
/**
 * Keahi theme functions.
 */

function keahi_enqueue_styles() {
	wp_enqueue_style(
		'keahi-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'keahi_enqueue_styles' );

function keahi_setup() {
	add_theme_support( 'wp-block-styles' );
	add_editor_style( 'style.css' );
	load_theme_textdomain( 'keahi', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'keahi_setup' );

// Disable remote/core block patterns
remove_theme_support( 'core-block-patterns' );
add_filter( 'should_load_remote_block_patterns', '__return_false' );

// Register custom block styles
function keahi_register_block_styles() {
	register_block_style(
		'core/heading',
		array(
			'name'  => 'keahi-text-balance',
			'label' => esc_html__( 'Balance Wrap', 'keahi' ),
		)
	);

	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'keahi-text-balance',
			'label' => esc_html__( 'Balance Wrap', 'keahi' ),
		)
	);

	register_block_style(
		'core/columns',
		array(
			'name'  => 'keahi-reverse',
			'label' => esc_html__( 'Mobile Reverse', 'keahi' ),
		)
	);
}
add_action( 'init', 'keahi_register_block_styles' );

// Register pattern categories
function keahi_register_pattern_categories() {
	register_block_pattern_category( 'keahi', array( 'label' => __( 'Keahi', 'keahi' ) ) );
}
add_action( 'init', 'keahi_register_pattern_categories' );

function keahi_setup_notice() {
$notice_option_name = 'keahi_setup_notice_dismissed';
$is_dismissed = get_option( $notice_option_name );

if ( ! $is_dismissed && current_user_can( 'edit_theme_options' ) ) {
$image_url = get_template_directory_uri() . '/assets/images/me.jpg';
$notice_text = '<img src="' . esc_url( $image_url ) . '" style="max-width: 100%;" alt="" />
<div class="keahi-notice-text" style="margin-top: 15px;">
	<h3 style="margin-top: 0px; font-size: 18px;">' . __('Hi, I\'m Roman Fink, the creator of the Keahi theme! With
		alpaca\'s help, of course.','keahi')
		. ' 😊</h3>
	<p style="margin: 5px 0 0;"><b>' . __('Just CLOSE this notice to hide it forever. Thanks for your support!','keahi')
			. ' 🚀</b></p>
</div>';
echo '<div id="keahi-notice" class="notice notice-info is-dismissible">' . wp_kses_post( $notice_text ) . '</div>';
}

}

add_action( 'admin_notices', 'keahi_setup_notice' );


function keahi_notice_script() {
if ( get_option( 'keahi_setup_notice_dismissed' ) || ! current_user_can( 'edit_theme_options' ) ) {
	return;
}
if ( ! wp_script_is( 'jquery', 'done' ) ) {
wp_enqueue_script( 'jquery' );
}
wp_enqueue_script( 'keahi-notice-script', get_template_directory_uri() . '/assets/js/admin-notice.js', array( 'jquery' ), wp_get_theme( get_template() )->get( 'Version' ), true );
wp_localize_script( 'keahi-notice-script', 'keahiNotice', array( 'nonce' => wp_create_nonce( 'keahi_dismiss_notice' ) ) );
}

add_action( 'admin_enqueue_scripts', 'keahi_notice_script' );


function keahi_enqueue_custom_admin_styles() {
$notice_option_name = 'keahi_setup_notice_dismissed';
$is_dismissed = get_option( $notice_option_name );
if ( ! $is_dismissed ) {
wp_enqueue_style( 'keahi-admin-notice', get_template_directory_uri() . '/assets/css/admin-notice.css' );
}
}

add_action( 'admin_enqueue_scripts', 'keahi_enqueue_custom_admin_styles' );


function keahi_dismiss_notice() {
check_ajax_referer( 'keahi_dismiss_notice', 'nonce' );
if ( ! current_user_can( 'edit_theme_options' ) ) {
	wp_die();
}
update_option( 'keahi_setup_notice_dismissed', true );
wp_die();
}

add_action( 'wp_ajax_keahi_dismiss_notice', 'keahi_dismiss_notice' );


// --- Keahi About Page ---

function keahi_add_about_page() {
	add_theme_page(
		__( 'About Keahi', 'keahi' ),
		__( 'About Keahi', 'keahi' ),
		'edit_theme_options',
		'keahi-about',
		'keahi_about_page_html'
	);
}
add_action( 'admin_menu', 'keahi_add_about_page' );

function keahi_about_page_styles( $hook ) {
	if ( 'appearance_page_keahi-about' !== $hook ) {
		return;
	}
	wp_enqueue_style( 'keahi-about-page', get_template_directory_uri() . '/assets/css/admin-about.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'admin_enqueue_scripts', 'keahi_about_page_styles' );

function keahi_about_page_html() {
	$theme   = wp_get_theme();
	$version = $theme->get( 'Version' );
	$image   = get_template_directory_uri() . '/assets/images/me.jpg';
	?>
	<div class="wrap keahi-about-wrap">
		<h1><?php esc_html_e( 'Keahi Theme', 'keahi' ); ?> <span class="keahi-version"><?php echo esc_html( $version ); ?></span></h1>

		<div class="keahi-about-columns">
			<div class="keahi-about-card keahi-about-author">
				<img src="<?php echo esc_url( $image ); ?>" alt="Roman Fink" class="keahi-author-photo" />
				<h2><?php esc_html_e( 'Hi, I\'m Roman Fink', 'keahi' ); ?></h2>
				<p><?php esc_html_e( 'The creator of the Keahi theme! With alpaca\'s help, of course.', 'keahi' ); ?> 😊</p>
			</div>



		</div>
	</div>
	<?php
}