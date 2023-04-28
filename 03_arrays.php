<?php
//two ways to create simple arrays
//1
$num=[1,2,3];
//2
$names=array('Nouf','Reem','shatha');

print_r($num);
echo "</br>";
var_dump($num);
echo "</br>";
echo $names[2];

$colors=[
    3 =>'blue',
    4 =>'red',
    6 =>'green'
];
echo "</br>";
echo $colors[3];
echo "</br>";
$hex=[
    'red'=>'#f00',
    'blue'=>'0f0',
    'green'=>'00f'
];
echo $hex['blue'];
echo '</br>';

$people= [
    [
        'first_name'=>'Nouf',
        'last_name'=>'Baslaib',
        'E-mail'=>'nouf@gmail.com'
    ],[
        'first_name'=>'Shatha',
        'last-name'=>'Alharthe',
        'E-mail'=>'shatha@gmail.com'
    ],[
        'first_name'=>'Reem',
        'last_name'=>'Alanize',
        'E-mail'=>'reem@gmail.com'
    ]
    ];

    echo $people[1]['first_name'];
    echo "</br>";
    var_dump(json_encode($people));
    

?>