<?php
//serialize:veri saklamamıza yarar 
class A{
    public $isim;
    public function yaz() {
        echo $this->isim;
    }
}

$nesne = new A();
$nesne->isim = "Dogi baba";
$nesne->yaz();


file_put_contents("veriler.txt",serialize($nesne));
//sınıfa bağlamış olduğumuz değişkeni gönderdik

//elimizdeki dosaya bağlanma  verileri lamka için kullanılır unserialize
$baglan =unserialize(file_get_contents("veriler.txt"));
$baglan->isim ="Dogi";
$baglan->yaz();


?>