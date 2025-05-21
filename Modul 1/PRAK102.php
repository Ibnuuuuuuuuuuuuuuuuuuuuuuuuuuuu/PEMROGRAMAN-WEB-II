<?php

$Jarijari = 4.2 ;
$Tinggi = 5.4 ;
$Panjang = 8.9 ;
$Lebar = 14.7 ;
$Sisi = 7.9 ;

$LuasAlas = $Panjang * $Lebar ; 
$Volume = (1/3) * $LuasAlas * $Tinggi ;

echo number_format ($Volume). " m3";