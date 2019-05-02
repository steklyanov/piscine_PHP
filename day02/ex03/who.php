#!/usr/bin/php
<?php

//$file = fopen('/var/run/utmpx', 'r');
$file = file_get_contents('/var/run/utmpx');
print ($file);