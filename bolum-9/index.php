<?php 
    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload"){
        


        $uploadOk =true;
        $dest_path="./uploadedFiles/";
        $filename = $_FILES["fileToUpload"]["name"];
        $fileSize  = $_FILES["fileToUpload"]["size"];
        $dosya_uzantıları= array('jpg','jpeg','png');

        if(empty($filename)){
            $uploadOk = false;
            echo "dosya seçiniz";
            echo "<br>";
        }
        if($fileSize > 500000){
            $uploadOk =false;
            echo "Dosya Boyutu fazla";
        }
        $dosyaAdi = explode(".", $filename);
        $dosyaAdi_uzantisiz=$dosyaAdi[0];
        $dosyaAdi_uzantisi=$dosyaAdi[1];

        if(!in_array($dosyaAdi_uzantisi,$dosya_uzantıları)){
            $uploadOk = false;
            echo "dosya uzantısı kabul edilmiyor";
            echo "kabul edilen dosyalar:".implode(",",$dosya_uzantisi);
        };
        $yeni_dosyaAdi= md5(time().$dosyaAdi_uzantisiz).'.'.$dosyaAdi_uzantisi;
        $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"];

        $fileDestPath = $dest_path.$yeni_dosyaAdi;
        
        if(!$uploadOk){
            echo "dosya yüklenemedi";
        }else{
            if(move_uploaded_file($fileSourcePath, $fileDestPath)){
                echo "dosya yüklendi";
            }else{
                echo "hata";
            }
    
        }

        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post" enctype="multipart/form-data">
        <input type="text" name="username">
        <input type="file" name="fileToUpload" >
        <input type="submit" value="Upload" name="btnFileUpload" >
    </form>
</body>
</html>