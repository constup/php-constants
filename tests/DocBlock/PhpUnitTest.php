<?php

declare(strict_types=1);

namespace Constup\PhpConstants\Tests;

use Constup\PhpConstants\DocBlock\PhpUnit;
use PHPUnit\Framework\TestCase;

/**
 * Class PhpUnit
 *
 * @package Constup\PhpConstants\Tests
 */
class PhpUnitTest extends TestCase
{
    public function testIsIncludedInAll()
    {
        $this->assertIsArray(PhpUnit::PHPUNIT_ALL);

        $reflection_class = new \ReflectionClass(PhpUnit::class);
        $constants = $reflection_class->getConstants();
        unset($constants['PHPUNIT_ALL']);

        foreach ($constants as $key => $value) {
            $this->assertContains($value, PhpUnit::PHPUNIT_ALL);
        }
    }
}
