
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $title ="DERS" ;
    $maasA= 20000;
    $maasB= 22000;
    $maasC= 25000;

    $vergi=0.25    ?>
    <?php echo $title;
    echo "<br>";
    echo $maasA -($maasA * $vergi);
    echo "<br>";
    echo $maasB -($maasB * $vergi);
    echo "<br>"; 
    echo $maasC -($maasC * $vergi);
    
    ?>
</body>
</html>