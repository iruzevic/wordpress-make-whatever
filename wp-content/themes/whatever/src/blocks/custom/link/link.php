<?php
/**
 * Template for the Link Block view.
 *
 * @package Whatever\Blocks.
 */

namespace Whatever\Blocks;

$this->render_block_view(
  '/components/link/link.php',
  [
    'blockClass' => $attributes['blockClass'] ?? '',
    'link'       => $attributes['link'] ?? [],
  ]
);
