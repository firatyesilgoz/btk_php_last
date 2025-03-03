<?php 
    include "ayar.php";
    $query= "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUES('Angular Kursu','İleri seviye angular dersleri','1.jpg','10.10.2023',10,10,1)";

    $sonuc =mysqli_query($baglantı,$query);
    $inserted_id =mysqli_insert_id($baglantı);

    if($sonuc){
        echo "kayit eklendi".$inserted_id;
    }else{
        echo "kayıt eklenemedi";
    }
    
    mysqli_close($baglantı);

    echo "mysql baglantısı kapatıldı";
?>