<?php

namespace Drupal\custom_stains\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'FooterBlock' block.
 *
 * @Block(
 *  id = "footer_block",
 *  admin_label = @Translation("Footer block"),
 * )
 */
class FooterBlock extends BlockBase
{

  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $default_langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();
    return array(
      '#theme' => 'footer_block',
      '#items' => NULL,
    );
  }
}
