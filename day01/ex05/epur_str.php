#!/usr/bin/php
<?php
if ($argc > 1) {
    $string = explode(' ', $argv[1]);
    $string = array_filter($string, function ($v){ return $v != "";});
    $answer = implode(' ', $string);
    print ($answer."\n");
}
?>
