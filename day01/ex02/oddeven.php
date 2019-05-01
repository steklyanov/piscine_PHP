#!/usr/bin/php
<?php
while (1)
{
    print ("Enter a number: ");
    $value = trim(fgets(STDIN));
    if (feof(STDIN))
    {
        print ("\n");
        exit();
    }
    elseif (is_numeric($value))
    {
        if ($value % 2 == 0)
            print ("The number ".$value." is even\n");
        else
            print ("The number ".$value." is odd\n");
    }
    else
        print ("'".$value."' is not a number\n");
}
?>
