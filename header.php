<?php 
//header:yönlendirme işlemi için kullanılıyor
//header('Location:iletisim.php');
//belirlenen süre sonrasında başka siteye gönderme işlemi refresh

header("refresh:3;url=iletisim.php");
//header ile türkçe karakter tanımlaması yapılıp veri tabanınıa daha kolay aktarım sağlanır
header("content-type:text/html; charset=utf-8")


?>