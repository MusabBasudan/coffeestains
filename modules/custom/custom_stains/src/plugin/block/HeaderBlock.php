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
    $default_langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();
    return array(
      '#theme' => 'header_block',
      '#items' => NULL,
    );
  }
}
