<?php
/**
 * This is the file header.
 */
declare(strict_types=1);

namespace TestProject;

/**
 * Class PsrTestClass.
 *
 * @since 1.0.0
 */
class PsrTestClass
{
    /**
     * Foo & bar.
     *
     * @since 1.0.0
     *
     * @param int $a
     * @param int $b
     *
     * @return bool
     */
    public function _fooBar(int $a, int $b): bool
    {
        if ($a === $b &&
            $b == 0) {
            return true;
        }

        return false;
    }

    private int|float $c;
}
