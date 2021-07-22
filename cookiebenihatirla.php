<?php

if ($_POST) {
    if (isset($_POST["hatirla"])) {
        setcookie("kullanici",$_POST["kullanici"],time() + 60*60);
        echo $_COOKIE["kullanici"];
    }
    else{
        echo $_POST["kullanici"];
    }
}

?>