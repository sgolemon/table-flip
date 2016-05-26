<?php

require __DIR__ . '/../vendor/autoload.php';

class TableFlipTest extends PHPUnit_Framework_TestCase {
  const TYPE_NORMAL = 0;
  const TYPE_PUDGY = 1;
  const TYPE_AGRO = 2;

  private static function getClass($type) {
    switch ($type) {
      case self::TYPE_PUDGY:
        return （ノ゜Д゜）ノ︵┻━┻::class;
      case self::TYPE_AGRO:
        return （ノಥ益ಥ）ノ︵┻━┻::class;
      case self::TYPE_NORMAL:
        return （╯°□°）╯︵┻━┻::class;
      default:
        return Exception::class;
    }
  }

  public function testThrowAll() {
    $types = array(self::TYPE_NORMAL, self::TYPE_PUDGY, self::TYPE_AGRO);
    foreach ($types as $type) {
      $class = self::getClass($type);
      $caught = false;
      try {
        throw new $class;
      } catch (┻━┻ $e) {
        $this->assertEquals($class, get_class($e));
        $caught = true;
      }
      $this->assertTrue($caught);
    }
  }

  public function testThrowTable() {
    $caught = false;
    try {
      throw new （╯°□°）╯︵┻━┻("Nope!");
    } catch (┻━┻ $e) {
      $this->assertEquals("Nope!", $e->getMessage());
      $caught = true;
    }
    $this->assertTrue($caught);
  }
}
