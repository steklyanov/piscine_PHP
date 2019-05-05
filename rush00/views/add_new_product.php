<?php
    function save_changes_category($categories)
    {
        $fp = fopen("../categories.csv", 'w');
        fputcsv($fp, $categories[0]);
        fclose($fp);
    }
	$_POST["product_id"] = (isset($_POST["product_id"])) ? $_POST["product_id"] : 0;
	$_POST["product_name"] = (isset($_POST["product_name"])) ? $_POST["product_name"] : 0;
	$_POST["description"] = (isset($_POST["description"])) ? $_POST["description"] : 0;
	$_POST["image"] = (isset($_POST["image"])) ? $_POST["image"] : 0;
	$_POST["price"] = (isset($_POST["price"])) ? $_POST["price"] : 0;
	$_POST["category"] = (isset($_POST["category"])) ? $_POST["category"] : 0;

	if ($_POST["submit"] === "DELETE_POST")
	{
		include("populate_csv.php");
		delete_item($_POST["product_id"]);
	}
	elseif ($_POST["submit"] === "SAVE")
	{
		include("populate_csv.php");
		create_new_product($_POST["product_id"], $_POST["product_name"], $_POST["description"], $_POST["image"], $_POST["price"], $_POST["category"]);
	}
	elseif ($_POST["submit"] === "Create_new")
	{
		include("populate_csv.php");
		create_new_product(0, $_POST["product_name"], $_POST["description"], $_POST["image"], $_POST["price"], $_POST["category"]);
	}
	elseif ($_POST["submit"] === "UPLOAD" and isset($_POST["product_id"]))
	{
		$products = array_map('str_getcsv', file('../base.csv'));
	}
    elseif($_POST["submit"] === "ADD_ITEM")
    {
        include("populate_csv.php");
        $products = array_map('str_getcsv', file('../base.csv'));
        $catalog = array_map('str_getcsv', file('../categories.csv'));
        if ($_POST['check_list'])
            foreach($_POST['check_list'] as $key => $value)
            {
                $products[$_POST["product_id"]][5] .= ":".$value;
                save_changes($products);
            }

    }
    if(isset($_POST['delete']))
    {
        $catalog = array_map('str_getcsv', file('../categories.csv'));
        print_r($catalog);
        foreach ($_POST['check_list'] as $key => $value)
            unset($catalog[0][$value]);
        save_changes_category($catalog);
    }

    if(isset($_POST['create']))
    {
        $catalog = array_map('str_getcsv', file('../categories.csv'));
        array_push($catalog[0], $_POST['category']);
        save_changes_category($catalog);
    }
    if(isset($_POST['add_to_item']))
    {
        $products = array_map('str_getcsv', file('../base.csv'));
        $catalog = array_map('str_getcsv', file('../categories.csv'));
        foreach($_POST['check_list'] as $key => $value)

            print ($key.":".$value);

    }
        session_start();
?>
<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("../components/head-tag-contents.php");?>
</head>
<body>
<div>
	<?php include("../components/navigation.php");?>
	<div class="create_mod admin">
        <form action="add_new_product.php" method="POST">
            <fieldset>
				<legend>Creating product</legend>
				<input class="id" type="text" name="product_id" placeholder="ID" value="<?php if (isset($_POST["submit"])) echo $products[$_POST["product_id"]][0]?>"/>
				<input class="upload" type="submit" name="submit" value="UPLOAD"/> Input product id for modify and press button
				<br />
				<input type="text" name="image" placeholder="IMAGE LINK" value="<?php if (isset($_POST["submit"])) echo $products[$_POST["product_id"]][3]?>" />
				<br />
				<input type="text" name="product_name" placeholder="PRODUCT NAME" value="<?php if (isset($_POST["submit"])) echo $products[$_POST["product_id"]][1]?>" />
				<br />
				<input class="description" type="text" name="description" placeholder="DESCRIPTION" value="<?php if (isset($_POST["submit"])) echo $products[$_POST["product_id"]][2]?>" />
				<br />
				<input class="how_much" type="text" name="price" placeholder="PRICE" value="<?php if (isset($_POST["submit"])) echo $products[$_POST["product_id"]][4]?>" />
				<input class="how_much" type="text" name="category" placeholder="CATEGORY" value="<?php if (isset($_POST["submit"])) echo $products[$_POST["product_id"]][5]?>" />
			</fieldset>
			<input type="submit" class="button11" name="submit" value="Create_new"/>
            <input type="submit" class="button11" name="submit" value="SAVE"/>
            <input type="submit" class="button11" name="submit" value="DELETE_POST"/>
<!--            CATEGORIES -->
            <div>
                <?php $catalog = array_map('str_getcsv', file('../categories.csv')); ?>
                <?php foreach($catalog[0] as $key => $group):?>
                    <input type="checkbox" name="check_list[]" value="<?php echo ($key) ?>"> <?php echo ($group); ?><br>
                <?php endforeach;?>
                <input type="submit" class="button11" name="submit" value="ADD_ITEM" />
            </div>

        </form>
        <!-- DELETE CATEGORY -->
        <form action="add_new_product.php", method="post">
            <?php $catalog = array_map('str_getcsv', file('../categories.csv')); ?>
            <?php foreach($catalog[0] as $key => $group):?>
                <?php print($key) ?>
                <input type="checkbox" name="check_list[]" value="<?php echo ($key) ?>"> <?php echo ($group); ?><br>
            <?php endforeach;?>
            <input type="submit" name="delete" value="Delete category" />
        </form>
        <!--    ADD CATEGORY -->
        <form action="add_new_product.php", method="post">
            <?php $catalog = array_map('str_getcsv', file('../categories.csv')); ?>
            <input type="text" name="category" value=""><br>
            <input type="submit" name="create" value="Create category" />
        </form>

        <form action="add_new_product.php", method="post">
            <?php $catalog = array_map('str_getcsv', file('../categories.csv')); ?>
            <?php foreach($catalog[0] as $key => $group):?>
                <?php print($key) ?>
                <input type="checkbox" name="check_list[]" value="<?php echo ($key) ?>"> <?php echo ($group); ?><br>
            <?php endforeach;?>
            <input type="submit" name="add_to_item" value="Add categories" />
        </form>

    </div>
    <?php include("../components/footer.php");?>
</div>
</body>
</html>
