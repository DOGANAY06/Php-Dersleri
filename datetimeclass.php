<?php

//datetime sınıfı metotları
//getTimestamp = zaman çıktısını verir

$tarih  = new DateTime();
$tarih->setTimezone( //sınıfa ulaştık artık 
    new DateTimeZone("Europe/Istanbul") //zaman bölgesi belirlemek için kullanılır
);

echo $tarih->format("d/m/Y H:i:s");
echo "<br>".$tarih->getTimestamp();
$tarih->setTimestamp(time());
echo "<br>".$tarih->format("d/m/Y H:i:s");

$tarih->modify("+2 day");
echo "<br>".$tarih->format("d/m/Y H:i:s");

//doğum tarihi hesaplama
$dogum = mktime(0,0,0,9,1,1998);

$simdiki = time();

$cikart =$simdiki- $dogum;

$gunbul = $cikart / (60*60*24)/(12*30); //60 saniye ile 60 dakikayı carpıp 1 günde 24 saat onun değeri kadar bakarız 

$gun = floor($gunbul);

echo "<br>".$gun;

?>