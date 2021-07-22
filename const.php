<?php

class nesne{
    const deger= "Ankara";
    public $baskent;
    public function ulas(){
        echo $this->deger;
        echo self::deger;
    }
}

echo nesne::deger;
echo "<br>";
//methodla ulaşıcaz
nesne::ulas();


?>