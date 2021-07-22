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
    $sayilar = array("11", array("13", "15"), array("17", "19", "21", "23"));
    ?>
    <div class="container">
	<table class="table">
    <thead class=" thead-dark">
    <tbody>
  <?php
    foreach ($sayilar as $icerik) {
        if (is_array($icerik)) {
            foreach ($icerik as $icerik2) {
                if (is_array($icerik2)) {
                    foreach ($icerik2 as $icerik3) {

                        echo "<tr>"; echo "<td colspan=4 align= center >$icerik3</td>";
                    }
                } else {
                    echo "<tr>"; echo "<td colspan=2 align= center >$icerik2</td>";
                }
                # code...
            }
        } else {?>
           <tr> <td colspan="4" solid 1px red><div align="center"><?php echo $icerik; ?></td> </tr>
            <?php
        }
        echo "<br/> <br/>";
    }
   
    ?>
    </thead>
     </tbody>
     </table>
    </div>
</body>

</html>