<?php

namespace Drupal\custom_stains\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HeaderBlock' block.
 *
 * @Block(
 *  id = "header_block",
 *  admin_label = @Translation("Header block"),
 * )
 */
class HeaderBlock extends BlockBase
{

  /**
   * {@inheritdoc}
   */
  public function build()
  {
    return array(
      '#theme' => 'header_block',
      '#items' => NULL,
    );
  }
}
