<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use tad\FunctionMocker\FunctionMocker;

final class HelloWorldTest extends TestCase
{
  public function setUp() {
    FunctionMocker::setUp();
  }

  public function test_call_returnsString(): void
  {
    FunctionMocker::replace('add_shortcode', '');
    require_once('../shortcodes/hello-world.php');
    $this->assertEquals(
      'Hello PressForWord!',
      demo_func()
    );
  }

  public function tearDown(){
    FunctionMocker::tearDown();
  }
}
