#!/usr/bin/php
<?php
function ft_is_sort($arr) {
    $arr2 = sort($arr);
    $arr3 = rsort($arr);
    return (var_dump($arr == $arr2) OR var_dump($arr == $arr3));
}
?>