<?php
/**
 * Template for the Image Component.
 *
 * @package Whatever\Blocks.
 */

namespace Whatever\Blocks;

$media = $attributes['media'] ?? [];

if ( ! $media['id'] ) {
  return;
}

$size = $media['size'] ?? 'large';

$block_class = $attributes['blockClass'] ?? '';

$media = \wp_get_attachment_image(
  $media['id'],
  $size,
  '',
  [ 'class' => "image {$block_class}__img" ]
);

echo wp_kses_post( $media );


