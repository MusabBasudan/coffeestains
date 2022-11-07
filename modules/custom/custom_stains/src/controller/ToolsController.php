<?php

namespace Drupal\custom_stains\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for Tool routes.
 */
class ToolsController extends ControllerBase
{

  /**
   * Builds the response.
   */
  public function build()
  {

    $build['content'] = [
      '#theme' => 'tools_page',
    ];

    return $build;
  }
}
