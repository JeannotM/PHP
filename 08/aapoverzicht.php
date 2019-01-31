<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
    <title>Monkey Bussines</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Bangers', cursive;
        }
        h1{
            text-align:center;
            padding-top:30px;
            font-family:cursive;
        }
        img{
            display:block;
            margin:auto;
        }
        p{
            text-align:center;
            text-decoration:none;
            margin:auto 2px;
            font-size:32px;
            color:#ff8400;
        }
        a{
            text-decoration:none;
            font-style:none;
        }
    </style>
</head>
<body>
    <img src="../img/monkey-business.jpg">
    <h1>Choose your monkey!</h1>
    <img src="../img/monkey_swings.png" style="padding-top:30px;">
    <?php
    $apen=array("Baviaan","Guereza","Langoer","Neusaap","Tamarin","Brulaap","Halfaap","Mandril","Oeakari",
    "Faunaap","Hoelman","Meerkat","Oormaki","Gorilla","Kuifaap","Mensaap","Spinaap");

    for($teller=0;$teller<=16;$teller++){
        echo "<a href='https://www.google.nl/search?q=".($apen[$teller])."'><p>".($apen[$teller])."</p></a><br>";
    }
    ?>
</body></html>