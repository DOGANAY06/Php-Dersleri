<?php

date_default_timezone_set("Europe/Istanbul");
//istediğimiz zaman dilimini belirleme için

$tarih = date("d/m/y");

$saat = date("H:i:s");

echo $tarih."- ".$saat;

echo "<br>";
echo date_default_timezone_get(); //hangi zaman dilimine bağlıyız

//time: 1 Ocak 1970 den bu yana zaman döndürür

echo "<br> ".time();
echo "<br>";
$bugun = time();
$yarin = $bugun + (60*60*24); //saniye*dakika*günkaçsaat

$tarih = date("d/m/y H:i:s",$yarin);
echo $tarih;

// mktime():İstedigimiz değeri direk verir  tarih üretmek için kullanılır
$tarihm = mktime(11,0,0,5,24,2066);
echo "<br>";
echo $tarihm;
echo "<br>";
echo date("d/m/y H:i:s",$tarihm);

?>