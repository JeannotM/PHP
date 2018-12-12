<!DOCTYPE html>
<html>
<head>
    <title>Dynamische Website</title>
    <style>
        input{
            margin-right:90%;
        }
    </style>
</head>
<body>
<form action="DynamischeWebsite.php" method="post">
    Name: <input required type="text" name="name"><br>
    E-mail: <input required type="text" name="email"><br>
    Wachtwoord <input required type="password" name="wachtwoord"><br>
    Adres <input required type="text" name="adres"><br>
    <input type="submit" value="Verzend"><br>
<?php
$name = ($_POST["name"]);
$email = ($_POST["email"]);
$wachtwoord = strlen($_POST["wachtwoord"]);
$adres = ($_POST["adres"]);

$a = false;
if($name == "" || $name == " "){
    $a = false;
} else {
    $a = true;
}
if($a = true) {
    echo "Goedemiddag " . $name . "<br>";
    echo "Uw E-mail is: " . $email . "<br>";
    echo "Uw wachtwoord is " . $wachtwoord . " cijfers lang.<br>";
    echo "U woont op de " . $adres;
} else {
    $a = false;
}
?>
</form>
</body>
</html>
