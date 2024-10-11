<?php
//  $degisken=true;
//  $a = 3;
//  $b = 5.6;
//  $c = "Hello";
//  $d = array();
//  $e = array("red", "green", "blue");
//  $f = NULL;
//  $g = false;
//  echo gettype($a)."<br>".
//  gettype($b)."<br>".
//  gettype($c)."<br>".
//  gettype($d)."<br>".
//  gettype($e)."<br>".
//  gettype($f)."<br>".
//  gettype($g)."<br>";
 $sayi=55;
 echo"<b>Birinci değişkenin adı:
 \$sayi</b>"."<br>".
     "Değeri: ".$sayi."<br>".
     "Türü: ".gettype($sayi)."<br>";

 $adi="Burak";
 echo"<b>İkinci değişkenin adı :
 \$adi</b>"."</br>".
    "Değeri: ".$adi."<br>".
    "Türü: ".gettype($adi)."<br>";

$ondalik=5.1234;
echo"<b>Üçüncü değişkenin adı :
\$ondalik</b>"."</br>" .
    "Değeri :".$ondalik."<br>".
    "Türü: ".gettype($ondalik)."<br>";
?>