<?php

/**
 * Replace only first match in a string.
 * Use preg_replace() instead of str_replace().
 */

$output = preg_replace('/abc/', '123', $input, 1);