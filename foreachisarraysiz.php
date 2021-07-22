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
    
    $isimler =array("Volkan","Hakan","Onur",array( "Aslı","Cemile","Halide"),"Levent","Serkan");


    foreach ($isimler as $anahtar => $icerik ) {
        if ($anahtar==3) {
            foreach ($icerik as $icerik2 ) {
                echo $icerik2."<br/>";
        }
    }
        else {
            echo $icerik."<br/>";
        }
    
    }



    echo "<br /> <br/>";

    ?>
</body>
</html>