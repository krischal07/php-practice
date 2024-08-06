<?php

$name = "      Krischal";
echo strlen($name)."\n";
echo strtoupper($name)."\n";
echo strtolower($name)."\n";
echo trim($name)."\n";
echo ltrim($name)."\n";
echo strlen(trim($name))."\n";

$string ="hey man whats up";
$arr = explode(" ",$name);
var_dump($arr);

$newarr = ["test1","test2","test3","test4"];
$newstring = implode("-", $newarr);
var_dump($newstring);
echo $newstring;

?>