<?php

declare(strict_types=1);

namespace Constup\PhpConstants;

/**
 * Class Visibility
 *
 * @see https://www.php.net/manual/en/language.oop5.visibility.php
 *
 * @package Constup\PhpConstants
 */
class Visibility
{
    const PRIVATE = 'private';
    const PROTECTED = 'protected';
    const PUBLIC = 'public';

    const VISIBILITY_ALL = [
        self::PRIVATE,
        self::PROTECTED,
        self::PUBLIC,
    ];

    /**
     * @param string $value
     * @param bool $strict
     * @return bool
     */
    public static function contains(string $value, bool $strict = false): bool
    {
        return in_array($value, self::VISIBILITY_ALL, $strict);
    }
}
