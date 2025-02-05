<?php 
    
    require "libs/veriables.php";
    require "libs/functions.php";

?>
<?php include "partials/_header.php"?>
<?php include "partials/_navbar.php"?>


<?php 
    $usernameErr = $emailErr =$passwordErr = $repasswordErr= $cityErr=$formCErr="";
    $username = $email =$password = $repassword= $city = "";
    $formC= [] ;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        
        if(empty($_POST["username"])){
            $usernameErr= "username gerekli !!!";
        }else{
            $username = safe_html($_POST["username"]);
        }
        if(empty($_POST["password"])){
            $passwordErr= "password gerekli !!!";
        }else{
            $password = safe_html($_POST["password"]);
        }
        if(empty($_POST["email"])){
            $emailErr= "email gerekli !!";
        }else{
            $email = safe_html($_POST["email"]);
        }
        if($_POST["repassword"] != $_POST["password"]){
            $repasswordErr= "parola tekrar alanı eşleşmiyor.";
        }else{
            $repassword = safe_html($_POST["repassword"]);
        }
        if($_POST["city"]==-1){
            $cityErr= "Şehir seçmelisiniz";
        }else{
            $city = $_POST["city"];
        }
        if(!isset($_POST["hobiler"])){
            $formCErr= "Hobi gerekli !!";
        }else{
            $email = $_POST["hobiler"];
        }
        
     
        

    }
?>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <form action="register.php" method="post" >
                    <div class="mb-3">
                        <label for="username">Kullanıcı Adı</label>
                        <input type="username" name="username" class="form-control" value="<?php echo $username; ?>">
                        <div class="text-danger"><?php echo $usernameErr; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Eposta Adı</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                        <div class="text-danger"><?php echo $emailErr; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola</label>
                        <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                        <div class="text-danger"><?php echo $passwordErr; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="repassword">Parola Tekrar</label>
                        <input type="repassword" name="repassword" class="form-control" >
                        <div class="text-danger"><?php echo $repasswordErr ; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="city">Şehir</label>
                        <select name="city" class="form-select">
                            <option value="-1">Şehir Seçiniz</option>

                            <?php foreach($sehirler as $plaka => $sehir):?>

                                <option 
                                    value="<?php echo $plaka; ?>">
                                    <?php echo $city==$plaka ? 'selected':'' ?>
                                        <?php echo $sehir; ?>
                                </option>

                            <?php endforeach; ?>
                            

                        </select>
                        <div class="text-danger"><?php echo $cityErr; ?></div>
                    </div>
                    <div class="mb-3">
                        <label for="hobiler">Hobiler</label>


                        <?php foreach($hobiler as $id => $hobi):?>

                        <div class="formC">
                            <input type="checkbox" name="hobiler[]" value="<?php echo $hobi;?>"id="hobiler_<?php echo $id; ?>">
                            <label for="hobiler_" class="form-check-label"><?php echo $hobi;?></label>
                        </div>
                        
                        <?php endforeach; ?>

                        

                        
                        <div class="text-danger"><?php echo $formCErr; ?></div>
                        
                    </div>

                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                </form>
            </div>
        </div>
        

    </div>
<?php include "partials/_footer.php"?>