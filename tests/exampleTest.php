<?php

namespace app\Tests;

use app\TestClass;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    public function testTrueIsTrue() {
        $this->assertTrue(true);
    }

    public function testTestClass() {
        $class = new TestClass();

        $class->setA(1);
        $this->assertEquals(1, $class->getA());
    }
}
