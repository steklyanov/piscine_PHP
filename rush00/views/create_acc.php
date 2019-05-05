<?php
	if ($_POST["submit"] === "Create acc")
	{
		if ($_POST["login"] && $_POST["passwd"])
		{
			if (!(file_exists("../private")))
				mkdir("../private", 0755, true);
			$path = "../private/passwd";
			if (file_exists($path))
			{
				$cont = file_get_contents($path);
				$arrays = unserialize($cont);
				foreach($arrays as $key => $array)
					foreach($array as $key => $value)
						if($key == "login" && $value === $_POST["login"])
						{
							header("Refresh: 2; create_acc.php");
							echo "This account already exists\n";
							return ;
						}
				$arr = array("login" => $_POST["login"],
							"passwd" => hash("whirlpool", $_POST["passwd"]),
							"f_name" => $_POST["f_name"],
							"l_name" => $_POST["l_name"],
							"address" => $_POST["address"],
							"phone" => $_POST["phone"]);
				$arrays[$_POST["login"]] = $arr;
				$cont = serialize($arrays);
				file_put_contents($path, $cont, LOCK_EX);
			}
			else
			{
				$arr = array("login" => $_POST["login"],
							"passwd" => hash("whirlpool", $_POST["passwd"]),
							"f_name" => $_POST["f_name"],
							"l_name" => $_POST["l_name"],
							"address" => $_POST["address"],
							"phone" => $_POST["phone"]);
				$arrays[$_POST["login"]] = $arr;
				$cont = serialize($arrays);
				file_put_contents($path, $cont, LOCK_EX);
			}
			header("Refresh: 2; login_page.php");
			include("create_accpage.php");
			echo "OK\n";
		}
		else
		{
			header("Refresh: 2; create_accpage.php");
			include("create_accpage.php");
			echo "Please fill Username an Password fields\n";
		}
	}
	elseif ($_POST["submit"] === "Refresh")
		header("Location: create_accpage.php");
	elseif ($_POST["submit"] === "Back")
		header("Location: login_page.php");
?>
