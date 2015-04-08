<?php

namespace Testing;

include_once "../src/DataType.php";
include_once "../src/DataType/Bool.php";
include_once "../src/DataType/Fun.php";
include_once "../src/Core/TypeInference.php";

use \Rawr\DataType\Fun;


$add = new Fun(function ($x, $y) {
    return $x + $y;
});

$add(10, 20);