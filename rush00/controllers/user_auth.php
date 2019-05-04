<?php

session_start();
// recieve login and password, return exist user or not
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
                return TRUE;
        }
        return FALSE;
    }
}


//
function change_pass()
{
    if ($_POST["submit"] === "OK" and $_POST["login"] and $_POST["oldpw"] and $_POST["newpw"])
    {
        $array = file_get_contents("../private/passwd");
        $arr = unserialize($array);
        foreach($arr as $key => $value)
        {
            if ($value['login'] === $_POST['login'] && $value['passwd'] === hash("whirlpool", $_POST['oldpw']))
            {
                print (unserialize($value['passwd']));
                $arr[$key]['passwd'] = hash("whirlpool", $_POST['newpw']);
                file_put_contents('../private/passwd', serialize($arr));
                return true;
            }
        }
        return false;
    }
    else
        return false;
}

function create_user()
{
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
                    return false;
            }
        }
        $pass = hash('whirlpool',$_POST["passwd"]);
        $new = array("login" => $_POST["login"], "passwd" => $pass);
        $arr[] = $new;
        file_put_contents('../private/passwd', serialize($arr));
        return true;
    }
    else
        return false;
}
