 <!DOCTYPE html>
    <html>
    <head>
        <title>Functies</title>
        <style>
            input{
                margin-right:90%;
            }
        </style>
    </head>
    <body>
    <form action="Functie.php" method="post">
    Graden<input type="text" name="waarde"><br>
<?php
//Fahrenheit/celcius meter
$c = $_POST["waarde"];
if($c==""){
    $a=false;
} else {
    $a=true;
}
if($a==true) {
    $f = ($c * 9 / 5) + 32;
    echo $c . " °C is " . $f . " °F<br><br>";
}
?>
    Aantal<input type="text" name="getal"><br>
<?php
//Kijken of het getal deelbaar is door 3
$getal = $_POST["getal"];
if($getal==""){
    $b=false;
} else {
    $b=true;
}
if($b == true) {
    $deelbaardoor = 3;
    if ($getal % $deelbaardoor == 0) {
        echo $getal . " is deelbaar door " . $deelbaardoor . ".<br><br>";
    } else {
        echo $getal . " is niet deelbaar door " . $deelbaardoor . ".<br><br>";
    }
}
?>
    Tekst<input type="text" name="tekst"><br>
<?php
$tekst = ($_POST["tekst"]);
if($tekst=="") {
    $d=false;
} else {
    $d=true;
}
if($d==true) {
    echo strrev($tekst);
    echo "<br><br>";
}
?>
    <input type="submit" value="Bereken">
    </form>
    </body>
 </html>