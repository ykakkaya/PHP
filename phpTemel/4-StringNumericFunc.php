<?php
$sentence = "merhaba PHP";

//sentence karakter dizisinde kaç karakter bulunuyor?

echo ("1******************************************") . '<br>';
echo strlen($sentence) . "<br>";


//sentence karakter dizisini tersten yazdıralım?

echo ("2******************************************") . '<br>';
echo strrev($sentence) . "<br>";


//sentence karakter dizisinde 10. karakter?

echo ("3******************************************") . '<br>';
echo ($sentence[10]) . "<br>";

//sentence karakter dizisinde tüm karakterleri büyük harf yapalım

echo ("4******************************************") . '<br>';
echo strtoupper($sentence) . "<br>";

//sentence karakter dizisinde tüm karakterleri küçük harf yapalım

echo ("5******************************************") . '<br>';
echo strtolower($sentence) . "<br>";

//sentence karakter dizisinde PHP ifadesini FLUTTER şeklinde değiştirelim. 

echo ("6******************************************") . '<br>';
echo str_replace('PHP','FLUTTER',$sentence) . "<br>";





$number = 'ali';
$number1 = 25;
$number2 = 45.6;
$number3 = -144;
$numbers = [2, 3, 5, 6, 7, 9];

//$number sayısal bir ifade mi?

echo ("8******************************************") . '<br>';
echo var_dump(is_numeric($number)) . "<br>";
//$number1 integer bir ifade mi?


echo ("9******************************************") . '<br>';
echo var_dump(is_int($number1)) . "<br>";

//$number2 integer bir ifade mi?


echo ("10******************************************") . '<br>';
echo var_dump(is_int($number2)) . "<br>";

//$number2 float bir ifade mi?


echo ("11******************************************") . '<br>';
echo var_dump(is_float($number2)) . "<br>";

//$number2 bir üst sayıya yuvarlama


echo ("12******************************************") . '<br>';
echo ceil($number2) . "<br>";

//$number2 bir alt sayıya yuvarlama


echo ("13******************************************") . '<br>';
echo floor($number2) . "<br>";
//$number2 en yakın sayıya yuvarlama

echo ("14******************************************") . '<br>';

echo round($number2) . "<br>";
//$number3 sayısının mutlak değerini al

echo ("15******************************************") . '<br>';
echo abs($number3) . "<br>";

//karekök alma işlemi

echo ("16******************************************") . '<br>';

echo sqrt(abs($number3)) . "<br>";
//max ve min elemanı bul

echo ("17******************************************") . '<br>';
echo min($numbers) . "<br>";
echo max($numbers) . "<br>";

?>