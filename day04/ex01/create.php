<?php

if ($_POST["submit"] === "OK" and $_POST["login"] and $_POST["passwd"])
{
    $marker = 1;
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
                $marker = 0;
                break;
            }
        }
    }
    if ($marker)
    {
        $pass = hash('whirlpool',$_POST["passwd"]);
        $new = array("login" => $_POST["login"], "passwd" => $pass);
        array_push($arr, $new);
        echo ("OK\n");
    }
    file_put_contents('../private/passwd', serialize($arr));
}
else
    echo ("ERROR\n");