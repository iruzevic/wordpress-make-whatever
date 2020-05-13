<?php
/**
 * Template for the Button Block view.
 *
 * @package Whatever\Blocks.
 */

namespace Whatever\Blocks;

$this->render_block_view(
  '/components/button/button.php',
  [
    'blockClass' => $attributes['blockClass'] ?? '',
    'button'     => $attributes['button'] ?? [],
  ]
);
