<?php
/**
 * Single page for Posts
 *
 * @package Whatever
 *
 * @since 1.0.0
 */

use Eightshift_Libs\Helpers\Components;

get_header();

if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();
    the_content();
  }

  echo Components::render( 'share', [
    'postId' => get_the_ID(),
    'label'  => esc_html__( 'Share', 'whatever' ),
  ]);

  require locate_template( 'src/blocks/components/google-rich-snippets/google-rich-snippets.php' );
}

get_footer();
