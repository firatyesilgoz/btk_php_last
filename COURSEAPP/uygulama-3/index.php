<?php 
    $a=10;
    $b= 20;
    $c= 5;


    $sonuc = ($a * $b)-($a + $b + $c);

    echo $sonuc;

    $sonuc = ($a + $b + $c) % 3;

    echo $sonuc;

    $sonuc = $b ** $c;

    echo $sonuc;

    $sonuc = (50 < $a) && ( $a <100);

    echo var_dump($sonuc);

    $sonuc = ($a > 0 and $a % 2==0);
    
    echo var_dump($sonuc);

    $username = "ceFiraty";
    $password = "1234";

    $test =($username =="ceFiratys" and $password == "1234");

    echo var_dump($test);
?>