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

    /**
     * Comparison of the difference of two objects of type `Bool`.
     * @author Marcelo Camargo
     * @param  \Rawr\DataType\Bool $b
     * @return \Rawr\DataType\Bool
     */
    public function differentOf(Bool &$b)
    {
        return new Bool($this->value !== $b->value);
    }

    /**
     * Comparison of the equality of two objects of type `Bool`.
     * @author Marcelo Camargo
     * @param  \Rawr\DataType\Bool $b
     * @return \Rawr\DataType\Bool
     */
    public function equalsTo(Bool &$b)
    {
        return new Bool($this->value === $b->value);
    }

    /**
     * Returns if the value of this object is greater or equal to the received
     * value.
     * @author Marcelo Camargo
     * @param  \Rawr\DataType\Bool $b
     * @return \Rawr\DataType\Bool
     */
    public function greaterOrEq(Bool &$b)
    {
        return new Bool($this->value >= $b->value);
    }

    /**
     * Returns if the value of this object is greater than the received value.
     * @author Marcelo Camargo
     * @param  \Rawr\DataType\Bool $b
     * @return \Rawr\DataType\Bool
     */
    public function greaterThan(Bool &$b)
    {
        return new Bool($this->value > $b->value);
    }

    /**
     * The closure passed as parameter is called if the value of this object is
     * `Bool (true)`. After, it returns the value by itself to allow
     * method-chaining.
     * @author Marcelo Camargo
     * @param  \Rawr\DataType\Fun $f
     * @return \Rawr\DataType\Bool
     */
    public function ifTrue(Fun &$f)
    {
        if ($this->value) {
            $f->invoke();
        }
        return $this;
    }
    /**
     * The closure passed as parameter is called if the value of this object is
     * `Bool (false)`. After, it returns the value by itself to allow
     * method-chaining.
     * @author Marcelo Camargo
     * @param  \Rawr\DataType\Fun $f
     * @return \Rawr\DataType\Bool
     */
    public function ifFalse(Fun &$f)
    {
        if (!$this->value) {
            $f->invoke();
        }
        return $this;
    }

    /**
     * Returns if the value of this object is lesser or equal to the received
     * value.
     * @author Marcelo Camargo
     * @param  \Rawr\DataType\Bool $b
     * @return \Rawr\DataType\Bool
     */
    public function lesserOrEq(Bool &$b)
    {
        return new Bool($this->value <= $b->value);
    }

    /**
     * Returns if the value of this object is lesser than the received value.
     * @author Marcelo Camargo
     * @param  \Rawr\DataType\Bool $b
     * @return \Rawr\DataType\Bool
     */
    public function lesser(Bool &$b)
    {
        return new Bool($this->value < $b->value);
    }

    /**
     * Reverses the value of a object of type `Bool`.
     * @author Marcelo Camargo
     * @return \Rawr\DataType\Bool
     */
    public function not()
    {
        return new Bool(!$this->value);
    }

    /**
     * Alias to `ifFalse`.
     * @author Marcelo Camargo
     * @param  \Rawr\DataType\Fun $f
     * @return \Rawr\DataType\Bool
     */
    public function otherwise(Fun &$f)
    {
        return $this->ifFalse($f);
    }

    /**
     * Equivalend to `Object.ifTrue().ifFalse()`.
     * @author Marcelo Camargo
     * @param  \Rawr\DataType\Fun $f
     * @param  \Rawr\DataType\Fun $g
     * @return \Rawr\DataType\Bool
     */
    public function thenElse(Fun $f, Fun $g)
    {
        if ($this->value) {
            $f->invoke();
        } else {
            $g->invoke();
        }
        return new Bool($this->value);
    }
}
