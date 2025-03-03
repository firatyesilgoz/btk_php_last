<?php 
    include "ayar.php";

    $baslik ="Angular Kursu";
    $altBaslik="İleri seviye angular dersleri";
    $resim="1.jpg";
    $yayinTarihi="10.10.2023";
    $begeniSayisi="11";
    $yorumSayisi="21";
    $onay=1;
    $query= "INSERT INTO kurslar(baslik,altBaslik,resim,yayinTarihi,yorumSayisi,begeniSayisi,onay) VALUES(?,?,?,?,?,?,?)";

    $stmt = mysqli_prepare($baglantı,$query);
   
    mysqli_stmt_bind_param($stmt,'ssssiii',$baslik,$altBaslik,$resim,$yayinTarihi,$begeniSayisi,$yorumSayisi,$onay);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo "veri eklendi";

    mysqli_close($baglantı);

  
?>