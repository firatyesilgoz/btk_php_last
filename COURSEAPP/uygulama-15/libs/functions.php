<?php 
    function getCategories(){
        include "ayar.php";

        $query ="SELECT * from kategoriler";
        $sonuc =mysqli_query($baglantı,$query);
        mysqli_close($baglantı);
        
        return $sonuc;
    }
    function getCategoryById(int $id){
        include "ayar.php";

        $query = "SELECT * from kategoriler WHERE id='$id'";
        $sonuc = mysqli_query($baglantı,$query);

        mysqli_close($baglantı);

        return $sonuc;
    }
    function deleteCategory(int $id){
        include "ayar.php";

        $sonuc ="DELETE FROM kategoriler WHERE id=$id";
        $sonuc =mysqli_query($baglantı,$sonuc);

        mysqli_close($baglantı);
        return $sonuc;
    }
    function editCatagory($id,string $category){
        include "ayar.php";

        $query = "UPDATE kategoriler SET kategori_adi ='$category' WHERE id=$id";

        $sonuc =mysqli_query($baglantı,$query);
        mysqli_close($baglantı);

        return $sonuc;
    }
    function getDb(){
        $myfile = fopen("db.json","r");
        $size=filesize("db.json");
        $data =json_decode(fread($myfile, $size),true);
        fclose($myfile);
        return $data;
    }
    function createCategory(string $kategori){
        include "ayar.php";

        $query ="INSERT INTO kategoriler(kategori_adi) VALUES (?)";
        $stmt=mysqli_prepare($baglantı,$query);

        mysqli_stmt_bind_param($stmt,'s',$kategori);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        return $stmt;
    }
 function kursEkle(string $baslik,string $altBaslik,string $resim, string $yayinTarihi,int $yorumSayisi=0,int $begeniSayisi=0,bool $onay=true){
    $db = getDb();
    array_push($db["kurslar"],array(
        "baslik"=>$baslik,
        "altBaslik"=>$altBaslik,
        "resim"=>$resim,
        "yayinTarihi"=>$yayinTarihi,
        "yorumSayisi"=>$yorumSayisi,
        "begeniSayisi"=>$begeniSayisi,
        "onay"=>$onay
    ));
    

    $myfile = fopen("db.json", "w");
    if ($myfile === false) {
        echo "Dosyaya yazma hatası oluştu.";
        return;
    }
   
    fwrite($myfile, json_encode($db,JSON_PRETTY_PRINT));
    fclose($myfile);
}




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

function safe_html($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    
    return $data;
}
?>