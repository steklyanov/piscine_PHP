<?php
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