#!/usr/bin/php
<?php

if ($argc > 1)
{
    $string = explode(' ', preg_replace('/ +/', ' ', $argv[1]));
    $len = count($string);
    for ($i = 1; $i< $len; $i++) {
        print ($string[$i]." ");
    }
    print ($string[0]."\n");
}
?>
