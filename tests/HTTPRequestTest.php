<?php

declare(strict_types=1);

namespace Constup\PhpConstants\Tests;

use Constup\PhpConstants\HTTPRequest;
use PHPUnit\Framework\TestCase;

/**
 * Class HTTPRequestTest
 *
 * @package Constup\PhpConstants\Tests
 */
class HTTPRequestTest extends TestCase
{
    public function testIsIncludedInAll()
    {
        $this->assertIsArray(HTTPRequest::HTTP_REQUEST_ALL);

        $reflection_class = new \ReflectionClass(HTTPRequest::class);
        $constants = $reflection_class->getConstants();
        unset($constants['HTTP_REQUEST_ALL']);

        foreach ($constants as $key => $value) {
            $this->assertContains($value, HTTPRequest::HTTP_REQUEST_ALL);
        }
    }
}
