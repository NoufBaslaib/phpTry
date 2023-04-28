<?php
$colors=['red','white','black','green'];
//add elements to array
array_push($colors,'blue','yellow');
array_unshift($colors,'pink');
//delete elements from array
//pop will delete the last element
array_pop($colors);
//shift will delete the first element
array_shift($colors);
//if we want to delete element with sepecific index use unset
unset($colors[0]);
print_r($colors);
echo "</br>";
$chunked_array = array_chunk($colors,2);
print_r($chunked_array);

$arr1=[1,2,3];
$arr2=[4,5,6];
echo "</br>";
//this two ways to merge arrays
$arr3= array_merge($arr1,$arr2);
$arr4= [...$arr1, ...$arr2];
//if you print any of them you will have the same result
print_r($arr3); 

//to use the first array as keys the second as valus
$a=['red','yellow','green'];
$b=['apple','banana','avacado'];
$c = array_combine($a, $b);
print_r($c);
//we can print the keys only using array_keys
$keys= array_keys($c);
//we can flip the key to be value and the value to be key using array_flip
$flipArray= array_flip($c);

echo "</br>";
//to make an array from number to number
$number = range(1,20);
print_r($number);

//or using array map
$newNumber= array_map(function($num){
    return "Number, $num";
},$number);
echo "</br>";
print_r($newNumber);
//if we want to read the array with condition
$lessthanten= array_filter($number,fn($numb)=>$numb<=10);
//to sum the array values
$sumArray= array_reduce($number,fn($carry,$num)=> $carry+$num);


?>