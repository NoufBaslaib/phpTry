<?php
$file= 'extras/users.txt';

if(file_exists($file)){
    $handle= fopen($file,'r');
    $content= fread($handle, filesize($file));
    fclose($handle);
    echo $content;
}else{
    $handle= fopen($file,'w');
    $content= 'Nouf'. PHP_EOL. 'Shatha'. PHP_EOL. 'Reem';
    fwrite($handle, $content);
    fclose($handle);
}