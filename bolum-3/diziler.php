<?php 

$urunler =array(
    "100" =>array(
        "urun_adi" =>"iphone 14",
        "fiyat" =>30000
    ),
    "101" =>array(
        "urun_adi" =>"iphone 15",
        "fiyat" =>40000
    ),
    "102" =>array(
        "urun_adi" =>"iphone 16",
        "fiyat" =>50000
    )
) ;
$keys = array_keys($urunler);

for($i = 0; $i < count($urunler); $i++) {
    print_r($urunler[$keys[$i]]);
    echo "<br>";
}
?>