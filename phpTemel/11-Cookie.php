<?php

setcookie("isim", "yakup");




setcookie("isim", "yakup", time() - (60 * 60));



echo $_COOKIE["isim"];




















?>