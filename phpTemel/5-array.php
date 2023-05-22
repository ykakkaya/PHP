<?php

//colors adında array tanımlayalım red  blue pink green değerlerini ekleyelim

$colors = array("red", "blue", "pink", "green");
print_r($colors) . "<br>";

//colors kaç elemanlıdır?

print_r(count($colors)) . "<br>";
//$arrayNew adında bi array oluşturalım.    ile $colors arraylerini birleştirip tek array yapalım.
$a = array("white");
$arrayNew = array_merge($a, $colors);
print_r($arrayNew);

//$arrayNew array inin son elemanını silelim.

array_pop($arrayNew);
print_r($arrayNew);
//$arrayNew e "yellow" ve "orange" değerlerini ekleyelim.
array_push($arrayNew, "yellow", "orange");
print_r($arrayNew);


//arrayNew i tersten yazdıralım.

print_r(array_reverse($arrayNew));
//arrayNew de blue değeri var mı?
print_r(array_search("blue", $arrayNew));

//arrayNew de purple değeri var mı?
print_r(var_dump(array_search("purple", $arrayNew)));


//arrayNew elemanlarını sırala

sort($arrayNew);

foreach ($arrayNew as $item) {
    print($item)."<br>";
}


?>