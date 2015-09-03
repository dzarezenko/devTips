<?php

$array1 = array(1, 2, 3, 4, 5, 'a', 'b', 'c');
$array2 = array(3, 4, 5, 6, 7, 8, 9, 'c', 'd');

/*
 * Retuns union of few arrays with unique values.
 */

// PHP >= 5.6
function array_union(...$args) {
    return array_unique(call_user_func_array('array_merge', $args));
}

// PHP < 5.6
function array_union() {
    return array_unique(call_user_func_array('array_merge', func_get_args()));
}

$intersect = array_intersect($array1, $array2);
var_dump($intersect);

$diff = array_diff($array1, $array2);
var_dump($diff);

$union = array_union($array1, $array2);
var_dump($union);