<?php
require_once "gecis.php";
class IkinciSinif  extends IlkSinif
{
    public static $isim ="Doğan"; //static değişkene self ile erişiriz
    public function getir()
    {
        echo self::$isim;
        self::x();
        echo parent::SITEISMI; //parent bir üst sınıfın sabitlerine static özellik ve metotlarına erişmemizi sağlar
        parent::bak();
    }
    public function x()
    {
        echo "Ben x metoduyum";
    }
}

$sinif = new IkinciSinif();
$sinif->getir();

?>