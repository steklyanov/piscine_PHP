<?php
	session_start();
	if (isset($_POST["order"]))
	{
		$_SESSION["cart"][] = $_POST["order"];
		header("Refresh: 2; catalog.php");
		include("catalog.php");
		echo "<div><h2 style='color: green'>Your order has been saved</h2></div>";
	}
	elseif (isset($_POST["delete"]))
	{
		foreach($_SESSION["cart"] as $key => $value)
		{
			if ($value === $_POST["delete"])
				unset($_SESSION["cart"][$key]);
		}
		header("Refresh: 2; catalog.php");
		include("catalog.php");
		echo "<div><h2 style='color: green'>Delete item</h2></div>";

	}
	elseif (isset($_POST["submit"]))
	{
		if ($_POST["submit"] === "Erase")
		{
			unset($_SESSION["cart"]);
			header("Location: basket.php");
		}
		if ($_POST["submit"] === "Basket")
			header("Location: basket.php");
		if ($_POST["submit"] === "OK" && isset($_SESSION["login"]))
		{
			$path = "../private/order";
			if (file_exists($path))
			{
				$cont = file_get_contents($path);
				$arrays = unserialize($cont);
				$arr = array("product_id" => $_SESSION["cart"],
							"time" => time(),
							"done" => "0");
				$arrays[$_SESSION["loggued_on_user"]][] = $arr;
				$cont = serialize($arrays);
				file_put_contents($path, $cont, LOCK_EX);
			}
			else
			{
				$arr = array("product_id" => $_SESSION["cart"],
					"time" => time(),
					"done" => "0");
				$arrays[$_SESSION["loggued_on_user"]] = $arr;
				$cont = serialize($arrays);
				file_put_contents($path, $cont, LOCK_EX);
			}
			unset($_SESSION["cart"]);
			header("Refresh: 2; index.php");
			echo "Your order is being prepared\n";
		}
		else
		{
			header("Refresh: 2; login_page.php");
			echo "Please, Log In\n";
		}
	}
?>
