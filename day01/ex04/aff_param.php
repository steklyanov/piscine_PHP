#!/usr/bin/php
<?php
if ($argc > 1)
{
    for ($i = 1; $i < $argc; $i++) {
        print ($argv[$i]."\n");
    }
}
?>