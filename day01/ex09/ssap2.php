#!/usr/bin/php
<?php

function is_alpha($str)
{
    $string = str_split($str);
    foreach ($string as $s)
    {
        if (!((ord($s) >= ord('a') and ord($s) <= ord('z')) or (ord($s) >= ord('A') and ord($s) <= ord('Z'))))
            return false;
    }
    return true;
}

if ($argc > 1)
{
$arr = array();
for ($i = 1; $i < $argc; $i++) {
    $string = explode(' ', $argv[$i]);
    $string = array_filter($string, function ($v){ return $v != "";});
    $arr = array_merge($arr, $string);
}

$numeric = array();
$ascii = array();
$alpha = array();
foreach ($arr as $a) {
    if (is_numeric($a))
        array_push($numeric, $a);
    else if (is_alpha($a))
        array_push($alpha, $a);
    else
        array_push($ascii, $a);
}
sort($numeric, SORT_STRING);
sort($alpha, SORT_NATURAL | SORT_FLAG_CASE);
sort($ascii);
foreach ($alpha as $a)
    echo $a."\n";
foreach ($numeric as $a)
    echo $a."\n";
foreach ($ascii as $a)
    echo $a."\n";
}
?>
