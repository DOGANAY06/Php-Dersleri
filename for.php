<?php

echo "<h2>Bu birinci örnek</h2>";

for ($baslangic_deger=5; $baslangic_deger < 20; $baslangic_deger++) { 
    # code...
    echo "merhaba $baslangic_deger </br> ";
}

echo "<h2>Bu 2. örnek</h2>";

$siteler = array(
    'www.google.com',
    'facebook.com',
    'www.twitter.com',
    'youtube.com',
    'facebook.com',
    'www.twitter.com',
    'youtube.com'
);

$say = count($siteler);

for ($baslangic=0; $baslangic < $say; $baslangic++) { 
    # code...
    echo $siteler[$baslangic]."<br>";
}


?>