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

    function kursEkle(&$kurslar,string $baslik,string $altBaslik,string $resim, string $yayinTarihi,int $yorumSayisi=0,int $begeniSayisi=0,bool $onay=true){
       
        $yeni_kurs[count($kurslar)+1] =array(
            "baslik"=>$baslik,
            "altBaslik"=>$altBaslik,
            "resim"=>$resim,
            "yayinTarihi"=>$yayinTarihi,
            "yorumSayisi"=>$yorumSayisi,
            "begeniSayisi"=>$begeniSayisi,
            "onay"=>$onay
        );
        $kurslar=array_merge($kurslar,$yeni_kurs);
    }

    
    kursEkle($kurslar,"yeniKurs2","yeni altbaslik2","2.jpg","10.10.2023");
    kursEkle($kurslar,"yeniKurs1","yeni altbaslik1","1.jpg","10.10.2023");

    function urlDuzenle($baslik) {
        return str_replace([" ","."],["-","-"],strtolower($baslik));
    }

    function kisaAciklama($altBaslik){
        if(strlen($altBaslik) > 50){
            return substr($altBaslik,0,50)."...";
        }else{
            return $altBaslik;
        }
             
        
    }



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

                <?php foreach($kurslar as $key => $kurs):?>

                <?php if($kurs["onay"]):?>
                    <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurs["resim"] ?>" alt="" class="img-fluid rounded-start">  
                        </div>
                        <div class="col-8">
                            <card class="body">
                                
                                <h5 class="card-title">
                                <a href=" <?php echo urlDuzenle($kurs["baslik"]) ?>;">
                                        <?php echo $kurs["baslik"] ?>
                                    </a>
                                </h5>
                                <p class="card-text">
                                    <?php echo kisaAciklama($kurs["altBaslik"]) ?>
                                        
                                </p>
                                       
                                <p>
                                <?php if($kurs["begeniSayisi"]>0):?>
                                    <span class="badge rounded-pill text-bg-primary">
                                    Beğeni : <?php echo $kurs["begeniSayisi"]?>
                                    </span>
                                    
                                <?php endif;?>
                                <?php if($kurs["yorumSayisi"]):?>
                                    <span class="badge rounded-pill text-bg-danger">
                                    Yorum :  <?php echo $kurs["yorumSayisi"]?>
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
                <?php endforeach;?>               
               
                
                </div>
        </div>
        

    </div>
</body>
</html>