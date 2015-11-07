<?php
$ffi = FFI::cdef(
    'int abs(int j);', // function declaration in C language
    'libc.so.6'        // library from which the function will be called
);

var_dump($ffi->abs(-42));
