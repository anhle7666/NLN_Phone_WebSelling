<link rel="stylesheet" href="app\frontend\views\css\statusOrder.css">
<ul class="nav justify-content-center status-bar">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="?module=bill&action=index">Tất cả đơn</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?module=bill&action=index&parameter=5">Chờ thanh toán</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?module=bill&action=index&parameter=1">Đang xử lý</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?module=bill&action=index&parameter=2">Đang vận chuyển</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?module=bill&action=index&parameter=3">Đã giao</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="?module=bill&action=index&parameter=4">Đã huỷ</a>
    </li>
</ul>

<div class="product_list">
    <?php foreach($data as $dt){?>
    <div class="Item row align-items-start">
        <div class="col-2 mb-2">
            <img class="w-100" src="<?php echo $dt['linkAnh'];?>" alt="art image">
        </div>
        <div class="col-4 mb-2">
            <h6 class="mb-4"><?php echo $dt['tenSP'];?></h6>
            <p class="pl-1 mt-1"><?php echo $dt['RAM']."GB-".$dt['boNho']."GB";?></p>
            <p class="pl-1 mt-1"><?php echo $dt['mau'];?></p>
        </div>
        <div class="col-2">
            <p><strong>Số lượng: </strong> <span><?php echo $dt['SLMua'];?></span></p>
        </div>
        <div class="col-2">
            <p><strong>Giá: </strong>
                <span id="cartItem1Price" class="currency"><?php echo $dt['giaBan'];?>đ</span>
            </p>
        </div>
        <div class="col-2">
            <p><strong>Trạng thái: </strong> <span><?php echo $dt['trangThai'];?></span></p>
        </div>
    </div>
    <?php }?>
</div>
<script src="app\frontend\views\js\currency.js"></script>