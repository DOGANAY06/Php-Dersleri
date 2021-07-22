<?php

$dosyaYolu = $_FILES["secilenDosya"]["tmp_name"]; //dosyanın gecici alanı
$dosyaTipi = $_FILES["secilenDosya"]["type"];  //tipi
$dosyaIsmi = $_FILES["secilenDosya"]["name"]; //name mi 
$dosyaBoyut = $_FILES["secilenDosya"]["size"]; //dosya boyutu tutmak için
$gecerliBoyut = (1024*1024) *5 ; //5 mb lık alan
$gecerliTipler = array(
    "application/pdf",
    "application/docx"
); ///bunlar dosyanın gecerli tipleri

if (in_array($dosyaTipi,$gecerliTipler)) {
    if ($dosyaBoyut > $gecerliBoyut) {
        echo "Yüklenen dosya maximum 5 mb olabilir";
    }else{
    $yukle = move_uploaded_file($dosyaYolu,$dosyaIsmi);
    if ($yukle) {
        echo "Dosya Yüklendi";
    }
    else{
        echo "Dosya yüklenemedi";
    }
}
}else{
    echo "Sadece PNG,GIF ve jpeg dosyaları yüklenebilir";
}

?>