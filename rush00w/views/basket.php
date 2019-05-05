<?php session_start()?>
<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
    <?php include("../components/head-tag-contents.php");?>
</head>
<body>
<div>
    <?php include("../components/navigation.php");?>
    <?php $products = array_map('str_getcsv', file('../base.csv'));?>
    <?php  $summa = 0;?>
    <div class="row">
        <div class="container flex-container">
            <?php $values = array_count_values($_SESSION["cart"]); ?>
            <?php if (isset($_SESSION["cart"])) {foreach($values as $num => $key){?>
                <div class="product-item">
                    <img src="<?php print $products[$num - 1][3]?>" class="img">
                    <div class="product-list">
                        <form method="POST" action="remove_from_basket.php">
                            <p style="price">
                            <p style="text-align:center;"><?php print $products[$num - 1][1];?></p>
                            <p style="text-align:center;color:#04B745;"><b><?php print $products[$num - 1][4];?></b></p>
                            <p style="text-align:center;color:#04B745;"><b><?php print $key;?></b></p>
                            <input type="hidden" name="sku" value="<?php print $products[$num - 1][0]?>">
                            <button class="button" type="submit" name="delete" value="<?php print $products[$num - 1][0]?>">Delete</button>
                            </p>
                        </form>
                    </div>
                </div>
            <?php $summa += ($products[$num - 1][4] * $key) ?>
            <?php }};?>
        </div>
        <form method="POST" action="saving_basket.php" class="confirm_field">
                <p style="text-align:center;color:#04B745;">
                <h3>Total price : <?php print($summa); ?></h3>
                <button type="submit" name="submit" value="OK">Confirm</button>
                <input type="submit" name="submit" value="Erase"/>
                <input type="hidden" name="sku" value="<?php print $product[0]?>">
            </p>
        </form>

    <?php include("../components/footer.php");?>
</div>
</body>
</html>





