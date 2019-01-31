<?php
error_reporting(-1);
$naam="PHP <br>";
$omschrijving="Het is een zeer goede programmeertaal.";
$liedjes=array("naam"=>"Midge Ure", "omschrijving"=>"The Man Who Sold the World");

function getprogramma($naam, $omschrijving){//Zoekt de naam en omschrijving van de programma
    echo $naam;
    echo $omschrijving;
}
function voegLiedjes($liedjes){//Zoekt de song van het liedje in de PHP
    print_r($liedjes["naam"]);
    echo "<br>";
    print_r($liedjes["omschrijving"]);
}
echo "Functie voegLiedjes:<br>";
voegLiedjes($liedjes);
echo "<br><br>";
echo "Functie getprogramma:<br>";
getprogramma($naam, $omschrijving);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Radio Programma</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
</body>
</html>