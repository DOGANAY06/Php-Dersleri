<?php

abstract class A{
    public $isim;
    abstract public function soyad();

}

class B extends A{
    function __construct($isim)
    {
        $this->isim = $isim;
    }
    public function soyad(){
        echo "Değerler:".$this->isim;
    }
}

$nesne = new B("Doğan Ay");
$nesne->soyad();

?>