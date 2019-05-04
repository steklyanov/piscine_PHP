<?php include("../includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
    <?php include("../components/head-tag-contents.php");?>

</head>
<body>
<?php include("../components/navigation.php");?>
<div>
    <?php
    function start_session()
    {
        session_start();
        if ($_GET["login"] and $_GET["passwd"] and $_GET["submit"] === "OK")
        {
            $_SESSION["login"] = $_GET["login"];
            $_SESSION["passwd"] =$_GET["passwd"];
        }
    }

    function auth($login, $passwd)
    {
        $val = unserialize(file_get_contents('../htdocs/private/passwd'));
        if (!$val || !$login || !$passwd)
            return FALSE;
        else
        {
            foreach($val as $key => $value)
            {
                if ($value['login'] === $login && $value['passwd'] === hash("whirlpool", $passwd))
                {
                    start_session();
                    return TRUE;

                }

            }
            return FALSE;
        }
    }


//    session_start();

    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['login']))
    {
        if (auth($_GET['login'], $_GET['passwd']) == TRUE)
        {
            $_SESSION['loggued_on_user'] = $_GET['login'];
            echo "OK\n";
        }
        else
        {
            $_SESSION['loggued_on_user'] = "";
            echo "ERROR\n";
        }
    }
    else
    {
        if (!$_SESSION['cart'])
            $_SESSION['cart'] = [''];
    }


    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['create']))
    {
        $arr = array();
        if (!(file_exists('../private')))
            mkdir('../private');
        if (!(file_exists('../private/passwd')))
            file_put_contents('../private/passwd', '');
        else
        {
            $arr = unserialize(file_get_contents('../private/passwd'));
            foreach ($arr as $key => $value)
            {
                if ($value["login"] === $_POST["login"])
                {
                    echo ("ERROR\n");
                    return false;

                }
            }
        }
        $pass = hash('whirlpool',$_POST["passwd"]);
        $new = array("login" => $_POST["login"], "passwd" => $pass);
        $arr[] = $new;
        echo ("OK\n");
        file_put_contents('../private/passwd', serialize($arr));
    }

?>

    <div class="form">
        <form method="POST" action="">
            <fieldset>
                <legend>Create account</legend>
                <input type="text" name="login" placeholder="Login" value="" />
                <input type="password" name="passwd" placeholder="Password" value="" />
            </fieldset>
            <input type="submit" name="create" value="Create acc" />
            <input type="submit" name="login" value="Sign In" />
        </form>
    </div>
    <?php include("../components/footer.php");?>
</div>
</body>
</html>