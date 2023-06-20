<div class="container">
        <div class="text-center">
            <h1>ÜRÜNLER SAYFASI</h1>
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