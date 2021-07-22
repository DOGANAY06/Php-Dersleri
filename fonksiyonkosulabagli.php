<?php

$deger = "Doğan";

switch ($deger) {
    case $deger =="Volkan";
        # code...
        function Yaz(){
            echo "Merhaba Volkan Alakent";
        }
        break;
    default:
        # code...
        function Yaz(){
            echo "Merhaba Hakan Alakent";
        }
}
Yaz(); 

if ($deger=="Volkan") {
    function Yaz(){
        echo "Merhaba Volkan Alakent";
    }
    # code...
}
else {
    # code...
    function Yaz(){
        echo "Merhaba Hakan Alakent";
    } 
}
Yaz(); 

?>