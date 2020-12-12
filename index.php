<?php
$persons = [
   "name"=>"yamin",
   "age"=>21,
   "hair"=>"black"
];
$persons['university'] = "UCS(Pyay)";

echo($persons);//don't use echo for array
echo "<pre>";
//use var_dump() or print_r() for output array
die(var_dump($persons));//next work ka don't work
require "index.view.php";
?>