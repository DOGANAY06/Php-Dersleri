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
    $dizi =array("Satir1"=>array(11),
    "Satir2"=>array(13,15),
    "Satir3"=>array(17,19,21,23)
    );
    ?>
    
     <table border="1" width="100" height ="100">
     <tr>
     <td><?php echo $dizi["Satir1"][0]; ?></td>
     <td><?php echo $dizi["Satir2"][0]; ?></td> 
    </tr> 

    </table>
</body>
</html>