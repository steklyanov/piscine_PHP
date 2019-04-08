<?php
if ($argc > 1)
{
    for ($i = 1; $i < $argc; $i++) {
        array_push($string, explode(' ', preg_replace('/ +/', ' ', $argv[$i])));
    }
    sort($string);
    foreach ($string as $s) {
        print ($s."\n");
    }
}
?>
