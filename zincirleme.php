<?php

/* metodların birbirine zincir halkası gibi bağlanmasından dolayı da zincirleme metod denir*/

class ornek{
    private $yazi;
    private $style;
    
    function isim($isim){
        $this->yazi = $isim;
        return $this; //bunşarı koydum ki değerler dönsün
    }

    function style($gelenStyle){
        $this->style = $gelenStyle;
        return $this;
    }
    function yazdir(){
        echo '<div style="'.$this->style.'">'.$this->yazi.'</div>';
        return $this;
    }

}

$ornek = new ornek();
/*$ornek->isim("Doğan AY");
$ornek->style("color:pink");
$ornek->yazdir();
 normalde olan*/
//zincirli olanı yapıyorum
$ornek->isim("Doğan AY")->style("color:green")->yazdir();

?>