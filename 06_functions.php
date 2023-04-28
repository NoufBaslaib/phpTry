<?php
function registerUser($email){
    echo $email, ' is registered';
}
registerUser('nouf@gmail.com');
echo"</br>";
//i can give n1 and n2 a values as a default values
function sum($n1, $n2){
    return $n1+$n2;
}
echo sum(5,5);
echo "</br>";
//a short way doing function
$multy= fn($n1,$n2)=>$n1*$n2;
echo $multy(9,9);
?>