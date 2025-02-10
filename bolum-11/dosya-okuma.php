<?php 
    
   $myfile=fopen("dosya.txt","r");

    //echo fread($myfile,filesize("dosya.txt"));

    while(!feof($myfile)){
        echo fgets($myfile);
    }

    fclose($myfile);
?> 