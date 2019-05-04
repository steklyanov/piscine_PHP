<?php
include('auth.php');
session_start();

if ($_GET["login"] and $_GET["passwd"] and $_GET["submit"] === "OK")
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