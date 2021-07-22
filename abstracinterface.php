<?php

//abstract = soyut sınıflardır temel işlevi metot düzeyinde belirtir 
//somut işlemleri içermezler 
abstract class Para{
    abstract public function maas($deger);
    public function maasHesapla($deger)
    {
        return $this->maas($deger)/2;
    }
}

class Insan extends Para
{
    public function maas($deger)
    {
        return $deger;
    }
}
class Personel extends Para
{
    public function maas($deger)
    {
        return $deger;
    }
}

interface Personel
{
    public function yas();
}
class People implements Personel
{
    public function yas()
    {
        
    }
}

$Insan = new Insan();
$personel = new Personel();
echo "Bu insanin maasi :".$Insan->maasHesapla("3500");
echo "<br>Bu personelin maasi :".$personel->maasHesapla("6500");

?>