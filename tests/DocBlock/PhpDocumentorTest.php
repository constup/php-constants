<?php

declare(strict_types=1);

namespace Constup\PhpConstants\Tests;

use Constup\PhpConstants\DocBlock\PhpDocumentor;
use PHPUnit\Framework\TestCase;

/**
 * Class PhpDocumentorTest
 *
 * @package Constup\PhpConstants\Tests
 */
class PhpDocumentorTest extends TestCase
{
    public function testIsIncludedInAll()
    {
        $this->assertIsArray(PhpDocumentor::PHPDOCUMENTOR_ALL);

        $reflection_class = new \ReflectionClass(PhpDocumentor::class);
        $constants = $reflection_class->getConstants();
        unset($constants['PHPDOCUMENTOR_ALL']);

        foreach ($constants as $key => $value) {
            $this->assertContains($value, PhpDocumentor::PHPDOCUMENTOR_ALL);
        }
    }
}
