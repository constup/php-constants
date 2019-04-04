<?php

declare(strict_types=1);

namespace Constup\PhpConstants\Tests;

use Constup\PhpConstants\Visibility;
use PHPUnit\Framework\TestCase;

/**
 * Class VisibilityTest
 *
 * @package Constup\PhpConstants\Tests
 */
class VisibilityTest extends TestCase
{
    public function testIsIncludedInAll()
    {
        $this->assertIsArray(Visibility::VISIBILITY_ALL);

        $reflection_class = new \ReflectionClass(Visibility::class);
        $constants = $reflection_class->getConstants();
        unset($constants['VISIBILITY_ALL']);

        foreach ($constants as $key => $value) {
            $this->assertContains($value, Visibility::VISIBILITY_ALL);
        }
    }
}
