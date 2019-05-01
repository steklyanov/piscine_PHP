#!/usr/bin/php
<?php
function ft_is_sort($arr) {
    $arr2 = $arr;
    sort($arr2);
    return ($arr === $arr2);
}
?>

