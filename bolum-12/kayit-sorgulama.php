<?php 
    include "ayar.php";
    $query ="SELECT * from kurslar";

    $sonuc = mysqli_query($baglantı,$query);
    
    
    while($row =mysqli_fetch_row($sonuc)){
        echo $row[0]." ".$row[1];
        echo "<br>";
    }

    echo "<hr>";
    $sonuc = mysqli_query($baglantı,$query);

    while($row =mysqli_fetch_assoc($sonuc)){
        echo $row["id"]." ".$row["baslik"]." ".$row["resim"];
        echo "<br>";
    }

    mysqli_close($baglantı);

?>