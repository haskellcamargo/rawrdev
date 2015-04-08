<?php
/**
 * Rawr PHP (https://haskellcamargo.github.io/)
 *
 * @link      https://rawr.readthedocs.org/
 * @copyright Copyright (C) 2015 Marcelo Camargo <marcelocamargo@linuxmail.org>
 * @license   MIT
 */
namespace Rawr\Core;

use \Rawr\DataType;

/**
 * Static functions with no side-effects to work with type-inference.
 */
final class TypeInference
{
    public static final function determine($value)
    {
        if (is_float($value)) {
            return new \Rawr\DataType\Decimal($value);
        } elseif (is_integer($value)) {
            return new \Rawr\DataType\Int($value);
        } elseif (is_string($value)) {
            return new \Rawr\DataType\String($value);
        } elseif (is_array($value)) {
            return new \Rawr\DataType\Collection($value);
        } elseif (is_callable($value)) {
            return new \Rawr\DataType\Fun($value);
        } else {
            return $value;
        }
    }
}