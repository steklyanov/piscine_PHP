<?php
session_start();
if (isset($_POST["delete"]))
{
    foreach($_SESSION["cart"] as $key => $value)
    {
        if ($value === $_POST["delete"])
        unset($_SESSION["cart"][$key]);
    }
    header("Refresh: 2; basket.php");
    include("basket.php");
    echo "<div><h2 style='color: green'>Delete item</h2></div>";

}
?>