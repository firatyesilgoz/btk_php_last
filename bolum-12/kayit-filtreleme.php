<?php 
    include "ayar.php";
    //$query ="SELECT * from kurslar WHERE id > 1";
    $query ="SELECT * from kurslar WHERE baslik like '%PHP%'";
    $sonuc = mysqli_query($baglantı,$query);
    
    if(mysqli_num_rows($sonuc)>0){
        while($satir=mysqli_fetch_assoc($sonuc)){
            echo $satir["id"]." ".$satir["baslik"];
            echo "<br>";
        }
    }else{
        echo "kayıt yok.";
    }
    
    
    mysqli_close($baglantı);

?>