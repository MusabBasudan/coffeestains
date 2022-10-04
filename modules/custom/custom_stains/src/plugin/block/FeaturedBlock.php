<?php

namespace Drupal\custom_stains\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'FeaturedBlock' block.
 *
 * @Block(
 *  id = "featured_block",
 *  admin_label = @Translation("Featured Block"),
 * )
 */
class FeaturedBlock extends BlockBase
{

  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $default_langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();
    return array(
      '#theme' => 'featured_block',
      '#items' => NULL,
    );
  }
}
