<?php

namespace Drupal\custom_stains\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\commerce_product\Entity\ProductTypeInterface;

/**
 * Returns responses for Coffee routes.
 */
class CoffeeController extends ControllerBase
{

  public function data()
  {
    $default_langcode = \Drupal::languageManager()->getCurrentLanguage()->getId();
    $list = ['nodes' => []];
    $product_type = \ProductType::load('my_custom_product_type');
    $nids = \Drupal::entityQuery('node')
      ->condition('type', 'beans')
      ->condition('langcode', $default_langcode, '=')
      ->condition('status', 1)
      ->sort('created', 'DESC')
      ->pager(15)
      ->execute();
    $entity_type_manager = \Drupal::entityTypeManager();
    $node_view_builder = $entity_type_manager->getViewBuilder('node');
    $view_mode = 'teaser';
    if (!empty($nids)) {
      $nodes = $entity_type_manager->getStorage('node')->loadMultiple($nids);
      foreach ($nodes as $node) {
        $list['nodes'][$node->id()] = $node_view_builder->view($node, $view_mode);
      }
    }
    return $list;
  }

  public function build()
  {
    return [
      'results' => [
        '#theme' => 'coffee_page',
        '#items' => $this->data(),
      ],
    ];
  }
}