<?php 
$name = 'Nouf';
echo $name; 
echo "<br>";
//this will print true
$has_kids= "true";
echo $has_kids;
echo "<br>";
//that's won't print a thing coz it's false
$has_Kids= 'false';
echo $has_Kids;
echo "<br>";
//if i want to print the bool false use this
var_dump($has_Kids);
echo "<br>";
/*this two ways to print var and string you can 
write without {}*/
echo $name  . 'is' .$has_kids. 'only';
echo "<br>";
echo "${name}  is  ${has_kids}  only";
echo "<br>";
echo '5'+'5';
echo "<br>";
$x = 7+7;
var_dump($x);
echo "<br>";
//this is how to creat constant
define('HOST','localhost');
define('DB_Name', 'dev_db');
echo DB_Name;
echo "<br>";
echo HOST;

?>
