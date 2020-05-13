<?php
/**
 * File that holds class for "Projects" custom post type registration.
 *
 * @package Whatever\Custom_Post_Type
 */

namespace Whatever\Custom_Post_Type;

use Eightshift_Libs\Custom_Post_Type\Base_Post_Type;
use Eightshift_Libs\Custom_Post_Type\Label_Generator;

/**
 * Class Projects.
 */
class Projects extends Base_Post_Type {

  /**
   * Post type slug constant.
   *
   * @var string
   */
  const POST_TYPE_SLUG = 'projects';

  /**
   * URL slug for the custom post type.
   *
   * @var string
   */
  const POST_TYPE_URL_SLUG = 'projects';

  /**
   * Rest API Endpoint slug constant.
   *
   * @var string
   */
  const REST_API_ENDPOINT_SLUG = 'projects';

  /**
   * Capability type for projects post type.
   *
   * @var string
   */
  const POST_CAPABILITY_TYPE = 'post';

  /**
   * Location of menu in sidebar.
   *
   * @var int
   */
  const MENU_POSITION = 20;

  /**
   * Set menu icon.
   *
   * @var string
   */
  const MENU_ICON = 'dashicons-analytics';

  /**
   * Get the slug to use for the Projects custom post type.
   *
   * @return string Custom post type slug.
   */
  protected function get_post_type_slug() : string {
    return self::POST_TYPE_SLUG;
  }

  /**
   * Get the arguments that configure the Projects custom post type.
   *
   * @return array Array of arguments.
   */
  protected function get_post_type_arguments() : array {

    $nouns = [
      Label_Generator::SINGULAR_NAME_UC => esc_html_x( 'Project', 'Projects post uppercase singular name', 'whatever' ),
      Label_Generator::SINGULAR_NAME_LC => esc_html_x( 'project', 'Projects post lowercase singular name', 'whatever' ),
      Label_Generator::PLURAL_NAME_UC => esc_html_x( 'Projects', 'Projects post uppercase plural name', 'whatever' ),
      Label_Generator::PLURAL_NAME_LC => esc_html_x( 'projects', 'Projects post lowercase plural name', 'whatever' ),
    ];

    return [
      'label'              => $nouns[ Label_Generator::SINGULAR_NAME_UC ],
      'labels'             => ( new Label_Generator() )->get_generated_labels( $nouns ),
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'capability_type'    => self::POST_CAPABILITY_TYPE,
      'has_archive'        => true,
      'rewrite'            => [ 'slug' => static::POST_TYPE_URL_SLUG ],
      'hierarchical'       => false,
      'menu_icon'          => static::MENU_ICON,
      'menu_position'      => static::MENU_POSITION,
      'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ],
      'show_in_rest'       => true,
      'rest_base'          => static::REST_API_ENDPOINT_SLUG,
    ];
  }
}
