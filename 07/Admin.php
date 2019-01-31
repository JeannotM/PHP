<?php
session_start();

if($_SESSION["user"]["rol"]=="Admin"){
    echo "<h1>Welkom ".$_SESSION["user"]["rol"]." ".$_SESSION["user"]["naam"]. " op de website</h1>";
}else{
    header('location: Gebruiker.php');
}
?>
<p><a href="Gebruiker.php">Terug</a></p>
<p><a href="inlog.php">Inlog</a></p>