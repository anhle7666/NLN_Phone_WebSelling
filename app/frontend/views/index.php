<link rel="stylesheet" href="app\frontend\views\css\products.css">
<div class="album py-5 bg-light">
    <div class="container">
        <!-- Products Outstandings -->
        <h1>Sản phẩm nổi bật</h1>
        <div class="row row-cols-sm-1 row-cols-sm-2 row-cols-md-3  g-3 mt-1 mb-5">
            <!--Product Card Start-->
            <?php foreach ($data as $data) { ?>
                <div class="col product">
                    <a href="?module=products&action=showDetail&parameter=<?php echo $data['idSP']; ?>" class="text-dark text-decoration-none">
                        <div class="card shadow-sm">
                            <!-- Image Product-->
                            <div class="img-product d-flex justify-content-center">
                                <img class="m-auto" src="<?php echo $data['linkAnh']; ?>" alt="" width="300px">
                            </div>

                            <div class="card-body">
                                <h4><?php echo $data['tenSP']; ?></h4>

                                <!-- promotion-->

                                <?php
                                $giaGiam = 0;
                                $giaGoc = $data['gia'];
                                if (isset($promotion[$data['idSP']])) {
                                    $phanTramGiam = (int)($promotion[$data['idSP']]['tongGiam'] * 100);
                                    $giaGiam = (int)($giaGoc * $promotion[$data['idSP']]['tongGiam']);
                                    $giaSauGiam = (int)($giaGoc - $giaGiam);
                                    echo " 
                                <div class=\"price-group\">                               
                                    <p class=\"card-text price older-price\">$giaGoc <span>đ</span></p>
                                    <p class=\"card-text promo\">-$phanTramGiam <span>%</span></p>
                                    <p class=\"card-text price\"> $giaSauGiam <span>đ</span></p>
                                
                                </div>";
                                } else {
                                    echo " 
                                    <div class=\"price-group\">                               
                                        <p class=\"card-text price\">$giaGoc <span>đ</span></p>
                                    </div>";
                                } ?>

                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <!--Product Card End-->
        </div>

    </div>
</div>