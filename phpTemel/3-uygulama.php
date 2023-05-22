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
    <?php

    $title1 = 'PHP';
    $description1 = "PHP, özellikle dinamik web sayfaları oluşturmak için tasarlanmıştır ve sunucu taraflı programlama dilleri arasında en popüler olanlardan biridir.

PHP, sunucu tarafında çalıştığı için, web sayfalarının oluşturulması için HTML ile birlikte kullanılır. PHP, veritabanı işlemleri, form işlemleri, kullanıcı girişi, dosya işlemleri gibi birçok farklı görevi yerine getirebilir.

PHP, açık kaynak kodlu bir projedir ve ücretsiz olarak kullanılabilir. Bu nedenle, birçok web geliştiricisi PHP'yi tercih eder. Ayrıca, PHP'nin büyük bir topluluğu vardır ve bu topluluk, PHP ile ilgili sorunları çözmek ve yeni özellikler eklemek için çalışır.";
    $salary1 = 15000;

    $title2 = 'Python';
    $description2 = "Python, açık kaynak kodlu bir projedir ve ücretsiz olarak kullanılabilir. Hem ticari hem de akademik amaçlar için kullanılabilir. Python, birçok farklı alanda kullanılabilir, örneğin web geliştirme, veri bilimi, yapay zeka, oyun geliştirme, yazılım testi ve daha pek çok alanda.

Python, yüksek seviyeli bir dildir, bu nedenle insanların doğal diline daha yakındır ve bu nedenle öğrenmesi kolaydır. Ayrıca, Python, açık ve okunaklı bir sözdizimine sahiptir, bu nedenle kodların anlaşılması ve bakımı daha kolaydır.

Python, zengin bir kütüphane ve çerçeve ekosistemine sahiptir. Bu nedenle, birçok işlemi gerçekleştirmek için hazır araçlar ve modüller bulunabilir. Bunun yanı sıra, Python, birçok platformda çalışabilir, yani Windows, macOS ve Linux gibi farklı işletim sistemleri ile uyumludur.";
    $salary2 = 25000;

    $title3 = 'Flutter';
    $description3 = "Flutter, Google tarafından geliştirilen açık kaynaklı bir mobil uygulama geliştirme çerçevesidir. Dart adlı bir programlama dili kullanarak iOS, Android, Windows, Mac ve Linux gibi farklı platformlarda çalışan yüksek kaliteli, modern ve hızlı mobil uygulamalar geliştirmek için kullanılır.

Flutter, geliştiricilere hızlı bir geliştirme deneyimi sunar. Hızlı bir şekilde hot-reload özelliği sayesinde, uygulamanın canlı önizlemelerini anında görebilirsiniz. Flutter, görsel olarak zengin uygulamalar oluşturmak için kullanabileceğiniz widget'lar ve araçlar sunar.

Flutter'ın performansı oldukça yüksektir, çünkü uygulamaların neredeyse tamamı yerel uygulamalar gibi çalışır. Ayrıca, Flutter'ın, geleneksel mobil uygulama geliştirme teknolojilerine kıyasla daha az kaynak kullanarak uygulama geliştirmeye olanak sağlayan özellikleri de vardır.

Flutter, birçok büyük şirket tarafından kullanılmaktadır. Bunlardan bazıları Google, Alibaba, Philips, eBay ve daha birçok şirkettir. Flutter'ın büyük bir topluluğu da vardır, bu topluluk, Flutter geliştiricilerine destek sağlamak için birçok kaynak, araç ve yardımcı program sağlamaktadır.";
    $salary3 = 35000;

    ?>
    <br>
    <div class="card text-center">
        <div class="card-header">
            <?php echo "<h2>$title1</h2>" ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                <?php echo "$description1" ?>
            </h5>
            <p class="card-text">
                <?php echo "ORTALAMA AYLIK MAAŞ : $salary1" ?>
            </p>
            <a href="#" class="btn btn-primary">DETAYLAR</a>
        </div>
        <div class="card-footer text-body-secondary">

        </div>
    </div>
    <div class="card text-center">
        <div class="card-header">
            <?php echo "<h2>$title2</h2>" ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                <?php echo "$description2" ?>
            </h5>
            <p class="card-text">
                <?php echo "ORTALAMA AYLIK MAAŞ : $salary2" ?>
            </p>
            <a href="#" class="btn btn-primary">DETAYLAR</a>
        </div>
        <div class="card-footer text-body-secondary">

        </div>
    </div>
    <div class="card text-center">
        <div class="card-header">
            <?php echo "<h2>$title3</h2>" ?>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                <?php echo "$description3" ?>
            </h5>
            <p class="card-text">
                <?php echo "ORTALAMA AYLIK MAAŞ : $salary3" ?>
            </p>
            <a href="#" class="btn btn-primary">DETAYLAR</a>
        </div>
        <div class="card-footer text-body-secondary">

        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>