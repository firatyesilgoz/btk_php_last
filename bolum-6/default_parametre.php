<?php 

    function s($isim="Dolu değil" , $mesaj="Mesaj Boş"){

        return "$isim,$mesaj";
    }

    $sonuc = s("Fırat","test");
    $sonuc = s();
   echo $sonuc;
?>