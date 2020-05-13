<?php
/**
 * Template for the Image Block view.
 *
 * @package Whatever\Blocks.
 */

namespace Whatever\Blocks;

$this->render_block_view(
  '/components/image/image.php',
  [
    'blockClass' => $attributes['blockClass'] ?? '',
    'media'      => $attributes['media'] ?? [],
  ]
);
