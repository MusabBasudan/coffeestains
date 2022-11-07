<?php

namespace Drupal\custom_stains\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Custom Stains routes.
 */
class BeansController extends ControllerBase
{

  /**
   * Builds the response.
   */
  public function build()
  {

    $build['content'] = [
      '#theme' => 'coffee_page',
    ];

    return $build;
  }
}
