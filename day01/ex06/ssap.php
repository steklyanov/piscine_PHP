#!/usr/bin/php
<?php
if ($argc > 1)
{
    $arr = array();
    for ($i = 1; $i < $argc; $i++) {
        $string = explode(' ', $argv[$i]);
        $string = array_filter($string, function ($v){ return $v != "";});
        $arr = array_merge($arr, $string);
    }
    sort($arr);
    foreach ($arr as $s) {
        print ($s."\n");
    }
}
?>
