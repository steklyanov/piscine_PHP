<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
    <?php include("../components/head-tag-contents.php");?>
    <?php
    function save_changes_category($categories)
    {
        $fp = fopen("../categories.csv", 'w');
        fputcsv($fp, $categories[0]);
        fclose($fp);
    }

    if(isset($_POST['submit']) and ($_POST['submit'] === "Show"))
    {

        print_r($_POST['check_list']);
        print("\n");
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

    ?>
</head>
<body>
<div>
    <?php include("../components/navigation.php");?>
<!--    SHOW ALL -->
    <div class="checkbox">
        <form action="admin.php", method="post">
            <?php $catalog = array_map('str_getcsv', file('../categories.csv')); ?>
            <?php foreach($catalog[0] as $key => $group):?>
                <?php print($key) ?>
                <input type="checkbox" name="check_list[]" value="<?php echo ($key) ?>"> <?php echo ($group); ?><br>
            <?php endforeach;?>
            <input type="submit" name="submit" value="Show" />
        </form>
    </div>
<!-- DELETE CATEGORY -->
    <form action="admin.php", method="post">
        <?php $catalog = array_map('str_getcsv', file('../categories.csv')); ?>
        <?php foreach($catalog[0] as $key => $group):?>
            <?php print($key) ?>
            <input type="checkbox" name="check_list[]" value="<?php echo ($key) ?>"> <?php echo ($group); ?><br>
        <?php endforeach;?>
        <input type="submit" name="delete" value="Delete category" />
    </form>
<!--    ADD CATEGORY -->
    <form action="admin.php", method="post">
        <?php $catalog = array_map('str_getcsv', file('../categories.csv')); ?>
            <input type="text" name="category" value=""><br>
        <input type="submit" name="create" value="Create category" />
    </form>

    <form action="admin.php", method="post">
        <?php $catalog = array_map('str_getcsv', file('../categories.csv')); ?>
        <?php foreach($catalog[0] as $key => $group):?>
            <?php print($key) ?>
            <input type="checkbox" name="check_list[]" value="<?php echo ($key) ?>"> <?php echo ($group); ?><br>
        <?php endforeach;?>
        <input type="submit" name="add_to_item" value="Add categories" />
    </form>
</body>
</html>




