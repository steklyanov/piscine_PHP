#!/usr/bin/php
<?php

function ft_split($string)
{
    $string = explode(' ', $string);
    $string = array_filter($string, function ($v){ return $v != "";});
    sort($string);
    return($string);
}
?>