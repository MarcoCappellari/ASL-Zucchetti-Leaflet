<?php
$my_txt='gruppo5_zucchetti.txt';
$fp=fopen($my_txt,'w');

function writeCoordinates($fp, $latitudine, $longitudine) {
    if ($latitudine != 0) {
        fwrite($fp, $latitudine . "|" . $longitudine . "\n");
    }
}

function printPoint($name, $latitudine, $longitudine) {
    echo "Il $name punto ha latitudine $latitudine e longitudine $longitudine";
}

function handlePoint($pointName, $latitudine, $longitudine, $fp) {
    echo "Il $pointName punto ha latitudine $latitudine e longitudine $longitudine";
    writeCoordinates($fp, $latitudine, $longitudine);
}

$primopunto=$_POST['primopunto'];

switch($primopunto){
    case 2:
        handlePoint("primo", 45.389164, 11.900349, $fp);
        break;
    case 3:
        handlePoint("secondo", 45.389279, 11.900009, $fp);
        break;
    case 4:
        handlePoint("terzo", 45.389174, 11.899732, $fp);
        break;
    // Altri casi omessi per brevità
    default:
        $latitudine=0;
        $longitudine=0;
}

fclose($fp);

?>
