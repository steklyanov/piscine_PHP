#!/usr/bin/php
<?php

if ($argc > 1)
{
    $string = explode(' ', $argv[1]);
    $string = array_values(array_filter($string, function ($v){ return $v != "";}));
    $len = count($string);
    for ($i = 1; $i < $len; $i++) {
        print ($string[$i]." ");
    }
    print ($string[0]."\n");
}
?>