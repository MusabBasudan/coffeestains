<?php

namespace Drupal\custom_stains\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'ProductsBlock' block.
 *
 * @Block(
 *  id = "products_block",
 *  admin_label = @Translation("Products block"),
 * )
 */
class ProductsBlock extends BlockBase
{

  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $default_langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();
    return array(
      '#theme' => 'products_block',
      '#items' => NULL,
    );
  }
}
