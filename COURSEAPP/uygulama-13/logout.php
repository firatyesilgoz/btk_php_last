<?php 

    setcookie("username", "",time()-(24*60*60));
    setcookie("auth", true,time()-(24*60*60));

    header("Location: login.php");
?>