<?php
require_once "gecis.php";
class IkinciSinif 
{
    public $isim;
    public $soyisim;
    public $yas;

    function __construct($isim,$soyisim,$yas)
    {
        $this->isim=$isim;
        $this->soyisim=$soyisim;
        $this->yas=$yas;
    }
    public function getir()
    {
        echo "İsim".$this->isim. " Soyisim: ".$this->soyisim 
        . " Yaş: ".$this->yas;
    }
    function __destruct()
    {
        echo "<br>Hadi herkes evine";
    }
}

$sinif = new IkinciSinif("Doğan","Ay","23");
$sinif->getir();

?>
