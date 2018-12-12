<!DOCTYPE html>
<html>
<head>
    <title>Kapperzaak</title>
    <style>
    </style>
</head>
<body>
<table>
<?php
$kappersagenda = array("10:00","10:15","10:30","10:45","11:00");
print("De volgende momenten zijn nog beschikbaar:<ul>");
    foreach($kappersagenda as $agenda => $tijd) {
    if($afspraak == "") {
        print("<li>".$tijd."</li>");
    }
}
?>
</table>
</body>
</html>