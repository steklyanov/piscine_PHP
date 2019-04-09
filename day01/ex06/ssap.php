#!/usr/bin/php
<?php
if ($argc > 1)
{
    $arr = array();
    for ($i = 1; $i < $argc; $i++) {
        $arr = array_merge($arr, explode(' ', preg_replace('/ +/', ' ', $argv[$i])));
    }
    sort($arr);
    foreach ($arr as $s) {
        print ($s."\n");
    }
}
?>
