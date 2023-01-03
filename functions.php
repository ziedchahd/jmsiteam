<?php
/**
 * Base functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Base
 */

define( 'jmsiteam_VERSION', '1.1.0' );
define( 'jmsiteam_MINIMUM_WP_VERSION', '5.4' );
define( 'jmsiteam_MINIMUM_PHP_VERSION', '7.2' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], jmsiteam_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), jmsiteam_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}
// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Load the `webapp()` entry point function.
require get_template_directory() . '/inc/class-theme.php';

// Load the `webapp()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'Base\webapp' );
