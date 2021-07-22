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

    $isimler = array("Volkan", "Hakan", "Onur", array("Aslı", "Cemile", "Halide"), array("Siyah", "Beyaz", "Mavi"), "Levent", "Serkan");
    print_r($isimler);
    

    foreach ($isimler as $icerik) {
        if (is_array($icerik)) {
            foreach ($icerik as $icerik2) {
                if (is_array($icerik2)) {
                    foreach ($icerik2 as $icerik3) {
                        echo $icerik3."<br/>"; 
                    }
                }
                else {
                    echo $icerik2."<br/>";
                }

            }
        } else {
            echo $icerik . "<br/>";
        }
    }



    echo "<br /> <br/>";

    ?>
</body>

</html>