<?php
/**
 * Template for the Lists Block view.
 *
 * @package Whatever\Blocks.
 */

namespace Whatever\Blocks;

$this->render_block_view(
  '/components/lists/lists.php',
  [
    'blockClass' => $attributes['blockClass'] ?? '',
    'lists'      => $attributes['lists'] ?? [],
  ]
);
