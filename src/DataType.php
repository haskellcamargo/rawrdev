<?php
/**
 * Rawr PHP (https://haskellcamargo.github.io/)
 *
 * @link      https://rawr.readthedocs.org/
 * @copyright Copyright (C) 2015 Marcelo Camargo <marcelocamargo@linuxmail.org>
 * @license   MIT
 */
namespace Rawr;

/**
 * Base class for datatypes.
 */
class DataType
{
    private $value;

    /**
     * Unboxes the object, returning its inner value.
     * @author Marcelo Camargo
     * @return mixed
     */
    final public function value() 
    {
        return $this->value;
    }
}