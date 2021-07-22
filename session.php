<?php

//cookie göre daha güvenli bir yapıdır.
session_start(); //session başlatma
$_SESSION["isimSoyisim"] = "Doğan AY"; //session oluşturma

$_SESSION["iller"] = array("il1"=>"Ankara","il2"=>"İstanbul","il3"=>"İzmir");

echo"<pre>";
print_r($_SESSION["iller"]["il1"]);

//unset($_SESSION["isimSoyisim"],$_SESSION["iller"]); //silme işlemi yapılıyor
session_destroy(); //tüm destroyları siler 
echo $_SESSION["isimSoyisim"];
print_r($_SESSION["iller"]["il1"]);

?>