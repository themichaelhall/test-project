<?php

/**
 * Hello
 */

namespace TestProject\Tests;

use PHPUnit\Framework\TestCase;
use TestProject\FooClass;

/**
 * Class FooClassTest.
 */
class FooClassTest extends TestCase
{
    /**
     * Test getFoo.
     */
    public function testGetFoo()
    {
        $foo = new FooClass();

        self::assertSame('Foo:1', $foo->getFoo('1'));
        self::assertSame('Foo:Two', $foo->getFoo('Two'));
    }

    /**
     * Test getBar.
     */
    public function testGetBar()
    {
        $foo = new FooClass();

        self::assertSame('Bar:1', $foo->getBar('1'));
        self::assertSame('Bar:Two', $foo->getBar('Two'));
    }
}
