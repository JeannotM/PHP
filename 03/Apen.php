<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Apen</title>
    <style>
        *{
            padding:0px;
            margin-left:6px;
            margin-right:6px;
            margin-bottom:6px;
        }
        img{
            width:200px;
        }
        .rood, .groen{
            width:192px;
        }
        .rood{
            border:#ff0000 solid 4px;
        }
        .groen{
            border:#00bb00 solid 4px;
        }
    </style>
</head>
<body>
<?php
for($i=1;$i<=9;$i++) {
    if($i % 2 == 0){
        $class = "class='rood'";
    } else {
        $class = "class='groen'";
    }
    echo "<img ".$class." src='img/aap".$i.".jpg' width='200px'>";

    if ($i == 3 || $i == 6 || $i ==9) {
        echo "<br>";
    }
}
for($i=0;$i<=9;$i++){
    

}
?>
</body>
</html>
