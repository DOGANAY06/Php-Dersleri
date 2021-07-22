<?php
require_once "metotlaricersine.php";
class IkinciSinif extends IlkSinif
{
    public function bilgiGetir()
    {
        return $this->ilksinifMetot();
    }
}
$IkinciNesne = new IkinciSinif();
echo $IkinciNesne->bilgiGetir();

?>
