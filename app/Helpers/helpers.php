<?php

/**
 * Format angka menjadi ribuan.
 *
 * @param  int|float  $value
 * @return string
 */
function currency($value)
{
    return number_format($value, 0, ',', '.');
}