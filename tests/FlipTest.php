<?php

use PHPUnit\Framework\TestCase;

class TableFlipTest extends TestCase {
  const TYPE_NORMAL = 0;
  const TYPE_PUDGY = 1;
  const TYPE_AGRO = 2;
  const TYPE_SOVIET_RUSSIA = 3;

  private static function getClass($type) {
    switch ($type) {
      case self::TYPE_PUDGY:
        return （ノ゜Д゜）ノ︵┻━┻::class;
      case self::TYPE_AGRO:
        return （ノಥ益ಥ）ノ︵┻━┻::class;
      case self::TYPE_NORMAL:
        return （╯°□°）╯︵┻━┻::class;
      case self::TYPE_SOVIET_RUSSIA:
        return （ノ┬─┬ノ︵（＼o°o）＼::class;
      default:
        return Exception::class;
    }
  }

  public function testThrowAll() {
    $types = array(self::TYPE_NORMAL, self::TYPE_PUDGY, self::TYPE_AGRO, self::TYPE_SOVIET_RUSSIA);
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

  public function testSetTable() {
    $caught = false;
    try {
      throw new （╯°□°）╯︵┻━┻("Nope!");
    } catch (┻━┻ $e) {
      ┬─┬﻿ノ（･_･ノ）;
      $caught = true;
    }
    $this->assertTrue($caught);
  }
}
