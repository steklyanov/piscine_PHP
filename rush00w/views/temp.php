<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
    <?php include("../components/head-tag-contents.php");?>

</head>
<body>
<div>
    <?php include("../components/navigation.php");?>
    <h2>Welcome to my website!</h2>
    <p>Some content goes here! Let's go with the classic "lorem ipsum."</p>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <?php include("../components/footer.php");?>
</div>
</body>
</html>




                            <form method="POST" action="saving_basket.php">
                                <p style="text-align:center;color:#04B745;">
                                    <button type="submit" name="order" value="<?php print $product[0]?>">Add To Cart</button>
                                    <input type="submit" name="submit" value="OK"/>
                                    <input type="hidden" name="sku" value="<?php print $product[0]?>">
                                </p>
                                </form>