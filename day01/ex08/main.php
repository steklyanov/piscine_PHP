#!/usr/bin/php
<?php

include ("ft_is_sort.php");

$tab = array("!/@#;^", "42", "Hello World", "h1", "zZzZzZz");
$tab[] = "what are we doing now?";

if(ft_is_sort($tab))
    echo "The array is sorted\n";
else
    echo "The array is not sorted\n";
?>