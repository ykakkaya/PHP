<?php include 'C:\xampp\htdocs\phpTemel\9-templates\data.php'
    ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo $title ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
<?php $number1=$number2=$toplam=0 ?>

    <div class="container">

        <form action="" method="post">
            <div class="mb-3">
                <label for="number1" class="form-label">1. sayı</label>
                <input type="number" class="form-control" name="number1" >
                
            </div>
            <div class="mb-3">
                <label for="number2" class="form-label">2. sayı</label>
                <input type="number" class="form-control" name="number2" >
                
            </div>
            
            <button type="submit" class="btn btn-primary">Hesapla</button>
        </form>

        <?php 
            if($_SERVER['REQUEST_METHOD']=="POST"){

            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $toplam = $number1 + $number2;
            echo "1.SAYI ". $number1."<br>";
            echo "2.SAYI ".$number2."<br>";
            echo "toplam ".$toplam."<br>";

            }
        
        
        
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>