<?php

class A{
    public function yaz(){
        echo "A sınıfı";
    }
}

class B extends A{
    public function __construct()
    {
        self::yaz(); //bizim sınıftaki metot çalışır
        echo "<br>";
        parent::yaz(); //kalıtımla bize gelen sınıftaki metot çalışır
        echo "<br>";
        $this->yaz(); //this ilede sınıftaki methoda ulaşırız
    }
    public function yaz(){
        echo "B sınıfı";
    }
}

$nesne = new B ();

?>