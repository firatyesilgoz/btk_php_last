<?php 
    include "ayar.php";
    
    $query ="DELETE FROM kurslar WHERE id>6 and id<10";
    $sonuc = mysqli_query($baglantı,$query);
    
    $adet=mysqli_affected_rows($baglantı);
    if($sonuc){
        echo "veri silindi".$adet;
    }else{
        echo "veri silinmedi";
    }
    

    mysqli_close($baglantı);

?>