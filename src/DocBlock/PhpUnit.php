<?php

declare(strict_types=1);

namespace Constup\PhpConstants\DocBlock;

/**
 * Class PhpUnit
 *
 * @see https://phpunit.de/manual/6.5/en/appendixes.annotations.html
 *
 * @package Constup\PhpConstants\DocBlock
 */
class PhpUnit
{
    const AFTER = '@after';
    const AFTER_CLASS = '@afterClass';
    const BACKUP_GLOBALS = '@backupGlobals';
    const BACKUP_STATIC_ATTRIBUTES = '@backupStaticAttributes';
    const BEFORE = '@before';
    const BEFORE_CLASS = '@beforeClass';
    const CODE_COVERAGE_IGNORE = '@codeCoverageIgnore';
    const COVERS = '@covers';
    const COVERS_DEFAULT_CLASS = '@coversDefaultClass';
    const COVERS_NOTHING = '@coversNothing';
    const DATA_PROVIDER = '@dataProvider';
    const DEPENDS = '@depends';
    const DOES_NOT_PERFORM_ASSERTIONS = '@doesNotPerformAssertions';
    const EXPECTED_EXCEPTION = '@expectedException';
    const EXPECTED_EXCEPTION_CODE = '@expectedExceptionCode';
    const EXPECTED_EXCEPTION_MESSAGE = '@expectedExceptionMessage';
    const EXPECTED_EXCEPTION_MESSAGE_REG_EXP = '@expectedExceptionMessageRegExp';
    const GROUP = '@group';
    const LARGE = '@large';
    const MEDIUM = '@medium';
    const PRESERVE_GLOBAL_STATE = '@preserveGlobalState';
    const REQUIRES = '@requires';
    const RUN_TESTS_IN_SEPARATE_PROCESSES = '@runTestsInSeparateProcesses';
    const RUN_IN_SEPARATE_PROCESS = '@runInSeparateProcess';
    const SMALL = '@small';
    const TEST = '@test';
    const TESTDOX = '@testdox';
    const TEST_WITH = '@testWith';
    const TICKET = '@ticket';

    const PHPUNIT_ALL = [
        self::AFTER,
        self::AFTER_CLASS,
        self::BACKUP_GLOBALS,
        self::BACKUP_STATIC_ATTRIBUTES,
        self::BEFORE,
        self::BEFORE_CLASS,
        self::CODE_COVERAGE_IGNORE,
        self::COVERS,
        self::COVERS_DEFAULT_CLASS,
        self::COVERS_NOTHING,
        self::DATA_PROVIDER,
        self::DEPENDS,
        self::DOES_NOT_PERFORM_ASSERTIONS,
        self::EXPECTED_EXCEPTION,
        self::EXPECTED_EXCEPTION_CODE,
        self::EXPECTED_EXCEPTION_MESSAGE,
        self::EXPECTED_EXCEPTION_MESSAGE_REG_EXP,
        self::GROUP,
        self::LARGE,
        self::MEDIUM,
        self::PRESERVE_GLOBAL_STATE,
        self::REQUIRES,
        self::RUN_TESTS_IN_SEPARATE_PROCESSES,
        self::RUN_IN_SEPARATE_PROCESS,
        self::SMALL,
        self::TEST,
        self::TESTDOX,
        self::TEST_WITH,
        self::TICKET,
    ];

    /**
     * @param string $value
     * @param bool $strict
     * @return bool
     */
    public static function contains(string $value, bool $strict = false): bool
    {
        return in_array($value, self::PHPUNIT_ALL, $strict);
    }

}
