<?php

$name = $password = "";

if (($_SERVER["REQUEST_METHOD"] == "POST") && (@!$_POST["check"])) {
    echo "aaaaaaaaaa";
    $name = $_POST["name"];
    $password = $_POST["password"];
    echo "Hoşgeldiniz " . $name;
}
if (($_SERVER["REQUEST_METHOD"] == "POST") && (@$_POST["check"])) {
    echo "bbbbbbbbbbb";
    $name = $_POST["name"];
    $password = $_POST["password"];
    setcookie($name, $password, time() + (15));
}



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container p-5">
        <?php if (@$_COOKIE[$name]): ?>

            <h1>Oturum Zaten Açık
                <?php echo $_COOKIE[$name] ?>
            </h1>
        <?php else: ?>

            <form action="" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Kullanıcı Adı</label>
                    <input type="text" class="form-control" name="name">

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Şifre</label>
                    <input type="password" class="form-control" name="password">

                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="check">
                    <label class="form-check-label" for="exampleCheck1">Beni Hatırla</label>
                </div>
                <button type="submit" class="btn btn-primary">Giriş Yap</button>
            </form>
        <?php endif ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>