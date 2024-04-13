<?php

$exeByDate = false;
$current_date = strtotime(date("d-m-Y H:i:00",time())); // get the current date
$activation_date = strtotime("15-04-2024 00:06:00"); // set the activation date

if($current_date > $activation_date){ // compare and set true if current date is greater than activation date
    $exeByDate = true;
}

if($exeByDate){
    // your code here
}