<?php
//iki sayıdan büyük olan sayıyı yazdırma $num1=75 $num2=20
$num1 = 75;
$num2 = 20;

if ($num1 > $num2) {
    echo "büyük sayımız $num1 dir";
} else {
    echo "büyük sayımız $num2 dir";
}

//1 vize(%40) 1 final notu(%60) ortalaması. 50 üstü geçer $vize=45  ,$final=55
$vize =100;
$final = 100;
$ortalama = ($vize * 0.40) + ($final * 0.60);
if ($ortalama > 50) {
    echo "dersi geçtiniz ortalamanız $ortalama";
} else {
    echo "dersten kaldınız ortalamanız $ortalama";
}

//bir sayının tekmi çift mi olduğunu yazdır $number=65
$number = 182;

if ($number % 2 == 0) {
    echo "sayımız çift sayıdır.";
} else {
    echo "sayımız tek sayıdır.";
}




//parola e mail bilgisi iste kontrol et $username=ykakkaya  $password=12345



$username = "ykakkaya";
$password = "12345";

$girilen_user="ykakkaya";
$girilen_parola="123455";


if (($username==$girilen_user) &&($password==$girilen_parola)){
    echo "giriş başarılı";
}else{
    echo "giriş başarılı değil";
}


?>