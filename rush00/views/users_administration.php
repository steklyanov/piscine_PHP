<?php
	session_start();
	$path = "../private/passwd";
	if (file_exists($path))
	{
		$cont = file_get_contents($path);
		$arrays = unserialize($cont);
		if ($_POST["submit"] === "SAVE" && (isset($arrays[$_POST["ac_login"]])) && $_POST["ac_login"] !== "admin")
		{
			$arrays[$_POST["ac_login"]]["f_name"] = $_POST["f_name"];
			$arrays[$_POST["ac_login"]]["l_name"] = $_POST["l_name"];
			$arrays[$_POST["ac_login"]]["address"] = $_POST["address"];
			$arrays[$_POST["ac_login"]]["phone"] = $_POST["phone"];
			$cont = serialize($arrays);
			file_put_contents($path, $cont, LOCK_EX);
		}
		elseif ($_POST["submit"] === "DELETE_ACC" && $_POST["ac_login"] !== "admin")
		{
			unset($arrays[$_POST["ac_login"]]);
			$cont = serialize($arrays);
			file_put_contents($path, $cont, LOCK_EX);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include("../components/head-tag-contents.php");?>
</head>
<body>
<div>
	<?php include("../components/navigation.php");?>
	<div class="account_adm">
        <form action="users_administration.php" method="POST">
			<?php if (isset($arrays)) { foreach($arrays as $array) :?>
            <fieldset>
				<input class="ac_login" type="text" name="ac_login" placeholder="login" value="<?php echo $array["login"]?>"/>
				<input class="account" type="text" name="f_name" value="<?php echo (($array["f_name"])? $array["f_name"] : "FIRST NAME");?>"/>
				<input class="account" type="text" name="l_name" value="<?php echo (($array["l_name"])? $array["l_name"] : "LAST NAME");?>"/>
				<input class="address" type="text" name="address" value="<?php echo (($array["address"])? $array["address"] : "ADDRESS");?>"/>
				<input class="phone" type="text" name="phone" value="<?php echo (($array["phone"])? $array["phone"] : "PHONE NUMBER");?>"/>
				<input type="submit" name="submit" value="SAVE"/>
				<input type="submit" name="submit" value="DELETE_ACC"/>
			</fieldset>
			<?php endforeach;}?>
        </form>
    </div>
    <?php include("../components/footer.php");?>
</div>
</body>
</html>
