<?php
$numbers = array(2, 3, 4, 5, 6, 23, 43, 12, 76, 88, 75);

// 1-numbers array yazdıralım.
for ($i=0; $i <count($numbers) ; $i++) {
    echo $numbers[$i] . "<br>";
}

echo "****************" . "<br>";

foreach($numbers as $number){
    echo $number . "<br>";
}

//2-numbers array tek sayıları yazdıralım.

echo "****************" . "<br>";
for ($i=0; $i <count($numbers) ; $i++) {
    if($numbers[$i]%2==0){

        echo "çift sayıdır " . $numbers[$i]."<br>";
    }
}


//3-numbers array 3 e bölünmeyen sayıları yazdıralım.

echo "****************" . "<br>";
for ($i=0; $i <count($numbers) ; $i++) {
    if($numbers[$i]%3==0){

        continue;

    }else{
        echo "3 e bölünmeyen sayılar" . $numbers[$i] . "<br>";
    }
}

//4-numbers array  indeki 5 e bölünen sayıların toplamı kaçtır.

$toplam = 0;
echo "****************" . "<br>";
for ($i=0; $i <count($numbers) ; $i++) {
    if($numbers[$i]%5==0){

        $toplam += $numbers[$i];
        
    }
        

    
}
echo "5 e bölünen sayılar toplamı" . $toplam . "<br>";



?>