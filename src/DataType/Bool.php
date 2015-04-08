<?php
/**
 * Rawr PHP (https://haskellcamargo.github.io/)
 *
 * @link      https://rawr.readthedocs.org/
 * @copyright Copyright (C) 2015 Marcelo Camargo <marcelocamargo@linuxmail.org>
 * @license   MIT
 */
namespace Rawr\DataType;

use Rawr\DataType;

/**
 * A `Bool` type can hold either `true` or `false`, two primitive values. When
 * starting designing Rawr, we decided to use `true` and `false` as
 * constructors, in a Haskell-like way, but we would have great problems with
 * performance.
 */
class Bool extends DataType
{
    /**
     * Wraps the value in a `Bool` object.
     * @param bool $value
     */
    public function __construct($value) 
    {
        $this->value = (bool) $value;
    }

    /**
     * Returns `Bool (true)` if both the value of the object and the value of
     * the received expression are true. Otherwise, `Bool (false)`.
     * @author Marcelo Camargo
     * @param  \Rawr\DataType\Bool $b
     * @return \Rawr\DataType\Bool
     */
    public function _and(Bool &$b)
    {
        return new Bool($this->value && $b->value);
    }

    /**
     * Returns `Bool (true)` if any of the values, of the object, or of the
     * received expression, are true. Otherwise, `Bool (false)`.
     * @author Marcelo Camargo
     * @param  \Rawr\DataType\Bool $b
     * @return \Rawr\DataType\Bool
     */
    public function _or(Bool &$b)
    {
        return new Bool($this->value || $b->value);
    }
}