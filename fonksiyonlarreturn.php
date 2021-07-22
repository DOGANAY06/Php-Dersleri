<?php

function Islem(){
    $isimsoyisim = "Doğan Ay";

    return $isimsoyisim;
}
$sonuc = Islem();
echo $sonuc;
function Islem2(){
    $isimsoyisim = "Doğan Ay";

    return $isimsoyisim;
}
$sonuc = Islem2();

if ($sonuc=="Doğan Ay") {
    echo $sonuc ." </br>Bilgisayar Mühendisi ";
    # code...
}
else {
    echo "Kişi tanınmıyor ";
}
function Islem3(){
    $isimsoyisim = "Cengizhan Ay";

    return $isimsoyisim;
}
$sonuc = Islem3();

if ($sonuc=="Doğan Ay") {
    echo $sonuc ." </br>Bilgisayar Mühendisi ";
    # code...
}
else {
    echo "</br>Kişi tanınmıyor ";
}

function Islem4(){
     $isim ="Doğan";
     $soyisim ="Ay";

    return  $isim.$soyisim;
}
$sonuc = Islem4();

if ($sonuc=="Doğan Ay") {
    echo $sonuc ." </br>Bilgisayar Mühendisi ";
    # code...
}
else {
    echo "</br>Kişi tanınmıyor ";
}



?> 