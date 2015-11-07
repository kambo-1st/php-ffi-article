<?php

$p1 = FFI::new("int[2]"); // array of two integers

$p1[0] = 123;

var_dump(count($p1)); // int(2)
var_dump($p1[0]);     // int(123)
