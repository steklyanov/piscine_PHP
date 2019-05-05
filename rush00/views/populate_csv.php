#!/usr/bin/php
<?php
//$tmp =array(
//    array('1', 'phone', 'phone description', '../img/01.jpeg', '10$'),
//    array('2', 'phone2', 'phone description2', '../img/02.jpeg', '15$'),
//    array('3', 'php developer', 'phone description2', '../img/03.jpeg', '0$'),
//    array('4', 'nothing', 'phone description2', '../img/04.jpeg', '100$'),
//);
//
//$fp = fopen("base.csv", 'w');
//foreach ($tmp as $field)
//{
//    fputcsv($fp, $field);
//}
//
//fclose($fp);
//

function save_changes($products)
{
    $fp = fopen("../base.csv", 'w');
    foreach ($products as $field)
    {
        fputcsv($fp, $field);
    }

    fclose($fp);
}

function get_new_id($products)
{
    end($products);
    $val = key($products);
    return($val + 2);

}

function create_new_product($id, $name, $description, $link, $price, $category)
{
    $products = array_map('str_getcsv', file('../base.csv'));
    $new = array($id ?: get_new_id($products), $name, $description,$link, $category);
    if ($id)
    {
        foreach($products as $key => $value)
        {
            print ($value[0]."\n");
            print ($id."\n");
            if($value[0] == $id)
                $products[$key] = array_replace($products[$key], $new);
        }
    }
    else
    {
        array_push($products, $new);
    }
    save_changes($products);
}

function delete_item($id)
{
    $products = array_map('str_getcsv', file('../base.csv'));
    foreach($products as $key => $value)
    {
        if($key == $id)
            $products[$key][0] = '0';
        save_changes($products);
    }
}
//create_new_product(0,"new item","new item descript","../img/01.jpeg","100",1);
delete_item(1);