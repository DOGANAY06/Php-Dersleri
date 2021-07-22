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
    $dizi = array(
        "11" => array(
            '13',"15" => array("17", "19","21", "23")
        ),

    );
    foreach ($dizi as $key1 => $val1) {
        echo "$key1 [";
        foreach ($val1 as $key2 => $val2) {
            echo " $key2 [";
            foreach ($val2 as $key3 => $val3) {
                echo " $key3 $val3";
            }
            echo "]<br/>";
        }
    }
    ?>
</body>

</html>