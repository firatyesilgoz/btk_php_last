<?php 
    //sunucu => course.db

    const host ="localhost";
    const username ="root";
    const password="";
    const database="coursedb";


    $baglantı=mysqli_connect(host,username,password,database);

    if(mysqli_connect_errno()>0){
        die("hata :".mysqli_connect_errno());
    }

    echo "mysql baglantı oluşturuldu. ";

    mysqli_close($baglantı);

    echo "mysql baglantısı kapatıldı";
?>