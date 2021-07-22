<?php 

$islem = function (){
    $isim = "Doğan ";
    $soyisim = "Ay ";
    $sehir = "Istanbul";
    $yas = 23;
    $meslek = "Bilgisayar Mühendisi";

    return array($isim,$soyisim,$sehir,$yas,$meslek); //çoklu değer döndürme
};

$sonuc = $islem();
echo "<pre>";
print_r($sonuc);
echo "</pre> <br/>";

echo "İsim : ".$sonuc[0]."<br/>";
echo "Soyisim : ".$sonuc[1]."<br/>";
echo "Sehir : ".$sonuc[2]."<br/>";
echo "Meslek : ".$sonuc[4]."<br/>";


?> 