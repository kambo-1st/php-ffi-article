<?php

$ffi = FFI::cdef(
    "typedef struct {
            unsigned int gl_pathc; // number of found items
            char **gl_pathv; // contains found files/folders
            unsigned int gl_offs;
    } glob_t;
    int glob(const char *__restrict, int, int (*)(const char *, int), glob_t *__restrict);
    void globfree(glob_t *);",
    "libc.so.6"
);

$result = $ffi->new("glob_t");
$ffi->glob('*', null, null, FFI::addr($result));

for ($i = 0; $i < $result->gl_pathc; $i++) {
    echo FFI::string($result->gl_pathv[$i]).PHP_EOL; // found file name
}

$ffi->globfree(FFI::addr($result));
