<?php

class A{
    public static $sehir = "Ankara";
    public static function isim(){
        echo "Doğan AY -2";
    }
}

$nesne = new A();
$nesne->isim();
A::isim();
echo A::$sehir; //karışıklığı önlemek için kullanılır 
//static = Oluşturulan metot ve özellik, sınıfı başlatmadan sınıf 
//içerisinden ya da sınıf dışından erişilmesini sağlar

?>