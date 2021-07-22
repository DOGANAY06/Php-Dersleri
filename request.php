<form action="" method="POST">

<input type="number" name="sayi">
<button>Gönder</button>

</form>

<?php
//request kullanmayın güvenlik açıklarına yol açar
if ($_REQUEST) {
    echo $_REQUEST["sayi"];
}


?>