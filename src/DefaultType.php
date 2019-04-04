<?php

declare(strict_types=1);

namespace Constup\PhpConstants;

/**
 * Class DefaultType
 *
 * @see https://www.php.net/manual/en/language.types.intro.php
 *
 * @package Constup\PhpConstants
 */
class DefaultType
{
    const BOOL = 'bool';
    const BOOLEAN = 'boolean';
    const INTEGER = 'integer';
    const INT = 'int';
    const FLOAT = 'float';
    const STRING = 'string';
    const ARRAY = 'array';
    const OBJECT = 'object';
    const CALLABLE = 'callable';
    const ITERABLE = 'iterable';
    const RESOURCE = 'resource';
    const NULL = 'null';
    const VOID = 'void';

    const DEFAULT_TYPE_ALL = [
        self::BOOL,
        self::BOOLEAN,
        self::INTEGER,
        self::INT,
        self::FLOAT,
        self::STRING,
        self::ARRAY,
        self::OBJECT,
        self::CALLABLE,
        self::ITERABLE,
        self::RESOURCE,
        self::NULL,
        self::VOID,
    ];

    /**
     * @param string $value
     * @param bool $strict
     * @return bool
     */
    public static function contains(string $value, bool $strict = false): bool
    {
        return in_array($value, self::DEFAULT_TYPE_ALL, $strict);
    }
}
