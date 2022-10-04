<?php

namespace Drupal\custom_stains\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Coffee routes.
 */
class FrontController extends ControllerBase
{

  public function build() {
    return [
      '#type' => 'markup',
      '#markup' => ''
    ];
  }
}