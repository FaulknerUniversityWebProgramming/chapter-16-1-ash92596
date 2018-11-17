<?php
    unset($_COOKIE['Theme']);
    setcookie("Theme", "", -1);
    unset($_COOKIE['Philosopher']);
    setcookie("Philosopher", "", -1);
 
    header("Location: chapter16-project1.php");
?>
