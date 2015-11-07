<?php
$parent = FFI::new("int[2][2]"); // $parent is owned pointer
$child = $parent[0];             // $child is not-owned part of $parent
unset($parent);                  // $parent is deallocated ($child became dangling pointer)
var_dump($child);                // crash because dereferencing of dangling pointer
