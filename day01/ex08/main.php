#!/usr/bin/php

//include ("ft_is_sort.php");
//
//$tab = array("!/@#;^", "42", "Hello World", "zZzzZzZ");
//$tab[] = "what are we doing now?";
//$tab[] = "what are we doing nww?";
//print_r($tab);
//sort($tab);
//print_r($tab);
//
//if(ft_is_sort($tab))
//    echo "The array is sorted\n";
//else
//    echo "The array is not sorted\n";
<?PHP
include("ft_is_sort.php");
$tab = array("!/@#;^", "42", "Hello World", "hi");
$tab[] = "what are we doing nww ?";
$tab[] = "what are we doing now?";
if (ft_is_sort($tab))
    echo "The array is sorted\n";
else
    echo "The array is not sorted\n";
?>