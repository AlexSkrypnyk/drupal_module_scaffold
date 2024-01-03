<?php

declare(strict_types = 1);

namespace Drupal\Tests\drupal_circleci_example\Unit;

use Drupal\Tests\UnitTestCase;

/**
 * Class ExampleUnitTest.
 *
 * Demo test class to ensure that tests are discovered and can be ran.
 *
 * @group drupal_circleci_example
 */
class ExampleUnitTest extends UnitTestCase {

  /**
   * Test that unit tests are working.
   */
  public function testPass(): void {
    $this->assertTrue(TRUE);
  }

}