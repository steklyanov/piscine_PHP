
<?php

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
    if (isset($products))
    {
        end($products);
        $val = key($products);
        return($val + 1);
    }
    else
        return 1;
}

function create_new_product($id, $name, $description, $link, $price, $category)
{
    $products = array_map('str_getcsv', file('../base.csv'));
    $new = array($id ?: get_new_id($products), $name, $description,$link, $price, $category);
    if ($id)
        $products[$id] = array_replace($products[$id], $new);
    else
        array_push($products, $new);
    save_changes($products);
}

function delete_item($id)
{
    $products = array_map('str_getcsv', file('../base.csv'));
    $products[$id][0] = '0';
    save_changes($products);
}
?>
