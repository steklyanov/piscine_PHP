<?php session_start()?>
<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
    <?php include("../components/head-tag-contents.php");?>
    <?php
    $products = array_map('str_getcsv', file('../base.csv'));
    function save_changes_category($categories)
    {
        $fp = fopen("../categories.csv", 'w');
        fputcsv($fp, $categories[0]);
        fclose($fp);
    }

    if(isset($_POST['submit']) and ($_POST['submit'] === "Show"))
    {
//        print_r($_POST['check_list']);
//        print("\n");
        $products = array_map('str_getcsv', file('../base.csv'));
        $products2 = array();
        foreach ($products as $key => $value)
        {
            $cat = explode(':',$products[$key][5]);
            foreach ($cat as $key => $value)
                foreach ($_POST['check_list'] as $key2 => $value2)
                    if ($value === $value2)
                        array_push($products2, $products[$key]);
        }
        $products = $products2;
        print_r($products);
        print ($_SESSION['suma']);
//        foreach($products2 as $el1 => $t1)
//            foreach ($products2 as $el2 => $t2)
//                if()
    }

    ?>
</head>
<body>
<div>
    <?php include("../components/navigation.php");?>
<!--    --><?php //$products = array_map('str_getcsv', file('../base.csv')); ?>
    <!--  QUERY FOR CATEGORIES ON MAIN PAGE  -->
    <div class="checkbox">
        <form action="catalog.php", method="post">
            <?php $catalog = array_map('str_getcsv', file('../categories.csv')); ?>
            <?php foreach($catalog[0] as $key => $group):?>
                <?php print($key) ?>
                <input type="checkbox" name="check_list[]" value="<?php echo ($key) ?>"> <?php echo ($group); ?><br>
            <?php endforeach;?>
            <input type="submit" name="submit" value="Show" />
        </form>
    </div>

        <div class="container flex-container" >
            <?php foreach(array_slice($products, 1) as $product):?>
                <div class="product-item">
                    <img class="img" src="<?php print $product[3]?>" alt="Lights">
                    <div class="product-list">
                        <p style="text-align:center;"><?php print $product[1]?></p>
                        <p style="text-align:center;color:#04B745;"><b><?php print $product[4]?></b></p>
                        <form method="POST" action="saving_basket.php">
                            <p style="price">
                                <button class="button" type="submit" name="order" value="<?php print $product[0]?>">Add To Cart</button>
                                <input type="submit" class="button"  name="submit" value="Basket"/>
                                <input type="hidden" name="sku" value="<?php print $product[0]?>">
                                <button class="button" type="submit" name="delete" value="<?php print $product[0]?>">Delete</button>
                            </p>
                        </form>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    <?php include("../components/footer.php");?>
</div>
</body>
</html>
