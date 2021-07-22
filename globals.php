<?php
//GLOBALS değişkeni
$onemliveri =35;
function topla($sayi){
    $topla = $sayi + $GLOBALS["onemliveri"];
    echo $topla;
}    

topla(20);

?>