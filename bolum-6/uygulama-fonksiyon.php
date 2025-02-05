<?php 

    function tamBolenler($sayi){
        $tamBolenler = array() ;

        for($i = 2; $i <= $sayi; $i++){
            if($sayi % $i == 0){
                array_push($tamBolenler, $i);
                
    }
        }
    return $tamBolenler;
    }

    print_r(tamBolenler(25));
?>