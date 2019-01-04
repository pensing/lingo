<?php

//read file into array
$filenameread = "5letters.csv";
if (file_exists($filenameread)) {

    $readhandle = fopen($filenameread, "r");

    //$csv = array_map('str_getcsv', file('5letters.csv'));
    $csv = fgetcsv($readhandle, 0, ";");

    $count = count($csv);
    //echo $count;

    $random = rand(0, $count);
    //echo $random;

    $woord = $csv[$random];
    echo $woord;

 }


?>
