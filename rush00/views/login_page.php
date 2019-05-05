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
        <form action="login.php" method="POST">
            <fieldset>
                <legend>Sign-In</legend>
                <input type="text" name="login" placeholder="Login" value="" />
                <input type="password" name="passwd" placeholder="Password" value="" />
            </fieldset>
            <input type="submit" name="submit" value="Create acc"/>
            <input type="submit" name="submit" value="Delete acc"/>
            <input type="submit" name="submit" value="Sign In"/>
            <input type="submit" name="submit" value="Log Out"/>
        </form>
    </div>
    <?php include("../components/footer.php");?>
</div>
</body>
</html>