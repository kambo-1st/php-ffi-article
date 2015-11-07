<?php
$ffi = FFI::cdef(
    "void qsort (void *array, size_t count, size_t size, int (*comp)(const void *a, const void *b));",
    "libc.so.6"
);
$array = [3, 1, 2];
$ffi->qsort(
    $array,
    count($array),
    FFI::sizeof(FFI::type("int")),
    $cmp
);

// Fatal error: Uncaught FFI\Exception: Passing incompatible argument 1 of C function 'qsort', expecting 'void*', found PHP 'array'
