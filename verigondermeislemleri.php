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

    ?>
    <form action="" method="GET">
    <?php for ($i=0; $i < 9; $i++) { ?>
    <input type="text" name="array1[]">  
    <?php } ?>
    <hr>
    <?php for ($i=0; $i < 9; $i++) { ?>
    <input type="text" name="array2[]">
    <?php } ?>
    <hr>
    <input type="submit" name="submit" value="İşlem Yap + - *">


    </form>
    <?php
    $toplama;
    $cikarma;
    $carpma;
    $temp=array1();
    $temp2=array2();
    if(!empty($_POST)){
        $a=array1();
        $b = array2();
        $a = $_POST["array1"];
        $b = $_POST["array2"];
        echo "<br> Çarpma işlemi sonucu = ".array_product($a);
        echo "<br> Toplama işlemi sonucu = ".array_sum($a);
        

    }
    else {
        echo "İcerik boş";
    }

    ?>
</body>
</html>