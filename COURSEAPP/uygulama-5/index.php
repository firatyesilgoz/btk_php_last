<?php 
    const title="Kurslar";

    $kategoriler= array(
        array("kategori_adi" => "Programlama" ,"aktif" => true),
        array("kategori_adi" => "Web geliştirme" ,"aktif" => false),
        array("kategori_adi" => "Veri Analizi" ,"aktif" => false),
        array("kategori_adi" => "Ofis Uygulamaları" ,"aktif" => false),
        array("kategori_adi" => "Mobil Uygulamalar" ,"aktif" => false)); 
    sort($kategoriler);
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
                    <?php for($i =0 ;$i < count($kategoriler); $i++):?>

                        <a 
                            href="#" 
                            class="list-group-item list-group-item-action <?php echo ($kategoriler[$i]["aktif"]) ? "active":""?>">
                            
                            <?php echo $kategoriler[$i]["kategori_adi"] ?>
                        </a>

                    <?php endfor ?>

                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"> <?php echo title;?></h1>
                <p class="lead">
                        <?php echo count($kategoriler) ?> kategoride <?php echo count($kurslar) ?> kurs listelenmiştir.
                </p>
                <?php if($kurslar["1"]["onay"]):?>
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
                                <p class="card-text">
                                    <?php if(strlen($kurslar["1"]["altBaslik"]) > 50): ?>
                                        <?php echo substr($kurslar["1"]["altBaslik"],0,50)."..." ?>
                                    <?php else: ?>
                                        <?php echo ucfirst(strtolower($kurslar["1"]["altBaslik"])); ?>
                                    <?php endif; ?>
                                </p>
                                       
                                <p>
                                <?php if($kurslar["1"]["begeniSayisi"]>0):?>
                                    <span class="badge rounded-pill text-bg-primary">
                                    Beğeni : <?php echo $kurslar["1"]["begeniSayisi"]?>
                                    </span>
                                    
                                <?php endif;?>
                                <?php if($kurslar["1"]["yorumSayisi"]):?>
                                    <span class="badge rounded-pill text-bg-danger">
                                    Yorum :  <?php echo $kurslar["1"]["yorumSayisi"]?>
                                    </span>
                                <?php else:?>
                                    <span class="badge rounded-pill text-bg-warning">
                                    İlk yorumu sen yap
                                    </span>
                                <?php endif;?>
                                </p>
                            </card>
                        </div>
                    </div>
                    
                </div>
                <?php endif;?>

                <?php if($kurslar["2"]["onay"]):?>
                    <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["2"]["resim"] ?>" alt="" class="img-fluid rounded-start">  
                        </div>
                        <div class="col-8">
                            <card class="body">
                                
                                <h5 class="card-title">
                                <a href=" <?php echo $kurs1_url ?>;">
                                        <?php echo $kurslar["2"]["baslik"] ?>
                                    </a>
                                </h5>
                                <p class="card-text">
                                    <?php if(strlen($kurslar["1"]["altBaslik"]) > 50): ?>
                                        <?php echo substr($kurslar["1"]["altBaslik"],0,50)."..." ?>
                                    <?php else: ?>
                                        <?php echo ucfirst(strtolower($kurslar["1"]["altBaslik"])); ?>
                                    <?php endif; ?>
                                </p>
                                <p>
                                <?php if($kurslar["2"]["onay"]>0):?>
                                    <span class="badge rounded-pill text-bg-primary">
                                    Beğeni : <?php echo $kurslar["2"]["begeniSayisi"]?>
                                    </span>
                                    
                                <?php endif;?>
                                <?php if($kurslar["2"]["yorumSayisi"]):?>
                                    <span class="badge rounded-pill text-bg-danger">
                                    Yorum :  <?php echo $kurslar["2"]["yorumSayisi"]?>
                                    </span>
                                <?php else:?>
                                    <span class="badge rounded-pill text-bg-warning">
                                    İlk yorumu sen yap
                                    </span>
                                <?php endif;?>
                                </p>
                            </card>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php if($kurslar["3"]["onay"]):?>
                    <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["3"]["resim"] ?>" alt="" class="img-fluid rounded-start">  
                        </div>
                        <div class="col-8">
                            <card class="body">
                                
                                <h5 class="card-title">
                                <a href=" <?php echo $kurs1_url ?>;">
                                        <?php echo $kurslar["3"]["baslik"] ?>
                                    </a>
                                </h5>
                                <p class="card-text">
                                    <?php if(strlen($kurslar["1"]["altBaslik"]) > 50): ?>
                                        <?php echo substr($kurslar["1"]["altBaslik"],0,50)."..." ?>
                                    <?php else: ?>
                                        <?php echo ucfirst(strtolower($kurslar["1"]["altBaslik"])); ?>
                                    <?php endif; ?>
                                </p>
                                <p>
                                <?php if($kurslar["3"]["onay"]>0):?>
                                    <span class="badge rounded-pill text-bg-primary">
                                    Beğeni : <?php echo $kurslar["3"]["begeniSayisi"]?>
                                    </span>
                                    
                                <?php endif;?>
                                <?php if($kurslar["3"]["yorumSayisi"]):?>
                                    <span class="badge rounded-pill text-bg-danger">
                                    Yorum :  <?php echo $kurslar["3"]["yorumSayisi"]?>
                                    </span>
                                <?php else:?>
                                    <span class="badge rounded-pill text-bg-warning">
                                    İlk yorumu sen yap
                                    </span>
                                <?php endif;?>
                                </p>
                            </card>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                
                </div>
        </div>
        

    </div>
</body>
</html>