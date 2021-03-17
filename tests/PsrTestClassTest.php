<?php

declare(strict_types=1);

namespace TestProject\Tests;

use PHPUnit\Framework\TestCase;
use TestProject\PsrTestClass;

class PsrTestClassTest extends TestCase
{
    public function testPsrTestClass()
    {
        self::assertTrue((new PsrTestClass())->_fooBar(0, 0));
        self::assertFalse((new PsrTestClass())->_fooBar(1, 1));
        self::assertFalse((new PsrTestClass())->_fooBar(1, 2));
    }
}
