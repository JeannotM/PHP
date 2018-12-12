<!DOCTYPE html>
<html>
<head>
    <title>Login Formulier</title>
    <style>
        *{
            padding:0;
            padding-left:2px;
            margin:0;
        }
        input{
            margin-bottom:20px;
        }
    </style>
</head>
<body>
<form action="loginformulier.php" method="post">
    <p>E-mail</p>
    <input type="text" name="naam"><br>
    <p>Wachtwoord </p><input type="password" name="wachtwoord"><br>
    <input type="submit" value=" Submit "><br><br>
<?php
$bool = false;
$wacht = $_POST["wachtwoord"];
$naam = $_POST["naam"];

if($naam === "piet@worldonline.nl"){
    if($wacht === "doetje123"){
        $bool = true;
        echo "Welkom Piet.";
    } else {
        echo "Uw wachtwoord komt niet overeen met uw account.";
    }}

else if($naam === "klaas@carpets.nl"){
    if($wacht === "snoepje777"){
        $bool = true;
        echo "Welkom Klaas.";
    } else {
        echo "Uw wachtwoord komt niet overeen met uw account.";
    }
}else if($naam === "truushendriks@wegweg.nl"){
    if($wacht === "arkiearkie201"){
        $bool = true;
        echo "Welkom Piet.";
    } else {
        echo "Uw wachtwoord komt niet overeen met uw account.";
    }
} else if ($naam === ""){
} else {
    echo "Uw data komt niet voor in ons systeem";
}
echo $bool;
?>
</form>
</body>
</html>