#!/usr/bin/php
<?php

function img_match($str)
{
//
//    preg_replace("@ @",)
}


function all_matches($str)
{
    print_r ($str);
    foreach ($str as $s)
        preg_replace_callback("@<a href(.)*>(.)*</a>@", "img_match", $s);


}


$tab = file($argv[1]);
foreach ($tab as $string)
    preg_replace_callback('@title="(.)*"@', "all_matches", $string);