#!/usr/bin/php
<?php
function ft_split($string)
{
    $string = explode(' ', preg_replace('/ +/', ' ', $string));
    sort($string);
    return($string);
}
?>