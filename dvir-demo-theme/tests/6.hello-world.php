<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

function add_shortcode(){
  return true;
}

final class HelloWorldTest extends TestCase
{
  public function test_call_returnsString(): void
  {
    require_once('../shortcodes/1.hello-world.php');
    $this->assertEquals(
      'Hello PressForWord!',
      demo_func()
    );
  }
}
