<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
    <?php include("../components/head-tag-contents.php");?>
</head>
<body>
<div>
    <?php include("../components/navigation.php");?>
    <?php $products = array_map('str_getcsv', file('../base.csv')); ?>
        <div class="container flex-container" >
            <?php foreach($products as $product):?>
                <div class="product-item">
                    <img class="img" src="<?php print $product[3]?>" alt="Lights">
                    <div class="product-list">
                        <p style="text-align:center;"><?php print $product[1]?></p>
                        <p style="text-align:center;color:#04B745;"><b><?php print $product[4]?></b></p>
                        <form method="POST" action="saving_basket.php">
                            <p style="price">
                                <button class="button" type="submit" name="order" value="<?php print $product[0]?>">Add To Cart</button>
                                <input type="submit" name="submit" value="Basket"/>
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
