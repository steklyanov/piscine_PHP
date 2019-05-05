<?php
	function auth($login, $passwd)
	{
		$path = "../private/passwd";
		if (!file_exists($path))
			return false;
		$cont = file_get_contents($path);
		$arrays = unserialize($cont);
		foreach($arrays as $key => $value)
		{
			if($value["login"] === $login)
			{
				if ($value["passwd"] === hash("whirlpool", $passwd))
					return true;
				else
					return false;
			}
		}
		return false;
	}
    session_start();
    if ($_POST["submit"] === "Sign In")
    {
	    if (auth($_POST["login"], $_POST["passwd"]))
	    {
            $_SESSION["loggued_on_user"] = $_POST["login"];
            $_SESSION["login"] = $_POST["login"];
            header("Refresh: 3; index.php");
		    echo "Hello, ".$_SESSION["loggued_on_user"]."\n";
    	}
    	else
    	{
            header("Refresh: 3; login_page.php");
            include("login_page.php");
            unset($_SESSION["loggued_on_user"]);
    		echo "Incorrect Login or Password\nCheck input or Create acc";
        }
    }
    elseif ($_POST["submit"] === "Create acc")
        header("Location: create_accpage.php");
    elseif ($_POST["submit"] === "Delete acc")
    {	
        if (auth($_POST["login"], $_POST["passwd"]))
        {
            $path = "../private/passwd";
            $cont = file_get_contents($path);
            $arrays = unserialize($cont);
            unset($arrays[$_POST["login"]]);
            unset($_SESSION["loggued_on_user"]);
            unset($_SESSION["login"]);
            unset($_SESSION["card"]);
            $cont = serialize($arrays);
            file_put_contents($path, $cont, LOCK_EX);
            header("Refresh: 2; index.php");
            include("login_page.php");
            echo "Your account deleted\n";
        }
        else
        {
            header("Refresh: 3; login_page.php");
            include("login_page.php");
            echo "Incorrect Login or Password\n";
        }
    }
    elseif ($_POST["submit"] === "Log Out")
    {
        unset($_SESSION["login"]);
        unset($_SESSION["card"]);
        header("Refresh: 2; index.php");
        include("login_page.php");
        echo "Log Out...Good Bye\n";
    }
?>
