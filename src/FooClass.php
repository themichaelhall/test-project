<?php
/**
 * This is the foo class.
 */
declare(strict_types=1);

namespace TestProject;

/**
 * Class FooClass.
 *
 * @since 1.0.0
 */
class FooClass
{
    /**
     * Get foo.
     *
     * @since 1.0.0
     *
     * @param string $s
     *
     * @return string
     */
    public function getFoo(string $s): string
    {
        return 'Foo:' . $s;
    }

    /**
     * Get bar.
     *
     * @since 1.0.0
     *
     * @param string $s
     *
     * @return string
     */
    public function getBar(string $s): string
    {
        return 'Bar:' . $s;
    }
}
