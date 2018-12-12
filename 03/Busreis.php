<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Busreis</title>
    <style>
        body {
            text-align:center;
        }
    </style>
</head>
<body>
<?php
$bedrag = 10;
$leeftijd = 5;
if($leeftijd>=65){
    $bedrag = $bedrag *0.5;
}
if($leeftijd<=12) {
    $bedrag = $bedrag * 0.5;
}
if($leeftijd<3){
    $bedrag = 0;
}
echo "U bent ",$leeftijd," Jaar oud<br>";
echo "Uw bedrag is: ", $bedrag, " euro";
?>
</body>
</html>

