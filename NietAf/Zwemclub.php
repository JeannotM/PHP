<!DOCTYPE html>
<html>
<head>
    <title>Zwemclub</title>
    <style>
        *{
            padding:0;
            maring:0;
        }
        td,table{
            width:20%;
            border:solid black 1px;
            font-size:16px;
        }
        .a {
            background-color:#a0a0ff;
        }
    </style>
</head>
<body>
<table>
<?php
$spartelkuikens = 25;
$waterbuffels = 32;
$plonsmderin = 11;
$bommetje = 23;
for($i=1;$i<=26;$i++) {
    if($i % 5 == 0){
        echo " z";
    }
}
echo "<tr><td class='a'>De SpartelKuikens</td><td>$spartelkuikens</td></tr>";
echo "<tr><td class='a'>De Waterbuffels</td><td>$waterbuffels</td></tr>";
echo "<tr><td class='a'>Plonsmderin</td><td>$plonsmderin</td></tr>";
echo "<tr><td class='a'>Bommetje</td><td>$bommetje</td></tr>";
?>
</table>
</body>
</html>
