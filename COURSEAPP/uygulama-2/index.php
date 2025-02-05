<?php 
    const title="Kurslar";

    $kategoriler= array("Programlama","Web geliştirme","Veri Analizi","Ofis Uygulamaları"); 
    sort($kategoriler);
    $kurslar=array(
        "1"=> array(
            "baslik"=>"Php Kursu",
            "altBaslik"=> "Sıfırdan ileri seviyeye Php ile web geliştirme",
            "resim"=> "1.jpg",
            "yayinTarihi"=> "01.01.2023",
            "yorumSayisi"=> "100",
            "begeniSayisi"=> "200"
        ),
        "2"=> array(
            "baslik"=>"Python Kursu",
            "altBaslik"=> "Sıfırdan ileri seviyeye Python ile web geliştirme",
            "resim"=> "2.jpg",
            "yayinTarihi"=> "01.01.2023",
            "yorumSayisi"=> "100",
            "begeniSayisi"=> "200"
        ),
        "3"=> array(
            "baslik"=>"Node.js Kursu",
            "altBaslik"=> "Sıfırdan ileri seviyeye Node.jsile web geliştirme",
            "resim"=> "3.jpg",
            "yayinTarihi"=> "01.01.2023",
            "yorumSayisi"=> "100",
            "begeniSayisi"=> "200"
        ),
    );
    $kurs1_baslik = "PHP";
    $kurs1_altBaslik = " Sıfırdan ileriye seviyeye Php ile web geliştirme";
    $kurs1_resim = "1.jpg";
    $kurs1_yayinTarihi = "01.01.2025";
    $kurs1_yorumSayisi = "100";
    $kurs1_begeniSayisi = "300";

    $kurs2_baslik = "Python";
    $kurs2_altBaslik = " Sıfırdan ileriye seviyeye Php ile web geliştirme";
    $kurs2_resim = "2.jpg";
    $kurs2_yayinTarihi = "01.01.2025";
    $kurs2_yorumSayisi = "100";
    $kurs2_begeniSayisi = "300";

    $kurs3_baslik = "Node.js";
    $kurs3_altBaslik = " Sıfırdan ileriye seviyeye Php ile web geliştirme";
    $kurs3_resim = "3.jpg";
    $kurs3_yayinTarihi = "01.01.2025";
    $kurs3_yorumSayisi = "100";
    $kurs3_begeniSayisi = "300";

    $kurs1_altBaslik = ucfirst(strtolower($kurslar["1"]["altBaslik"]));
    $kurs1_altBaslik = ucfirst(strtolower($kurslar["2"]["altBaslik"]));
    $kurs1_altBaslik = ucfirst(strtolower($kurslar["3"]["altBaslik"]));

    $kurs1_altBaslik=substr($kurs1_altBaslik,0,30)."...";
    $kurs2_altBaslik=substr($kurs2_altBaslik,0,30)."...";
    $kurs3_altBaslik=substr($kurs3_altBaslik,0,30)."...";

    $kurs1_url = str_replace([" "],["-"],strtolower($kurslar["1"]["baslik"]));
    $kurs2_url = str_replace([" "],["-"],strtolower($kurslar["2"]["baslik"]));
    $kurs3_url = str_replace([" ","."],["-","-"],strtolower($kurslar["2"]["baslik"]));



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[0] ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[1] ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[2] ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[3] ?></a>
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"> <?php echo title;?></h1>
                <p class="lead">
                        <?php echo count($kategoriler) ?> kategoride <?php echo count($kurslar) ?> kurs listelenmiştir.
                </p>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["1"]["resim"] ?>" alt="" class="img-fluid rounded-start">  
                        </div>
                        <div class="col-8">
                            <card class="body">
                                
                                <h5 class="card-title">
                                <a href=" <?php echo $kurs1_url ?>;">
                                        <?php echo $kurslar["1"]["baslik"] ?>
                                    </a>
                                </h5>
                                <p class="card-text"><?php echo ucfirst(strtolower($kurslar["1"]["altBaslik"])) ?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                    Beğeni : <?php echo $kurslar["1"]["begeniSayisi"]?>
                                    </span>
                                    <span class="badge rounded-pill text-bg-danger">
                                    Yorum :  <?php echo $kurslar["1"]["yorumSayisi"]?>
                                    </span>
                                </p>
                            </card>
                        </div>
                    </div>
                </div>
                </div>
        </div>
        

    </div>
</body>
</html>