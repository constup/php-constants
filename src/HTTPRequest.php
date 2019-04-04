<?php

declare(strict_types=1);

namespace Constup\PhpConstants;

/**
 * Class HTTPRequest
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods
 *
 * @package Constup\PhpConstants
 */
class HTTPRequest
{
    const GET = 'GET';
    const HEAD = 'HEAD';
    const POST = 'POST';
    const PUT = 'PUT';
    const DELETE = 'DELETE';
    const CONNECT = 'CONNECT';
    const OPTIONS = 'OPTIONS';
    const TRACE = 'TRACE';
    const PATCH = 'PATCH';

    const HTTP_REQUEST_ALL = [
        self::GET,
        self::HEAD,
        self::POST,
        self::PUT,
        self::DELETE,
        self::CONNECT,
        self::OPTIONS,
        self::TRACE,
        self::PATCH,
    ];

    /**
     * @param string $value
     * @param bool $strict
     * @return bool
     */
    public static function contains(string $value, bool $strict = false): bool
    {
        return in_array($value, self::HTTP_REQUEST_ALL, $strict);
    }
}
