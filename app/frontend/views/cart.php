<link rel="stylesheet" href="app\frontend\views\css\cart.css">
<main id="cart" style="max-width:960px">
    <h3 class="mb-5">Giỏ hàng của bạn</h3>
    <div class="container-fluid">
        <div class="row align-items-start">
            <form action="?module=cart&action=index" method="post" id="cart">
                <div class="col-12 col-sm-8 items">
                    <?php
                    $tongTien = 0;
                    $thue = 0;
                    $vanChuyen = sizeof($data)>0?12000:0;
                    $count=0;
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
                                <input  onchange="changeSL(this.name)" type="number" class="cartItemQuantity p-1 text-center" id="" min="1" max="<?php echo $dt['SL']; ?>" value="<?php echo $dt['SLMua']; ?>" name="<?php echo $count;?>">                                                           
                            </div>
                            <div class="col-2">
                                <p id="cartItem1Price" class="currency"><?php echo (int)($dt['gia'] * (1.0 - $dt['tongGiam'])); ?>đ</p>
                            </div>
                            <div class="col-2">
                                <button style="border: 0ch;background:none;box-shadow: none;" onclick="deleteSP()" name="delete" value="<?php echo $count++;?>"><img class="trash" src="https://img.icons8.com/fluency/48/000000/delete-trash.png" /></button>
                            </div>
                        </div>
                        <hr>
                    <?php }
                    $thanhToan = $tongTien + $thue + $vanChuyen; ?>
                    <hr>
                </div> 
                <input type="hidden" name="index" id="index">           
            </form>

            <script>
                function changeSL(index){
                    let del=document.getElementsByName('delete');
                    del.forEach(function(e){
                        e.value=-1;
                    });
                    document.getElementById('index').value=index;
                    document.getElementById('cart').submit();
                }
                function deleteSP(){                    
                    document.getElementById('cart').submit();
                }
            </script>
            
            <div class="col-12 col-sm-4 p-3 form shadow-sm">
                <div class="row m-0">
                    <div class="col-sm-8 p-0">
                        <h6>Tạm tính</h6>
                    </div>
                    <div class="col-sm-4 p-0">
                        <p id="subtotal" class="currency"><?php echo $tongTien; ?>đ</p>
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
                    </div>
                </div>
                <hr>
                <div class="row mx-0 mb-2">
                    <div class="col-sm-8 p-0 d-inline">
                        <h5>Thành tiền</h5>
                    </div>
                    <div class="col-sm-4 p-0">
                        <p id="total" class="currency"><?php echo $thanhToan;?>đ</p>
                    </div>
                </div>
                <a  href="<?php if(sizeof($data)!=0)echo "?module=cash&action=index";?>"><button id="btn-checkout" class="mt-3 shopnow"><span>Mua hàng</span></button></a>
            </div>
        </div>
    </div>
    </div>
</main>
<script src="app\frontend\views\js\currency.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>