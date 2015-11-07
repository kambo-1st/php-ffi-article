<?php

$cmp = function ($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
};

$array = [2, 3, 1];
usort($array, $cmp);

var_export($array);
