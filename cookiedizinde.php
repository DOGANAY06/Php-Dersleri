<?php

setcookie("bilgi[adi]","dogan",time() + 60*60);
setcookie("bilgi[soyadi]","ay",time() + 60*60);
setcookie("bilgi[yil]","2021",time()+ 60*60);
setcookie("is[adi]","engineer",time()+ 60*60);
echo "<pre>";
print_r($_COOKIE);


if (isset($_COOKIE["is"]["adi"])) {
    echo  $_COOKIE["is"]["adi"];
}else{
    echo "Böyle bir cookie yok";
}

?>