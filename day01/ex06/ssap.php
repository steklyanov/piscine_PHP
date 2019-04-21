#!/usr/bin/php
<?php
if ($argc > 1)
{
    $arr = array();
    for ($i = 1; $i < $argc; $i++) {
        $string = preg_replace('/ +/', ' ', $argv[$i]);
        $arr = array_push($string, explode(' ', $st));
    }
    sort($arr);
    foreach ($arr as $s) {
        print ($s."\n");
    }
}
?>
