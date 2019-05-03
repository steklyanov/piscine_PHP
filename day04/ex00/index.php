<?php
    session_start();

    if ($_GET["login"] and $_GET["passwd"] and $_GET["submit"] === "OK")
    {
        $_SESSION["login"] = $_GET["login"];
        $_SESSION["passwd"] =$_GET["passwd"];
    }
?>

<html><body>
    <form action="index.php" method="GET">
        login: <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" />
        <br />
        passwd: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" />
        <br />
        <input type="submit" name="submit" value="OK"/>
    </form>
</body></html>
