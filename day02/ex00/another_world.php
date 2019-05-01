#!/usr/bin/php
<?php
if ($argc > 1) {
    print (implode(' ', preg_split("/\s+/", $argv[1]))."\n");
}