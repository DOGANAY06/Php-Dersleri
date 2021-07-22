<?php

session_start();

$_SESSION["ad"] = "doğan";

if (isset($_SESSION["kisiad"])) {
    echo $_SESSION["kisiad"]; 
}
else{
    $_SESSION["kisiad"] ="ibrahim -2";
    echo "yeni oluşturuldu";
}

?>