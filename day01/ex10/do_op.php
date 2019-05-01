#!/usr/bin/php
<?php
if ($argc == 4)
{
    $elem = array();
    unset($argv[0]);
    foreach ($argv as $s)
        $elem[] = trim($s);
    if ($elem[1] == '+')
        print (($elem[0] + $elem[2])."\n");
    else if ($elem[1] == '/')
        print (($elem[0] / $elem[2])."\n");
    else if ($elem[1] == '-')
        print (($elem[0] - $elem[2])."\n");
    else if ($elem[1] == '*')
        print (($elem[0] * $elem[2])."\n");
    else
        print "0\n";
}
else
    print "Too much, honey\n";
?>