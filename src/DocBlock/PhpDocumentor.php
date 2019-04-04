<?php

declare(strict_types=1);

namespace Constup\PhpConstants\DocBlock;

/**
 * Class PhpDocumentor
 *
 * @see http://docs.phpdoc.org/guides/docblocks.html
 *
 * @package Constup\PhpConstants\DocBlock
 */
class PhpDocumentor
{
    // Methods	declares that elements are suitable for consumption by third parties.
    const API = '@api';
    // Any	documents the author of the associated element.
    const AUTHOR = '@author';
    // File, Class	groups a series of packages together.
    const CATEGORY = '@category';
    // Any	documents the copyright information for the associated element.
    const COPYRIGHT = '@copyright';
    // Any	indicates that the associated element is deprecated and can be removed in a future version.
    const DEPRECATED = '@deprecated';
    // Any	shows the code of a specified example file or, optionally, just a portion of it.
    const EXAMPLE = '@example';
    // File	includes the source of the current file for use in the output.
    const FILESOURCE = '@filesource';
    // Variable	informs phpDocumentor of a global variable or its usage.
    const GLOBAL = '@global';
    // Any	tells phpDocumentor that the associated element is not to be included in the documentation.
    const IGNORE = '@ignore';
    // Any	denotes that the associated elements is internal to this application or library and hides it by default.
    const INTERNAL = '@internal';
    // File, Class	indicates which license is applicable for the associated element.
    const LICENSE = '@license';
    // Any	indicates a relation between the associated element and a page of a website.
    const LINK = '@link';
    // Class	allows a class to know which ‘magic’ methods are callable.
    const METHOD = '@method';
    // File, Class	categorizes the associated element into a logical grouping or subdivision.
    const PACKAGE = '@package';
    // Method, Function	documents a single argument of a function or method.
    const PARAM = '@param';
    // Class	allows a class to know which ‘magic’ properties are present.
    const PROPERTY = '@property';
    // Class	allows a class to know which ‘magic’ properties are present that are read-only.
    const PROPERTY_READ = '@property-read';
    // Class	allows a class to know which ‘magic’ properties are present that are write-only.
    const PROPERTY_WRITE = '@property-write';
    // Method, Function	documents the return value of functions or methods.
    const RETURN = '@return';
    // Any	indicates a reference from the associated element to a website or other elements.
    const SEE = '@see';
    // Any	indicates at which version the associated element became available.
    const SINCE = '@since';
    // Any, except File	shows the source code of the associated element.
    const SOURCE = '@source';
    // File, Class	categorizes the associated element into a logical grouping or subdivision.
    const SUBPACKAGE = '@subpackage';
    // Method, Function	indicates whether the associated element could throw a specific type of exception.
    const THROWS = '@throws';
    // Any	indicates whether any development activity should still be executed on the associated element.
    const TODO = '@todo';
    // Any	indicates a reference to (and from) a single associated element.
    const USES = '@uses';
    // Properties
    const VAR = '@var';
    // Any	indicates the current version of Structural Elements.
    const VERSION = '@version';

    const PHPDOCUMENTOR_ALL = [
        self::API,
        self::AUTHOR,
        self::CATEGORY,
        self::COPYRIGHT,
        self::DEPRECATED,
        self::EXAMPLE,
        self::FILESOURCE,
        self::GLOBAL,
        self::IGNORE,
        self::INTERNAL,
        self::LICENSE,
        self::LINK,
        self::METHOD,
        self::PACKAGE,
        self::PARAM,
        self::PROPERTY,
        self::PROPERTY_READ,
        self::PROPERTY_WRITE,
        self::RETURN,
        self::SEE,
        self::SINCE,
        self::SOURCE,
        self::SUBPACKAGE,
        self::THROWS,
        self::TODO,
        self::USES,
        self::VAR,
        self::VERSION
    ];

    /**
     * @param string $value
     * @param bool $strict
     * @return bool
     */
    public static function contains(string $value, bool $strict = false): bool
    {
        return in_array($value, self::PHPDOCUMENTOR_ALL, $strict);
    }

}
