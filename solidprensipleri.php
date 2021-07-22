<?php

class MailHandler
{
    public function send()
    {
        echo "Rsim silindiğine dahil mail gönderiliyor";
    }
}

class ImageSaveHandler{
    private $storage;
    private $database;
    public function __construct(Storage $storage, Database $database)
    {
        $this->storage = $storage;
        $this->database = $database;
    }
    public function save($file, Logger $logger)
    {
        $this->database->save($file);
        //veritabanı hemde FTP kaydetme işlemi yapacak
        $this->storage->save($file); 
        //loglama
        $logger->save();
    }
    public function deleteFTPImage($id,MailHandler $mailhandler){
        $this->storage->deleteFTPImage($id);
        $mailhandler->send();
    }
}

class Storage
{
    public function save($file)
    {
        echo "FTP'ye kaydediliyor";
    }
    public function deleteFTPImage($id){
        echo "<br>";
        echo $id. " li resim siliniyor...";
    }
}
class Database
{
    public function save($file)
    {
        echo "Veritabanına kaydediliyor";
    }
    
}

class Logger
{
    public function save(){
        echo "Log kaydediliyor";
    }
}


$imagesaveHandler = new ImageSaveHandler(new Storage(),new Database());
echo $imagesaveHandler->save(["path"=>"path","name"=>"name"],new Logger()); //array yoludur
echo  $imagesaveHandler->deleteFTPImage(1,new MailHandler());

//open closed principle:bir önceki kodu başka bir yerde kullanmak için 
//hesap sınıfı var mesela bundan kalıtım alıp yenihesap oluşturup başka bir yerde de kullanabilirsiniz 

/*LİSKOV'S Substitution Principle: 
Objeler çocukları ile programın beklentileri değişmeden 
değiştirilebilir */
/*
interface segregation principle:
başka sınıfları kullanan kodların ihtiyaçlarından fazlasına
ulaşmasını engellemek ve bu sayede okunabilirliği ve bakım 
kolaylığını arttırmak için sunulan prensip */

/* 
dependency inversion principle :  Bağımlı olan componentlerin istenmesi olayıdır 
başka bir sınıftan isteme 
*/


?>