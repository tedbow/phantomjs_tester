<?php

namespace Drupal\phantomjs_tester\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\phantomjs_tester\Controller
 */
class DefaultController extends ControllerBase {

  /**
   * Test.
   *
   * @return string
   *   Return Hello string.
   */
  public function test() {
    return [
      '#type' => 'markup',
      // Change this to test page cache.
      '#markup' => '<div id="tester">PageChange-1</div><div id="js-tester">JS Version</div>',
      '#attached' => [
        'library' => [
          'phantomjs_tester/drupal.phantomjs_tester',
        ],
      ],
    ];
  }

}
