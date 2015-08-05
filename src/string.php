<?php

namespace Krak\String;

function truncate($str, $len, $end = '')
{
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
