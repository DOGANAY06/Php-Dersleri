<?php

$adsoyad = $_POST["adsoyad"];
$sifre = $_POST["sifre"];
$sifreTekrar = $_POST["sifreTekrar"];
$sehir = $_POST["sehir"];
$cinsiyet = $_POST["cinsiyet"];
$hobi = $_POST["hobi"];
$ekbilgiler = $_POST["ekbilgiler"];

if ($adsoyad =="") {
    echo "Ad soyad alanı boş olamaz";
}elseif( $sifre == "" OR $sifreTekrar =="")
{
    echo "Şifre alanı boş";
}elseif($sifre != $sifreTekrar){
    echo "Şifreler birbirine eşit değil";
}elseif(!isset($cinsiyet))
{
    echo "Cinsiyet seçmek zorunlu";
}
else
{
    echo "Adınız ve soyadınız ".$adsoyad."<br>";
    echo "Yaşadığınız şehir:".$sehir."<br>";
    echo "Cinsiyetiniz".$cinsiyet."<br>";
    //dizi olduğu için hobil foreach kullanacağız
    echo "Hobileriniz: <br>";
    foreach ($hobi as $h ) {
        echo $h."<br>";
    }
    echo "Ek bilgileriniz <br>";
    echo $ekbilgiler."<br>";
}




?>