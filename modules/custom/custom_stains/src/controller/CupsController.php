<?php

namespace Drupal\custom_stains\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Cups routes.
 */
class CupsController extends ControllerBase
{

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#theme' => 'cups_page',
    ];

    return $build;
  }

}