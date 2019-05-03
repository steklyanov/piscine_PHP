<?php
//print_r($_SERVER);
if (!isset($_SERVER['PHP_AUTH_USER']))
{
    header('Authorization: Basic authorization');
    header('HTTP/1.0 401 Unauthorized');
}