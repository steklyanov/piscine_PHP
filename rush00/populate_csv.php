#!/usr/bin/php
<?php
$tmp =array(
    array('1', 'phone', 'phone description', '../img/01.jpeg', '10$'),
    array('2', 'phone2', 'phone description2', '../img/02.jpeg', '15$'),
    array('3', 'php developer', 'phone description2', '../img/03.jpeg', '0$'),
    array('4', 'nothing', 'phone description2', '../img/04.jpeg', '100$'),
);

$fp = fopen("base.csv", 'w');
foreach ($tmp as $field)
{
    fputcsv($fp, $field);
}

fclose($fp);