<?php
/**
 * Modify WordPress admin behavior
 *
 * @package Whatever\Admin
 */

declare( strict_types=1 );

namespace Whatever\Admin;

use Eightshift_Libs\Core\Service;

/**
 * Class that modifies some administrator appearance
 *
 * Example: Change color based on environment, remove dashboard widgets etc.
 *
 * @since 4.0.0
 */
final class Modify_Admin_Appearance implements Service {

  /**
   * List of admin color schemes.
   *
   * @var array
   */
  const COLOR_SCHEMES = [
    'default'   => 'fresh',
    'staging'   => 'blue',
    'production' => 'sunrise',
  ];

  /**
   * Register all the hooks
   *
   * @return void
   *
   * @since 4.0.0
   */
  public function register() {
    \add_filter( 'get_user_option_admin_color', [ $this, 'set_admin_color' ], 10, 0 );
  }

  /**
   * Method that changes admin colors based on environment variable
   *
   * @return string Modified color scheme.
   *
   * @since 4.0.0.
   */
  public function set_admin_color() : string {
    if ( ! \defined( 'WHA_ENV' ) || ! isset( self::COLOR_SCHEMES[ WHA_ENV ] ) ) {
      return self::COLOR_SCHEMES['default'];
    }

    return self::COLOR_SCHEMES[ WHA_ENV ];
  }
}
