#!/usr/bin/php
<?php
print ("Enter a number: ");
if ($argc == 1)
{
    print ("'' is not a number");
}
else
{
    if (is_int($argv[1]))
    {
        print ($argv[1]);
    }
    else
    {
        print ("'".$argv[1]."' is not a number");
    }
}
?>