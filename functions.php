<?php
/* Includ custom functions
   ========================================================================== */
// Recommended plugins installer
require_once 'include/plugins/init.php';
// Shortcodes functions
// require_once 'include/shortcodes.php';
// Custom functionality
require_once 'include/core.php';
// Uncomit for add custom post type
// require_once('include/custom-cpt.php');
/* Register custom image size
   ========================================================================== */
// add_image_size( 'custom', '300', '300', true );


/* Register menus
   ========================================================================== */
register_nav_menus(array(
    'head_menu' => 'Main navigation',
    'second_menu' => 'Second navigation',
    'foot_menu' => 'Footer navigation'
));