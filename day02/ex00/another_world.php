#!/usr/bin/php
<?php
if ($argc > 1) {
    print (implode(' ', preg_split("/[ \t]+/", $argv[1]))."\n");
}