<?php 
    $course =array(
        "title"=>("javascript kursu"),
        "description"=>("ileri seviye javascipt dersleri"),
        "image"=>("2.jpg")
        );
    echo $course["title"];


    $jsonString =json_encode($course);

    $myfile=fopen("course2.json","w");
    fwrite($myfile, $jsonString);
    fclose($myfile);
?>