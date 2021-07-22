<?php

class A{
    public $isim   = "Doğan ";
    public $soyisim = "AY";
    public $sehir  = "Ankara ";
}

$nesne =new A();

function yazdir(A $bilgi){
    echo $bilgi->isim."<br>";
    echo $bilgi->soyisim."<br>";
    echo $bilgi->sehir."<br>";

}

yazdir($nesne);


?>