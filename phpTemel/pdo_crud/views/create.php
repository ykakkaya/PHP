<?php
include 'C:\xampp\htdocs\phpTemel\pdo_crud\crud\user_crud.php';
if (isset($_POST["createsubmit"])) {

    $name = $_POST["first_name"];
    $lastname = $_POST["last_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $userCrud = new UserCrud();
    $result=$userCrud->createUser($name, $lastname, $phone, $email);
    header("location:index.php");

}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    
<div class="container">
    <br>
  <form action="" method="POST">
    <div class="mb-3">
        <label for="first_name" class="form-label">ADI</label>
        <input type="text" class="form-control" name="first_name">
       
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">SOYADI</label>
        <input type="text" class="form-control" name="last_name">
       
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">TELEFON NO</label>
        <input type="text" class="form-control" name="phone">
       
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">EMAİL</label>
        <input type="email" class="form-control" name="email">
       
    </div>
    <button type="submit" class="btn btn-primary" name="createsubmit">KAYDET</button>
</form>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>