<?php
session_start();
if ($_GET["login"])
?>

<html><body>
<form action="index.php" method="GET">
    Identifiant: <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" />
    <br />
    Mot de passe: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" />
    <br />
    <input type="submit" name="submit" value="OK"/>
</form>
</body></html>
