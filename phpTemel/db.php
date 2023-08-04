<?php


const host = "localhost";
const username = "root";
const password = "";
const database = "deneme";

$connec = mysqli_connect(host, username, password, database);

if (mysqli_connect_errno()) {
    die;
}
echo "bağlantı kuruldu";

$sorgu = "SELECT * FROM product";
$result=mysqli_query($connec,$sorgu);

mysqli_close($connec);

echo "bağlantı kapatıldı";
?>
