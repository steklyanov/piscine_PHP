#!/usr/bin/php
<?php

function replace($values)
{
    $values = preg_replace_callback('/(?<=title=")(?:.|\n)*(?=")/iU', function ($match) {return strtoupper($match[0]);}, $values);
    $values = preg_replace_callback('/(?<=>)(?!<.*>)(?:.|\n)*(?=<)/iU', function ($match) {return strtoupper($match[0]);}, $values);
    return $values[0];
}
if ($argc == 2)
{
    $file = file_get_contents($argv[1]);
    $file = preg_replace_callback('/<a(?:.|\n)+<\/a>/iU', 'replace', $file);
    print($file);
}
