<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
    <?php include("../components/head-tag-contents.php");?>
    <?php include("../components/connect_db.php")?>

</head>
<body>
<div>
    <?php include("../components/navigation.php");?>
    <?php include("../controllers/login.php"); ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ex01</title>
    </head>
    <body>
    <form method="POST" action="">
        <fieldset>
            <legend>Login</legend>
            <input type="text" name="login" placeholder="Login" value="" />
            <input type="password" name="passwd" placeholder="Password" value="" />
        </fieldset>
        <input type="submit" name="submit" value="Sign In" />
    </form>
    <a href="create.php">Create account</a>
    <a href="modify.php">Modify account</a>
    </body>
    </html>
    <?php include("../components/footer.php");?>
</div>
</body>
</html>