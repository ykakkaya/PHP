<?php

session_start();
echo $_SESSION["name"] . "<br>";
echo $_SESSION["password"] . "<br>";

print_r($_SESSION);


unset($_SESSION["name"]);

echo $_SESSION["name"] . "<br>";
echo $_SESSION["password"] . "<br>";
?>