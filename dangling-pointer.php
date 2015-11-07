<?php

$ffi = FFI::cdef(
    "struct tm {
          int tm_sec;
          int tm_min;
          int tm_hour;
          int tm_mday;
          int tm_mon;
          int tm_year;
          int tm_wday;
          int tm_yday;
          int tm_isdst;    
      };",
    "libc.so.6"
);

function dateTimeDefinition($ffi) {
    $time = $ffi->new("struct tm");
    $time->tm_sec = 10;

    var_dump($time->tm_sec);

    return FFI::addr($time);
}

$time = dateTimeDefinition($ffi);
var_dump($time->tm_sec); // Print rubbish value or crash script
