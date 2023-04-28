<?php
$age = 20;
if($age >= 18){
    echo 'you are big enough to vote';
}else{
    echo 'you are not big enough to vote';
}
echo "</br>";
//this will print the month\day\hour
$d = date("F j H");
echo $d, "</br>";
$t= date("H");
if($t<12){
    echo'Good Morning';
}elseif($t>12 && $t<17){
    echo'Good afternoon';
}else{
    echo'Good evenning';
}
echo "</br>";
$post= ['Firts Post','Post two','Post Three'];
if(!empty($post)){
    echo $post[0];
}else{
    echo 'Array is empty';
}
echo "</br>";
//we can make this condition short by writing
//if we don't have else condition we can use null or ?? null
echo !empty($post)?$post[1]:'No post';
echo "</br>";
$trafficLight = 'blue';
switch($trafficLight){
    case 'red':
        echo 'Stop!';
        break;
    case 'yellow':
        echo 'get ready to stop';
        break;
    case 'grern':
        echo 'Go!';
        break;
    default:
    echo 'The traffic not working';
}
?>
