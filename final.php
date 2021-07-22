<?php

class A{ //bir sınıfın başına final ifadesi getirilirse o sınıf kalıtım alınamaz 
    final public function yaz(){
        echo "Merhaba";
    }   
}

class B extends A{
    public function yaz2(){
        echo "Selam";
    }
}

$nesne = new B();
$nesne->yaz();


?>