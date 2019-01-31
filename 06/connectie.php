<?php
try {
$db = new PDO('mysql:host=localhost;dbname=school;charset=UTF-8', $user, $pass);
} catch (Exception $e) {
    $dbh->rollBack();
    echo "Failed: " . $e->getMessage();
  }
?>