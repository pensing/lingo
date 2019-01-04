<html>
<body>

<?php

$filenameread = "5letterwoorden.txt";
$filenamewrite = "5letters.txt";

if (file_exists($filenameread)) {

    $readhandle = fopen($filenameread, "r");
    $writehandle = fopen($filenamewrite, "w");

    echo "Bestand wordt geconverteerd. Tijd: ", date("H:i:s");
    echo "<br /><br />";

    $content = file_get_contents($filenameread);

    $content1 = strip_tags($content);

    $content2 = str_replace("&nbsp;", "", $content1);

    $chars = range('A', 'Z');
    foreach ($chars as $char) {
        $content2 = str_replace("Letter " . $char, "", $content2);
    }

    $newcontent = $content2;
    echo $newcontent;
    fwrite($writehandle, $newcontent);

    fclose($readhandle);
    fclose($writehandle);

}



$filenameread = "5letters.txt";
$filenamewrite = "5letterfinal.txt";

if (file_exists($filenameread)) {

    $readhandle = fopen($filenameread, "r");
    $writehandle = fopen($filenamewrite, "w");

    $array = explode(PHP_EOL, fread($readhandle, filesize($filenameread)));

    echo "Aantal lines is: ", count($array);
    echo "<br />";
    $filtered_array = [];
    for ($i=0; $i <= count($array); $i++) {
        if (trim($array[$i]) != "") {
            echo "Regel ".$i." - ".$array[$i]."<br>";
            array_push($filtered_array, trim($array[$i]).";");
        }
    }
    file_put_contents($filenamewrite, $filtered_array);

    fclose($readhandle);
    fclose($writehandle);


}

?>

</body>
</html>