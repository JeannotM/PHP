<?php
// error_reporting(1);
    session_start();
$user=array(
    "janjaap" => array("pwd"=>"1234", "rol"=>'Admin'),
    "jeannot"=> array("pwd"=>"2001", "rol"=>'Admin'),
    "bert"=> array("pwd"=>"2345", "rol"=>'Gebruiker')
);

if(isset($_POST["knop"])
&& isset($user[$_POST["login"]])
&& $user[$_POST["login"]]["pwd"]==$_POST["pwd"]){
    $_SESSION["user"] = array("naam"=>$_POST["login"],
                              "pwd"=> $user[$_POST["login"]]["pwd"],
                              "rol"=> $user[$_POST["login"]]["rol"]);
    $message = "Welkom " .$_SESSION["user"]["naam"];

} else {
    $message = "Inloggen";
}

    if(isset($_GET["loguit"])){
        $_SESSION=array();
        session_destroy();
    }
?>
<html>
<head>
<title>Login</title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:arial;
}
h1{
    margin-bottom:10px;
}
input{
    left:80px;
    position:absolute;
}
</style>
<body>
<h1> <?php echo $message ?> </h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label for="login">Login:</label>
<input type="text" name="login" id="login" value=""><br>

<label for="pwd">Password:</label>
<input type="password" name="pwd" id="pwd" value=""><br><br>

<input type="submit" id="knop" name="knop"><br>
</form>
<p><a style="text-decoration:none;color black" href="Gebruiker.php">Website</a></p>
<p><a style="text-decoration:none;color black" href="Inlog.php?loguit">Loguit</a></p>
<p style="margin-top:100px;margin-left:0px;">janjaap=>1234=>Admin<br>jeannot=>2001=>Admin<br>bert=>2345=>Gebruiker</p>
</body>
</html>