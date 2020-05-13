<?php
/**
 * Template for the Jumbotron Block view.
 *
 * @package Eightshift_Boilerplate\Blocks.
 */

namespace Eightshift_Boilerplate\Blocks;

$block_class                 = $attributes['blockClass'] ?? '';
$intro                       = $attributes['intro'] ?? '';
$heading                     = $attributes['heading'] ?? '';
$paragraph                   = $attributes['paragraph'] ?? '';
$media                       = $attributes['media'] ?? [];
$content_horizontal_position = $attributes['contentHorizontalPosition'] ?? '';
$content_vertical_position   = $attributes['contentVerticalPosition'] ?? '';
$media_horizontal_position   = $attributes['mediaHorizontalPosition'] ?? '';

?>

<div class="<?php echo esc_attr( "{$block_class}" ); ?>">

  <?php if ( ! empty( $media ) ) { ?>
    <div class="<?php
      echo esc_attr( "
        {$block_class}__media
        {$block_class}__media--horizontal-{$media_horizontal_position}
      " ); ?>">
      <?php
      $this->render_block_view(
        '/components/image/image.php',
        [
          'blockClass' => $block_class,
          'media'      => $attributes['media'] ?? [],
          'size'       => 'full',
        ]
      );
      ?>
    </div>
  <?php } ?>

  <div class="<?php echo esc_attr( "
      {$block_class}__content
      {$block_class}__content--vertical-{$content_vertical_position}
      {$block_class}__content--horizontal-{$content_horizontal_position}
    " ); ?>">
    <div class="<?php echo esc_attr( "{$block_class}__content-wrap" ); ?>">
      <?php if ( ! empty( $intro ) ) { ?>
        <div class="<?php echo esc_attr( "{$block_class}__intro" ); ?>">
          <?php echo wp_kses_post( $intro ); ?>
        </div>
      <?php } ?>

      <?php if ( ! empty( $heading ) ) { ?>
        <div class="<?php echo esc_attr( "{$block_class}__heading" ); ?>">
          <?php echo wp_kses_post( $heading ); ?>
        </div>
      <?php } ?>

      <?php if ( ! empty( $paragraph ) ) { ?>
        <div class="<?php echo esc_attr( "{$block_class}__paragraph" ); ?>">
          <?php echo wp_kses_post( $paragraph ); ?>
        </div>
      <?php } ?>

      <?php
        $this->render_block_view(
          '/components/button/button.php',
          [
            'blockClass' => $attributes['blockClass'] ?? '',
            'button'     => $attributes['button'] ?? [],
          ]
        );
      ?>
    </div>
  </div>

</div>
