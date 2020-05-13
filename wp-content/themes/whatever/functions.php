<?php
/**
 * Theme Name: Whatever
 * Description: WordPress project for Make Whatever web
 * Author: Team Eightshift
 * Author URI: https://eightshift.com/
 * Version: 4.0.0
 * Text Domain: whatever
 *
 * @package Whatever
 *
 * @since 1.0.0
 */

declare( strict_types=1 );

namespace Whatever;

/**
 * If this file is called directly, abort.
 *
 * @since 1.0.0
 */
if ( ! \defined( 'WPINC' ) ) {
  die;
}

/**
 * Include the autoloader so we can dynamically include the rest of the classes.
 *
 * @since 1.0.0
 */
require __DIR__ . '/vendor/autoload.php';

/**
 * Begins execution of the theme.
 *
 * Since everything within the theme is registered via hooks,
 * then kicking off the theme from this point in the file does
 * not affect the page life cycle.
 *
 * @since 1.0.0
 */
( new Core\Main() )->register();
