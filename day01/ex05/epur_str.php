#!/usr/bin/php
<?php
if ($argc > 1) {
//    $string = explode(' ', preg_replace('/ +/', ' ', $string));
    $string = trim(preg_replace('/ +/', ' ', $argv[1]));
    print ($string."\n");
}
?>
