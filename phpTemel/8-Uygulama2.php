<?php


$product = array(
    "1" => array(
        "productName" => "Iphone14",
        "productPrice" => 55000,
        "productImg" => "https://avatars.mds.yandex.net/i?id=9464a72244bc513c480ab43e0cad1dd4be160c33-7762396-images-thumbs&n=13",
        "productStok" => 25
    ),
    "2" => array(
        "productName" => "Iphone13",
        "productPrice" => 45000,
        "productImg" => "https://avatars.mds.yandex.net/i?id=a0d442e97f2b0a0fef6f2c3403f8fd1e363ea8c5-5280837-images-thumbs&n=13",
        "productStok" => 30
    ),
    "3" => array(
        "productName" => "Iphone12",
        "productPrice" => 35000,
        "productImg" => "https://avatars.mds.yandex.net/i?id=12152dd767b3490d79106b1f57f5e7d45dbd3f7f-8360281-images-thumbs&n=13",
        "productStok" => 0
    ),
    "4" => array(
        "productName" => "Samsung S21",
        "productPrice" => 50000,
        "productImg" => "https://avatars.mds.yandex.net/i?id=8cff05821e519fa35b6a806884aa2b2f6bca249c-9068872-images-thumbs&n=13",
        "productStok" => 15
    ),
    "5" => array(
        "productName" => "Samsung S20",
        "productPrice" => 40000,
        "productImg" => "https://avatars.mds.yandex.net/i?id=aadbe4b5e1f333ebd578c7989eb42b46da0be6c5-7546644-images-thumbs&n=13",
        "productStok" => 10
    ),
    "6" => array(
        "productName" => "Samsung S18",
        "productPrice" => 35000,
        "productImg" => "https://avatars.mds.yandex.net/i?id=8a49cf1a7c06db148196787e9f3a79938ce84145-8754774-images-thumbs&n=13",
        "productStok" => 2
    ),
    "7" => array(
        "productName" => "Lenovo",
        "productPrice" => 19000,
        "productImg" => "https://avatars.mds.yandex.net/i?id=49f6e98abc6bd1a04562f71b7021d4af-4391252-images-thumbs&n=13",
        "productStok" => 0
    ),
    "8" => array(
        "productName" => "Xiaomi",
        "productPrice" => 28000,
        "productImg" => "https://avatars.mds.yandex.net/i?id=6c7d577d6466df7995649d12df2bd071-4777526-images-thumbs&n=13",
        "productStok" => 12
    ),
    "9" => array(
        "productName" => "Nokia",
        "productPrice" => 5000,
        "productImg" => "https://avatars.mds.yandex.net/i?id=b13587e23308cce92021c65450d67ddab8a54d99-9106331-images-thumbs&n=13",
        "productStok" => 1
    ),
);
$categories = array("Cep Telefonu", "Notebook", "Beyaz Eşya", "Küçük Ev Aletleri", "Kişisel Bakım Ürünleri");


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1>E-TİCARET ÜRÜNLER SAYFASI</h1>
        </div>

        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <?php foreach ($categories as $category): ?>
                        <a href="#" class="list-group-item list-group-item-action " aria-current="true">
                            <?php echo $category ?>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-9">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($product as $item): ?>
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?php echo $item['productImg'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                      ÜRÜN ADI  <?php  echo $item['productName'] ?>
                                    </h5>
                                    <p class="card-text">
                                        ÜRÜN FİYATI : <?php echo $item['productPrice'] ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">
                                        STOK ADETİ : <?php if($item['productStok']==0): ?>
                                            <span class="badge rounded-pill text-bg-danger"><?php echo $item['productStok']?></span>
                                        
                                        
                                        <?php elseif ($item['productStok']<=10):?>
                                            <span class="badge rounded-pill text-bg-warning"><?php echo $item['productStok']?></span>
                                         <?php else: ?>
                                            <span class="badge rounded-pill text-bg-info"><?php echo $item['productStok']?></span>
                                        <?php endif ?>
                                    </small>
                                    
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>


                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>