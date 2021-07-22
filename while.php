
<?php

//while koşul olumlu işe çalışır

$egitmenler = array(
    'cem','ahmet','doğan','cengiz'
);

$satirno  =count($egitmenler);

echo "Toplam eğitmen sayısı <b>.$satirno.</b><br>";

$satir = 0;

while ($satir<=$satirno) {
    echo $egitmenler[$satir]."</br>";
    $satir++;
}

?>