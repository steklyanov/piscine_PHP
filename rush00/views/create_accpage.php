<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("../components/head-tag-contents.php");?>
</head>
<body>
<?php include("../components/navigation.php");?>
<div>
	<div class="form">
		<form action="create_acc.php" method="POST">
			<fieldset>
				<legend>Please insert information and push create acc</legend>
				Username: <input type="text" name="login" placeholder="Login" value="" />
				<br />
				Password: <input type="password" name="passwd" placeholder="Password" value="" />
				<br />
				First name: <input type="text" name="f_name" placeholder="First name" value="" />
				<br />
				Last name: <input type="text" name="l_name" placeholder="Last name" value="" />
				<br />
				Address: <input type="text" name="address" placeholder="Address" value="" />
				<br />
				Phone number: <input type="text" name="phone" placeholder="Phone number" value="" />
			</fieldset>
			<input type="submit" name="submit" value="Create acc"/>
			<input type="submit" name="submit" value="Refresh"/>
			<input type="submit" name="submit" value="Back"/>
		</form>
	</div>
	<?php include("../components/footer.php");?>
</div>
</body>
</html>
