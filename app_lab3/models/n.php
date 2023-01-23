<?php
session_start();
$counter = (file_exists("visits.txt")?file_get_contents("visits.txt"):0);
$file = fopen("visits.txt" , "w+");

if(!isset($_SESSION["is_visited"])){
    $counter++ ;
    $_SESSION["is_visited"]=true ;
 }
// $counter++ ;

fwrite($file ,  $counter);
fclose($file);
echo "num of visited is $counter";


?>