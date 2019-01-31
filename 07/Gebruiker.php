<?php
session_start();

if(isset($_SESSION["user"])){
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]. " op de website";
}else{
    header('location: inlog.php');
}
?>
<p><a href="Admin.php">Admin</a></p>
<p><a href="Inlog.php">Inlog</a></p>