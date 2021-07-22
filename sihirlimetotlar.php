<?php
//__clone : Belirlenen sınıfa ulaşıldıktan sonra farklı bir
//değişken ile sınıfa ulaşılan değişken clone ibaresi ile kopyalanarak
//farklı sonuçlar almak için kullanılır.
//get ve set ile hata ayıklama yapabiliriz.

class yaz{
    public $isimSoyisim;
    public function __clone()
    {
        echo "Merhaba";

    }
    public function __toString()
    {
        return "<br>Merhaba dünya";
    }
    public function __wakeup()
    {
        echo "<br>Merhaba dünya world ";
    }
    public function __invoke($isim)
    {
        echo "<br>Adı : ".$isim;
    }
    private $ad;
    public function __set($name, $value)
    {
        echo $name."<br>";
        echo $value."<br>";
    }
    public function __get($a)
    {
        echo $a."<br>";
    }
}

$yaz = new yaz();
$kopyala = clone $yaz; //cloneladık
$yaz->isimSoyisim = "Doğan AY ";
echo $yaz->isimSoyisim;
echo "<br>";
$kopyala->isimSoyisim = "ŞAKİR AY";
echo $kopyala->isimSoyisim;
$yaz2 = clone $yaz;
$yaz3 = new $yaz();
echo $yaz3;
$veri = serialize($yaz);
unserialize($veri);
$yaz4 = new yaz();
$yaz4("<br>İbrahim Cekenoğlu");
$yaz5 = new yaz();
echo "<br>";
$yaz5->ad = "Doğan ";
$yaz5->soyad = "Can";
$yaz6 = new yaz();
echo $yaz6->ad ;
echo $yaz6->soyad;

?>