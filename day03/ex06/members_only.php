<?php
header("WWW-Authenticate: Basic realm=''Member area'");
if (!($_SERVER['PHP_AUTH_USER'] == 'zaz' and $_SERVER['PHP_AUTH_PW'] == 'jaimelespetitsponeys'))
{
    header('HTTP/1.0 401 Unauthorized');
    echo ('<html><body>That area is accessible for members only</body></html>');
}
else
{
    echo ('<html><body>Hello Zaz<br />'."\n");
    echo ('<img src="data:image/png;base64,');
    $image = base64_encode(file_get_contents('../img/42.png'));
    echo $image;
    echo('">'."\n");
    echo('</body>></html>'."\n");
}