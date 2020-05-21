<?php


$f=fopen("users.txt", "r");
$s = fread($f, filesize("users.txt"));
fclose($f);


$a=explode(PHP_EOL, $s);
$k = count($a);


var_dump($k);
