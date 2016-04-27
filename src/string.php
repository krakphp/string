<?php

namespace Krak\String;

function truncate($str, $len, $end = '') {
    if (strlen($str) <= $len) {
        return $str;
    }

    return substr($str, 0, $len - strlen($end)) . $end;
}

function map_join($values, $sep, $predicate) {
    $buf = '';
    foreach ($values as $key => $val) {
        $buf .= $sep . $predicate($val, $key);
    }

    return substr($buf, strlen($sep));
}

/** hide a substring by replacing with a certain value */
function substr_hide($string, $replacement_char, $start, $length = null) {
    $substr = $length === null ? substr($string, $start) : substr($string, $start, $length);
    $sublen = strlen($substr);

    return $length === null
        ? substr_replace($string, str_repeat($replacement_char, $sublen), $start)
        : substr_replace($string, str_repeat($replacement_char, $sublen), $start, $length);
}
