#!/usr/bin/php
<?php
function ft_is_sort($arr) {
    $arr2 = $arr;
    sort($arr2);
    $arr3 = $arr;
    rsort($arr3);
    return (array_diff($arr, $arr2) == 0 OR array_diff($arr, $arr3) == 0);
}
?>