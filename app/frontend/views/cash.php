<link rel="shortcut icon" href="https://img.icons8.com/fluency/48/000000/two-smartphones.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="app\frontend\views\css\checkout.css">
<link rel="stylesheet" href="app\frontend\views\css\cart.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

<?php extract($data); ?>

<main>
    <h3 class="mb-5">Thanh toán</h3>
    <div class="row g-3">
        <div class="col-md-5 col-lg-4 order-md-last">

        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Địa chỉ thanh toán</font>
                </font>
            </h4>
            <form onsubmit="return (checkSubmit());" class="needs-validation" novalidate="" id="bill" method="POST" action="?module=cash&action=createBill">
                <div class="row g-3">

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Họ tên</font>
                            </font>
                        </label>
                        <input name="hoTen" type="text" class="form-control" id="lastName" placeholder="" value="<?php echo $account['hoTen']; ?>" required />
                    </div>

                    <div class="col-12">
                        <label for="SDT" class="form-label">
                            SĐT
                        </label>
                        <input disabled type="text" class="form-control" id="SDT" placeholder="Số điện thoại" value="<?php echo $account['SDT']; ?>" required>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">
                            Email
                        </label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com" value="<?php echo $account['email']; ?>">
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">
                            Địa chỉ
                        </label>
                        <input name="diaChi" type="text" class="form-control" id="address" placeholder="1234 Đường số 1" required="" value="<?php echo $account['diaChi']; ?>" required>
                    </div>

                    <hr class="my-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Giỏ hàng</font>
                            </font>
                            <!-- Tổng số sản phẩm -->
                            <span class="badge bg-secondary rounded-pill">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"><?php echo sizeof($data); ?></font>
                                </font>
                            </span>
                        </span>
                    </h4>
                    <div class="row align-items-start">

                        <div class="col-12 col-sm-8 items">
                            <?php
                            $tongTien = 0;
                            $thue = 0;
                            $vanChuyen = 12000;
                            $count = 0;
                            foreach ($data as $dt) {
                                $tongTien += (int)($dt['gia'] * (1.0 - $dt['tongGiam']))*$dt['SLMua']; ?>
                                <!--1-->
                                <div class="cartItem row align-items-start">
                                    <div class="col-2 mb-2">
                                        <img class="w-100" src="<?php echo $dt['linkAnh']; ?>" alt="art image">
                                    </div>
                                    <div class="col-4 mb-2">
                                        <h6 class=""><?php echo $dt['tenSP']; ?></h6>
                                        <p class="pl-1 mb-0"><?php echo "{$dt['RAM']}GB-{$dt['boNho']}GB"; ?></p>
                                        <p class="pl-1 mb-0"><?php echo "Màu: " . $dt['mau']; ?></p>
                                    </div>
                                    <div class="col-2">
                                        <input disabled type="text" class="cartItemQuantity p-1 text-center" id="" min="1" max="<?php echo $dt['SL']; ?>" value="x<?php echo $dt['SLMua']; ?>">
                                    </div>
                                    <div class="col-2">
                                        <p id="cartItem1Price" class="currency"><?php echo (int)($dt['gia'] * (1.0 - $dt['tongGiam']));?>đ</p>
                                        <input hidden name="<?php echo $count++;?>" value="<?php echo (int)($dt['gia'] * (1.0 - $dt['tongGiam']));?>">
                                    </div>
                                </div>
                                <hr>
                            <?php }
                            $thanhToan = $tongTien + $thue + $vanChuyen; ?>
                            <hr>
                        </div>

                        <div class="col-12 col-sm-4 p-3 form shadow-sm">
                            <div class="row m-0">
                                <div class="col-sm-8 p-0">
                                    <h6>Tạm tính</h6>
                                </div>
                                <div class="col-sm-4 p-0">
                                    <p id="subtotal" class="currency"><?php echo $tongTien;?>đ</p>
                                </div>
                            </div>
                            <div class="row m-0">
                                <div class="col-sm-8 p-0 ">
                                    <h6>Thuế</h6>
                                </div>
                                <div class="col-sm-4 p-0">
                                    <p id="tax" class="currency"><?php echo $thue;?>đ</p>
                                </div>
                                <div class="col-sm-8 p-0 ">
                                    <h6>Phí vận chuyển</h6>
                                </div>
                                <div class="col-sm-4 p-0">
                                    <p id="transport" class="currency"><?php echo $vanChuyen;?>đ</p>
                                    <input hidden name="phiVC" value="<?php echo $vanChuyen;?>">
                                    
                                    <input hidden name="thue" value="<?php echo $thue;?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row mx-0 mb-2">
                                <div class="col-sm-8 p-0 d-inline">
                                    <h5>Tổng tiền</h5>
                                </div>
                                <div class="col-sm-4 p-0">
                                    <p id="total" class="currency"><?php echo $thanhToan;?>đ</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <h4 class="mb-3">
                        Phương thức thanh toán
                    </h4>

                    <div class="my-3">
                        <div class="form-check">
                            <input id="cash" name="paymentMethod" value="Thanh toán tiền mặt khi nhận hàng" type="radio" class="form-check-input" checked="" required="">
                            <label class="form-check-label" for="cash">
                                <img class="method-icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-cod.svg" width="32" height="32" alt="icon">
                                Thanh toán tiền mặt khi nhận hàng
                            </label>
                        </div>
                        <div class="form-check">
                            <input id="credit" name="paymentMethod" value="Thanh toán bằng thẻ tín dụng" type="radio" class="form-check-input" required="">
                            <label class="form-check-label" for="credit">
                                <img class="method-icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-credit.svg" width="32" height="32" alt="icon">
                                Thanh toán bằng thẻ tín dụng
                            </label>
                        </div>
                        <div class="form-check">
                            <input id="momo" name="paymentMethod" value="Thanh toán bằng ví MoMo" type="radio" class="form-check-input" required="" onclick="addPayment(this.id);">
                            <label class="form-check-label" for="momo">
                                <img class="method-icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/icons/checkout/icon-payment-method-momo.svg" width="32" height="32" alt="icon">
                                Thanh toán bằng ví MoMo
                            </label>
                        </div>


                        <div class="form-check">
                            <input id="paypal" name="paymentMethod" value="Thanh toán qua cổng Paypal" type="radio" class="form-check-input" required="">
                            <label class="form-check-label" for="paypal">
                                <img class="method-icon" src="data:image/png;base64,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" width="32" height="32" alt="icon">
                                Thanh toán qua cổng Paypal
                            </label>
                        </div>
                    </div>



                    <hr class="my-4">

                    <input value="Đặt hàng" <?php if((sizeof($data)==0))echo "disabled"?> class="w-100 btn btn-primary btn-lg" type="submit"/>
                     
            </form>
        </div>
    </div>
</main>
<script>
    function checkSubmit(){
        if(document.getElementById('lastName').value==""){
            alert("Hãy nhập họ tên của bạn!");
            return false;
        }

        if(document.getElementById('address').value==""){
            alert("Hãy nhập địa chỉ của bạn!");
            return false;
        }    
        return true;
    }

    function addPayment(elementID) {

        const parent = document.getElementById(elementID).parentElement;
        const div = document.createElement('div');
        div.style.width = '300px';
        div.style.height = '300px';

        const QRcode = document.createElement('img');
        const link_Qr = './app/frontend/views/images/QR_Momo.jpg';
        QRcode.src = link_Qr;
        QRcode.style.width = '100%';
        QRcode.id=`QR_+${elementID}`;

        div.appendChild(QRcode);
        if(document.getElementById(QRcode.id));
        else {
            parent.appendChild(div);
        }

    }
</script>
<script src="app\frontend\views\js\currency.js"></script>