<?php
//kaç tane dosya ismi var array içinde ki name kadar vardır
$kacDosya = count($_FILES["secilenDosya"]["name"]);

if ($kacDosya>3) {
    die("En fazla 3 dosya yükleyebilirsiniz");
}
//çünkü array sıfırdan başlıyor kaç dosya varsa oku
for ($i=0; $i < $kacDosya ; $i++) { 
    
    $dosyaGeciciYolu = $_FILES["secilenDosya"]["tmp_name"][$i];
    //gecici ismi  ve indis numarasını aldık
    $dosyaIsim = $_FILES["secilenDosya"]["name"][$i];
    $dosyaBoyutu = $_FILES["secilenDosya"]["size"][$i];
    $dosyaTipi = $_FILES["secilenDosya"]["type"][$i];
    $dosyaYolu = "dosya/".$dosyaIsim;
    $gecerliBoyut = (1024 * 1024) * 1; //1 mb lık boyut
    $gecerliUzantilar = array(
        "image/png",
        "image/gif",
        "image/jpeg",
        "image/jpg"
    );
    if (in_array($dosyaTipi,$gecerliUzantilar)) {
        if ($dosyaBoyutu>$gecerliBoyut) {
            echo "Dosyanın boyutu max 1 mb olabilir!";
        }
        else
        {
            $yukle = move_uploaded_file($dosyaGeciciYolu,$dosyaYolu);
            if ($yukle) {
                    echo $dosyaIsim." isimli dosyası yüklendi. ";
                    echo "<br>";
            }else{
        echo $dosyaIsim." isimli dosyası yüklenemedi hata!"; 
        echo "<br>";
        }
        } 
    }
    else{
        echo "Sadece PNG, GİF , JPG ve JPEG dosyaları yüklenebilir";
    }

    //dosyanın tutulacağı yol değişkeni
    

}
