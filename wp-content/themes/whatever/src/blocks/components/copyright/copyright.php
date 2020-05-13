<?php
/**
 * Copyright component responsible for rendering site's copyright.
 *
 * @package Whatever\Blocks
 *
 */

namespace Whatever\Blocks;

$block_class = $attributes['blockClass'] ?? 'copyright';
$by          = $attributes['by'] ?? get_bloginfo('name');
$legal       = $attributes['legal'] ?? esc_html__( 'All Rights Reserved', 'whatever' );
$copy_year   = $attributes['year'] ?? gmdate( 'Y' );

?>
<div class="copyright">
  <?php printf( '%1$s %2$s %3$s. %4$s.', '&copy;', esc_html( $copy_year ), esc_html( $by ), esc_html( $legal ) ); ?>
</div>
