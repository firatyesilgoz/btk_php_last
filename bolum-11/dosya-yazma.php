<?php 
    $myfile =fopen("dosya2.txt","a+");

    $title = "Php\n";

    fwrite($myfile, $title);

    fseek($myfile,0);
    
    while(!feof($myfile)){
        echo fgets($myfile);
    }
    fclose($myfile);

    
?>