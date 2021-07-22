<?php

class IlkSinif
{
    public $ilkdegisken;
    public $soyisim;
    public $yas;
    public function isimGetir()
    {
        return $this->isim;
    }
    public function soyisimGetir(){
        return $this->soyisim;
    }
    public function yasGetir(){
        return $this->yas;
    }
    public function bilgiDegistir($isim,$soyisim,$yas)
    {
        $this->isim =$isim;
        $this->soyisim=$soyisim;
        $this->yas=$yas;
    }


}

$sinif = new IlkSinif();
$sinif->isim = "Doğan";
echo $sinif->isimGetir();

$sinif->bilgiDegistir("Sezai","Karakoç",21);
echo "<br>";
$sinif->yasGetir();
$yas = $sinif->yasGetir();
echo $yas;

?>