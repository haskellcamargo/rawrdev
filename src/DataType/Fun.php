<?php
/**
 * Rawr PHP (https://haskellcamargo.github.io/)
 *
 * @link      https://rawr.readthedocs.org/
 * @copyright Copyright (C) 2015 Marcelo Camargo <marcelocamargo@linuxmail.org>
 * @license   MIT
 */
namespace Rawr\DataType;

use \Rawr\Core\TypeInference;
use \Exception;
use \Rawr\DataType;
use \ReflectionFunction;

/**
 * Type for first-class functions.
 */
class Fun extends DataType
{
    private $reflObj;

    /**
     * Wraps the value into a `Fun` object.
     * @author Marcelo Camargo
     * @param \Closure $f
     */
    public function __construct($f)
    {
        if (!is_callable($f) && !is_string($f)) {
            throw new Exception;
        } else {
            $this->value = $f;
            $this->reflObj = new ReflectionFunction($f);
        }
    }

    /**
     * Magic method for when a function is invoked in the standard PHP-way.
     * @author Marcelo Camargo
     */
    public function __invoke()
    {
        $arguments = func_get_args();
        if ($arguments < $this->reflObj->getNumberOfRequiredParameters()) {
            throw new Exception;
        }
        if (count($arguments) > 0) {
            return TypeInference::determine(
                call_user_func_array($this->value, $arguments)
            );
        } else {
            return TypeInference::determine(call_user_func($this->value));
        }
    }
}