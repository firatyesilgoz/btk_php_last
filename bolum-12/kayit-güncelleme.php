<?php 
    include "ayar.php";
    
    //$query ="UPDATE kurslar SET baslik='Php Dersleri',altBaslik='ileri seviye php dersleri' WHERE id=7";
    $query ="UPDATE kurslar SET onay=1";
    $sonuc = mysqli_query($baglantı,$query);
    
    if($sonuc){
        echo "veri güncellendi";
    }else{
        echo "veri güncellenmedi";
    }
    

    mysqli_close($baglantı);

?>