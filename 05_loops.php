<?php
for($i=0; $i<=10; $i++){
    echo 'Number', $i, "</br>";
}
//we have two ways to read an array
$posts= ['Firts Post','Post two','Post Three'];
//first
for($x=0; $x< count($posts);$x++){
    echo $posts[$x];
}
//second
foreach($posts as $post){
    echo $post, "</br>";
}
foreach($posts as $index => $post){
    echo $index,'-',$post, "</br>";
}
       $person= ['first_name'=>'Nouf',
         'last_name'=>'Baslaib',
         'E-mail'=>'nouf@gmail.com'];
foreach($person as $key => $value){
            echo $key,'-',$value, "</br>";
        }

?>