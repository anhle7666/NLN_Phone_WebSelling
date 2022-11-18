<?php
extract($data);
?>
<main>
    <div class="container shadow-sm border">
        <div class="row">
            <div class="col text-center">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <?php $count = 0;
                        foreach ($anh as $anh) if ($anh['idMau'] == $mau[$selectColor]['idMau']) {
                            $count++;
                            if ($count == 1) { ?>
                                <div class="carousel-item active">
                                    <img src="<?php echo $anh['linkAnh']; ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php } else { ?>
                                <div class="carousel-item">
                                    <img src="<?php echo $anh['linkAnh']; ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col border-start m-3 p-3">

                <?php foreach ($detail as $de)
                    if ($de['idMau'] == $mau[$selectColor]['idMau'] && $de['idRam'] == $memory[$selectMemory]['idRam'] && $de['idBoNho'] == $memory[$selectMemory]['idBoNho']) { ?>
                    <h1 class="mb-5"><?php echo $de['tenSP'] . " ({$de['RAM']}GB/{$de['boNho']}GB)"; ?></h1>

                    <form id="configForm" action="?module=products&action=showDetail&parameter=<?php echo $detail[0]['idSP']; ?>" method="POST">
                        <p><strong>Dung lượng: </strong></p>
                        <?php
                        $count = -1;
                        foreach ($memory as $dl) {
                            $count++; ?>
                            <input onclick="submitForm()" type="radio" class="btn-check" name="options" id="<?php echo "option$count"; ?>" autocomplete="off" <?php if ($count == $selectMemory) echo "checked"; ?> value="<?php echo $count; ?>">
                            <label class="btn btn-outline-secondary" for="<?php echo "option$count"; ?>"><?php echo "{$dl['RAM']}GB - {$dl['boNho']}GB"; ?></label>
                        <?php } ?>


                        <p class="mt-2"><strong>Màu sắc:</strong></p>
                        <?php
                        $count = -1;
                        foreach ($mau as $key => $dl) {
                            $count++; ?>
                            <input onclick="submitForm()" type="radio" class="btn-check" name="options_color" id="option_color_<?php echo $key; ?>" value="<?php echo $key ?>" <?php if ($key == $selectColor) echo "checked" ?> autocomplete="off">
                            <label class="btn btn-outline-secondary" for="option_color_<?php echo $key; ?>"><?php echo $dl['mau'] ?></label>
                        <?php  } ?>

                        <!-- Cập nhật hiển thị giá sản phẩm -->
                        <div class="d-flex flex-start mt-5">
                            <?php
                            $giaGiam = 0;
                            $giaGoc = $de['gia'];
                            if (($promotion != NULL)) {
                                $phanTramGiam = (int)($promotion[0]['tongGiam'] * 100);
                                $giaGiam = (int)($giaGoc * $promotion[0]['tongGiam']);
                            }
                            ?>
                            <h4 class="fw-bold"><span class="currency"><?php echo $giaGoc - $giaGiam; ?></span> đ</h4>
                            <?php
                            if (($promotion != NULL)) {
                                echo "
                            <p class=\"card-text ms-5 promo fw-bold fs-4 text-danger\" style=\"position:relative;top:-20px;\">-$phanTramGiam <span>%</span></p>
                            <h6 class=\"w-25 mx-5 text-decoration-line-through\"><span class=\"currency\">$giaGoc</span> đ</h6>
                            ";
                            }
                            ?>
                            <!-- Cập nhật hiển thị giá sản phẩm -->

                        </div>
                        <button class="btn btn-outline-danger shadow-sm mt-3" value="0" onclick="submitForm()" name="add">Mua ngay</button>
                        <script>
                            function submitForm() {
                                document.getElementById("configForm").submit();
                            }
                        </script>

                    </form>

            </div>
        </div>
        <div class="row border-top m-3 p-3">
            <div class="col-8 description">
                <h1 class="text-center">Thông tin sản phẩm</h1>
                <p><?php echo $de['moTa']; ?></p>
            </div>
            <div class="col-4 border-start">
                <h1 class="text-center">Cấu hình Điện thoại <?php echo $de['tenSP'] . " ({$de['RAM']}GB/{$de['boNho']}GB)"; ?></h1>
                <table class="table table-striped">
                    <tbody>

                        <tr>
                            <th scope="row">Màn hình</th>
                            <td><?php echo $de['doPhanGiai'] . " {$de['KTManHinh']}\""; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Hệ điều hành</th>
                            <td><?php echo $de['tenHDH']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Camera sau</th>
                            <td><?php echo $de['camSau']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Camera trước</th>
                            <td><?php echo $de['camTruoc']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">CPU</th>
                            <td><?php echo $de['cpu']; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">RAM</th>
                            <td> <?php echo $de['RAM']; ?> GB</td>
                        </tr>
                        <tr>
                            <th scope="row">ROM</th>
                            <td> <?php echo $de['boNho']; ?> GB</td>
                        </tr>
                        <tr>
                            <th scope="row">SIM</th>
                            <td> <?php echo $de['SIM'] . ", Hỗ trợ {$de['mangDiDong']} G"; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Pin</th>
                            <td> <?php echo $de['pin']; ?> mAh</td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
<script src="app\frontend\views\js\currency.js"></script>