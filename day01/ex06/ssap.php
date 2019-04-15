<?php
if ($argc > 1)
{
    for ($i = 1; $i < $argc; $i++) {
        $string = preg_replace('/ +/', ' ', $argv[$i]);
        $arr = array_push($string, explode(' ', ));
    }
    sort($arr);
    foreach ($arr as $s) {
        print ($s."\n");
    }
}
?>
