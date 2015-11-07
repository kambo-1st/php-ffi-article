<?php
$ffi = FFI::cdef(
    'char *strtok(char *str, const char *delim);',
    'libc.so.6'
);

$delimiter = '-';
$token = $ffi->strtok('foo-bar-baz', $delimiter);

var_dump($token);
echo FFI::string($token);
