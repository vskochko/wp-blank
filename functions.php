<?php
define( 'HOME_PAGE_ID', get_option( 'page_on_front' ) );
define( 'BLOG_ID', get_option( 'page_for_posts' ) );
define( 'POSTS_PER_PAGE', get_option( 'posts_per_page' ) );
/* INCLUD CUSTOM FUNCTIONS
   ========================================================================== */
// Recommended plugins installer
require_once 'include/plugins/init.php';
// Custom functionality
require_once 'include/core.php';
require_once 'include/acf/acf-settings.php';
// require_once('include/cpt.php');

//update image  size
// add_image_size( '2048x2048_cropped', '2048', '2048', true );

update_option( 'thumbnail_size_w', 300 );
update_option( 'thumbnail_size_h', 300 );
update_option( 'medium_size_w', 800 );
update_option( 'medium_size_h', 800 );
update_option( 'large_size_w', 2048 );
update_option( 'large_size_h', 2048 );


/* REGISTER MENUS
   ========================================================================== */
register_nav_menus( array(
	'main_menu'   => 'Main navigation',
	'second_menu' => 'Second navigation',
	'foot_menu'   => 'Footer navigation'
) );

// Contact form 7 remove AUTOTOP
if(defined('WPCF7_VERSION')) {
	function maybe_reset_autop( $form ) {
		$form_instance = WPCF7_ContactForm::get_current();
		$manager = WPCF7_FormTagsManager::get_instance();
		$form_meta = get_post_meta( $form_instance->id(), '_form', true );
		$form = $manager->replace_all( $form_meta );
		$form_instance->set_properties( array(
			'form' => $form
		));
		return $form;
	}
	add_filter( 'wpcf7_form_elements', 'maybe_reset_autop' );
}
