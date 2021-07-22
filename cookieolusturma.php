<?php

setcookie("sehir","ankara",time()+60*60);
//1 saat sonra bu değer yok olmuş olur 
setcookie("sehir","35",time()+60*60);
echo $_COOKIE["sehir"];
echo "<br> <pre>";
print_r($_COOKIE);

setcookie("adi","dogan",time() + 60*60);
setcookie("adi","dogi",time() + 60*60);
echo $_COOKIE["adi"];


//cookie kontrolü

if (isset($_COOKIE["takim"])) {
    echo $_COOKIE["takim"];
}else{
    setcookie("takim","ezikbjk",time() + 60*60);
    echo "<br>";
    echo $_COOKIE ["takim"]."yeni cookie";
}


//cookie silme işlemi
setcookie("adi1","",time() -1 );
echo $_COOKIE["adi1"];




?>