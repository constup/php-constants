<?php

declare(strict_types=1);

namespace Constup\PhpConstants\Tests;

use Constup\PhpConstants\DefaultType;
use PHPUnit\Framework\TestCase;

/**
 * Class DefaultType
 *
 * @package Constup\PhpConstants\Tests
 */
class DefaultTypeTest extends TestCase
{
    public function testIsIncludedInAll()
    {
        $this->assertIsArray(DefaultType::DEFAULT_TYPE_ALL);

        $reflection_class = new \ReflectionClass(DefaultType::class);
        $constants = $reflection_class->getConstants();
        unset($constants['DEFAULT_TYPE_ALL']);

        foreach ($constants as $key => $value) {
            $this->assertContains($value, DefaultType::DEFAULT_TYPE_ALL);
        }
    }
}
