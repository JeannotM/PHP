<!DOCTYPE html>
<html>
<head>
    <title>Beasties</title>
    <style>
        p{
            font-weight:bold;
        }
        img{
            width:200px;
            padding-right:10px;
        }
    </style>
</head>
<body>
<p>Ik wil graag de volgende dieren zien: </p>
<form action="Beasties.php" method="post">
    <input type="checkbox" name="Kat"> Kat<br>
    <input type="checkbox" name="Hond"> Hond<br>
    <input type="checkbox" name="Aap"> Aap<br>
    <input type="checkbox" name="Vis"> Vis<br>
    <input type="checkbox" name="Beer"> Beer<br>
    <input type="checkbox" name="Cavia"> Cavia<br>
    <input type="submit" value="Submit"><br><br>
</form>
<?php
$kat = $_POST["Kat"];
$hond = $_POST["Hond"];
$aap = $_POST["Aap"];
$vis = $_POST["Vis"];
$beer = $_POST["Beer"];
$cavia = $_POST["Cavia"];

if($kat == on) {
    echo '<img src="../img/kat.jpg">';
    $kat = "";
}
if($hond == on){
    echo '<img src="../img/hond.jpg">';//
    $hond = "";
}
if($aap == on){
    echo '<img src="../img/aap1.jpg">';
    $aap = "";
}
if($vis == on){
    echo '<img src="../img/vis.jpg">';
    $vis = "";
}
if($beer == on){
    echo '<img src="../img/beer.jpg">';
    $beer = "";
}
if($cavia == on){
    echo '<img src="../img/cavia.jpg">';
    $cavia = "";
}
?>
</body>
</html>
