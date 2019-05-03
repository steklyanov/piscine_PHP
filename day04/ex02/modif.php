<?php

if ($_POST["submit"] === "OK" and $_POST["login"] and $_POST["oldpw"] and $_POST["newpw"])
{
    $marker = 0;
    $pass = hash('whirlpool', $_POST['passwd']);
    $array = file_get_contents("../private/passwd");
    $arr = unserialize($array);
    $exist = 0;
    foreach($arr as $key => $value)
    {
        if ($value['login'] === $_POST['login'] && $value['passwd'] === hash("whirlpool", $_POST['oldpw']))
        {
            print (unserialize($value['passwd']));
            $exist = 1;
            $arr[$key]['passwd'] = hash("whirlpool", $_POST['newpw']);
            break;
        }
    }
    if ($exist)
    {
        file_put_contents('../private/passwd', serialize($arr));
        echo "OK\n";
    }
    else
        echo "ERROR\n";
}
else
    echo "ERROR\n";