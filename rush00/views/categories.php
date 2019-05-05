<?php

function save_changes_category($categories)
{
    $fp = fopen("../categories.csv", 'w');
    fputcsv($fp, $categories[0]);
    fclose($fp);
}



function create_category($id, $name)
{
    $categories = array_map('str_getcsv', file('../categories.csv'));
    print_r($categories);
    if ($id)
        $categories[0][$id] = $name;
    else
        array_push($categories[0], $name);
    save_changes_category($categories);
}

function delete_category($id)
{
    $categories = array_map('str_getcsv', file('../categories.csv'));
    unset($categories[0][$id]);
    save_changes_category($categories);
}
