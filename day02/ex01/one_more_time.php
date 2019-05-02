#!/usr/bin/php
<?php
if ($argc > 1) {
    date_default_timezone_set('Europe/Paris');
    $arr = preg_split("/\s+/", $argv[1]);
    array_shift($arr);
    $time = array_pop($arr);
    $english_months =array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12');
    $french_months = array('/janvier/', '/février/', '/mars/', '/avril/', '/mai/', '/juin/', '/juillet/', '/août/', '/septembre/', '/octobre/', '/novembre/', '/décembre/');
    $arr[1] = preg_replace($french_months, $english_months, strtolower($arr[1]));
    list($arr[0], $arr[1]) = array($arr[1], $arr[0]);
    $date = implode('/', $arr);
    $result = $date." ".$time;
    $answer = strtotime($result);
    if ($answer === false) {
        echo "Wrong format";
    } else {
        print ($answer);
    }
}