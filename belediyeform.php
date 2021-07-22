<?php

$adsoyad = $_POST["name"];
$tcno = $_POST["tcno"];
$telno = $_POST["telno"];
$gelir = $_POST["gelir"];
$adress = $_POST["adress"];
$ev = $_POST["house"];
$kacDosya = count($_FILES["secilenDosya"]["name"]);

if ($kacDosya>3) {
    die("En fazla 3 adet fatura fotografı yükleyebilirsiniz...");
}

for ($i=0; $i <$kacDosya ; $i++) { 
    $dosyaGeciciYolu = $_FILES["secilenDosya"]["tmp_name"][$i];
    //gecici ismi ve indis numarasını alıp yazdık
    $dosyaIsim = $_FILES["secilenDosya"]["name"][$i];
    $dosyaBoyutu = $_FILES["secilenDosya"]["size"][$i];
    $dosyaTipi = $_FILES["secilenDosya"]["type"][$i];
    $dosyaYolu = "dosya/".$dosyaIsim;
    $gecerliBoyut = (1024 * 1024) *5 ; //5 mblık yer kaplar
    $gecerliUzantilar = array(
        "image/png",
        "image/gif",
        "image/jpeg",
        "image/jpg"
    );
    if (in_array($dosyaTipi,$gecerliUzantilar)) {
        if ($dosyaBoyutu>$gecerliUzantilar) {
            echo "Dosyanın boyutu maximum 5 mb olabilir";
        }
        else
        {
            $yukle = move_uploaded_file($dosyaGeciciYolu,$dosyaYolu);
            if ($yukle) {
                echo $dosyaIsim." faturası yüklendi. ";
                echo "<br>";
            }
            else{
                echo $dosyaIsim."  fatura yüklenemedi hata! fotograf yükleniyinz";
                echo "<br>";
            }
        }
    }else
    {
        echo "Sadece fotograf yüklenebilir metin yüklemeyiniz";
    }
}

echo "Başvuran kişi ad ve soyad = ".$adsoyad."<br>";
echo "Başvuran kimlik no = ".$tcno."<br>";
echo "Telefon numarası =".$telno."<br>";
echo "Kişinin aylık geliri = ".$gelir."<br>";
echo "Kişinin ev adresi = ".$adress."<br>";
echo "Kişinin ev durumu =".$ev."<br>";

?>