<?php 
    const title="Kurslar";

    $kategoriler= array(
        array("kategori_adi" => "Programlama" ,"aktif" => true),
        array("kategori_adi" => "Web geliştirme" ,"aktif" => false),
        array("kategori_adi" => "Veri Analizi" ,"aktif" => false),
        array("kategori_adi" => "Ofis Uygulamaları" ,"aktif" => false),
        array("kategori_adi" => "Mobil Uygulamalar" ,"aktif" => false)); 
    sort($kategoriler);

    $sehirler=array(
        "06"=> "Ankara",
        "09"=> "Aydın",
        "34"=> "İstanbul",
        "65"=> "Van") ;
    $hobiler=array(
        "1"=>"Sinema",
        "2"=> "Sinema2",
        "3"=> "Sinema3",
        "4"=> "Sinema3"
        ) ;
    $kurslar=array(
        "1"=> array(
            "baslik"=>"Php Kursu",
            "altBaslik"=> "Sıfırdan ileri seviyeye Php ile web geliştirmeSıfırdan ileri seviyeye Php ile web geliştirmeSıfırdan ileri seviyeye Php ile web geliştirme",
            "resim"=> "1.jpg",
            "yayinTarihi"=> "01.01.2023",
            "yorumSayisi"=> "100",
            "begeniSayisi"=> "200",
            "onay" => true
        ),
        "2"=> array(
            "baslik"=>"Python Kursu",
            "altBaslik"=> "Sıfırdan ileri seviyeye Python ile web geliştirme",
            "resim"=> "2.jpg",
            "yayinTarihi"=> "01.01.2023",
            "yorumSayisi"=> "0",
            "begeniSayisi"=> "200",
            "onay" => true
        ),
        "3"=> array(
            "baslik"=>"Node.js Kursu",
            "altBaslik"=> "Sıfırdan ileri seviyeye Node.jsile web geliştirme",
            "resim"=> "3.jpg",
            "yayinTarihi"=> "01.01.2023",
            "yorumSayisi"=> "100",
            "begeniSayisi"=> "200",
            "onay" => true
        ),
    );

    ?>