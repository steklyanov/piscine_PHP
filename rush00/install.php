<?php
include("/views/populate_csv.php");
include("/views/login.php");

$tmp =array(
    array('1', 'phone', 'phone description', '../img/01.jpeg', '10$', '1:2:'),
    array('2', 'phone2', 'phone description2', '../img/02.jpeg', '15$', '1:2'),
    array('3', 'php developer', 'phone description2', '../img/03.jpeg', '0$', '1'),
    array('4', 'nothing', 'phone description2', '../img/04.jpeg', '100$')
);


$fp = fopen("base.csv", 'x');
foreach ($tmp as $field)
{
    fputcsv($fp, $field);
}
fclose($fp);

$tmp =array(
    array('new', 'old', 'haha')
);
$fp = fopen("categories.csv", 'x');
foreach ($tmp as $field)
{
    fputcsv($fp, $field);
}
fclose($fp);




$marker = 1;
$arr = array();
if (!(file_exists('/private')))
    mkdir('/private');
if (!(file_exists('/private/passwd')))
    file_put_contents('/private/passwd', '');

$arr = array("login" => 'admin',
    "passwd" => hash("whirlpool", 'admin'));
file_put_contents('../private/passwd', serialize($arr));

