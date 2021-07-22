<?php

session_start();

ini_get("session.gc_maxlifetime",5000); //localhostta çalışmayabilir

echo ini_get("session.gc_maxlifetime");

//sunucuda çalışır 




?> 