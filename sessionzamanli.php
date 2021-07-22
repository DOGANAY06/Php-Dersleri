<?php

session_start();

if (!isset($_SESSION["sure"])) {
    $_SESSION["sure"] = time()+60*60;
    $_SESSION["adSoyad"] = "Doğan Ay";
}

if (time() > $_SESSION["sure"]) {
    session_destroy();
    die;
}

?>