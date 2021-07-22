<?php
date_default_timezone_set("Europe/Istanbul");

setlocale(LC_ALL,"tr_TR");
$gunler = array(
    "Pazar",
    "Pazartesi",
    "Salı",
    "Çarşamba",
    "Perşembe",
    "Cuma",
    "Cumartesi"
);

$gun_tr = $gunler[date("w")]."<br>";

$aylar = array(
    "",
    "Ocak",
    "Şubat",
    "Mart",
    "Nisan",
    "Mayıs",
    "Haziran",
    "Temmuz",
    "Ağustos",
    "Eylül",
    "Ekim",
    "Kasım",
    "Aralık"
);

$ay_tr = $aylar[date("n")];

echo date("d")." ".$ay_tr." ".date("Y").",".$gun_tr;

echo strftime(" %d %B %Y, %a",strtotime("-10 day")); //gün değerini almak için 



?>