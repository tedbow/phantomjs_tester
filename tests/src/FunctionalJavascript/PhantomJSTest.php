<?php


namespace Drupal\Tests\phantomjs_tester\FunctionalJavascript;


use Drupal\FunctionalJavascriptTests\JavascriptTestBase;

class PhantomJSTest extends JavascriptTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['phantomjs_tester'];

  public function testCache() {
    $this->drupalGet('ph-test');
    $this->getSession()->wait(500);
    // Change to \Drupal\phantomjs_tester\Controller\DefaultController::test to
    // get test to pass - This works without start/stop phantomjs
    $this->assertSession()->pageTextContains('PageChange-2');
    // Change modules/custom/phantomjs_tester/js/phantom-tester.js to get test
    // to pass - This requires start/stop phantomjs, WTF?
    $this->assertSession()->pageTextContains('JSChange-2');
  }
}
