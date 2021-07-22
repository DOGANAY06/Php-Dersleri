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

    

    $person =array(
        array(
            'fname'=>'ramesh',
            'lname'=>'karki',
            'adress'=>'sivas',
            'phone'=>342313412
        ),
        array(
            'fname'=>'ramesh',
            'lname'=>'karki',
            'adress'=>'sivas',
            'phone'=>312312
        ),
        array(
            'fname'=>'ramesh',
            'lname'=>'karki',
            'adress'=>'sivas',
            'phone'=>312312
        ),
        array(
            'fname'=>'ramesh',
            'lname'=>'karki',
            'adress'=>'sivas',
            'phone'=>312312
        ),
        array(
            'fname'=>'ramesh',
            'lname'=>'karki',
            'adress'=>'sivas',
            'phone'=>312312
        ),
        array(
            'fname'=>'ramesh',
            'lname'=>'karki',
            'adress'=>'sivas',
            'phone'=>312312
        ),
    );
    echo $person[1]['fname'];
    echo '<pre>';

    echo "<pre>";
    print_r($person);
    ?>
    <table border ="1" width="900" align="center">
    <tr>
    <td>
    SN
    </td>
    <td>
    fname
    </td>
    <td>
    lname
    </td>
    <td>
    phone
    </td>
    </tr>

   <?php

   foreach($person as $p) {

   ?> 

    <tr>
    <td>
    <?php echo $p['fname']; ?>
    </td>
    <td>
    <?php echo $p['lname']; ?>
    </td>
    <td>
    <?php echo $p['adress']; ?>
    </td>
    <td>
    <?php echo $p['phone']; ?>
    </td>
    </tr>

    <?php } ?>

</body>
</html>