<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if($_POST)
{
    echo $_POST["adsoyad"];
    echo $_POST["sayi1"];
    echo $_POST["sayi2"];
    echo $_POST["sayi1*2"];
}

if ($_GET) {
    echo $_GET["degisken"];
}
?>
    <a href="gonderilen.php?degisken=Dogi Baba">Doğan Babadır </a>
    <form action="#" method="POST">
    <input type="text" name="adsoyad">
    <input type="number" name="sayi1">
    <input type="number" name="sayi2">

    <input type="submit" name="buton" value="Gönder">
    </form>
</body>
</html>