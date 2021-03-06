<?php

namespace Girgias\QueryBuilder;

/**
 * Class SqlOperators
 * @package Girgias\QueryBuilder
 */
abstract class SqlOperators extends BasicEnum
{
    public const DIFFERENT = '<>';
    public const EQUAL = '=';
    public const LESS_THAN = '<';
    public const LESS_THAN_OR_EQUAL = '<=';
    public const MORE_THAN = '>';
    public const MORE_THAN_OR_EQUAL = '>=';
    public const IS = 'IS';
    public const IS_NOT = 'IS NOT';
}
