<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<body class="w-100 position-relative top-0 start-50 translate-middle-x">
    <h1 class="text-center my-5">Hóa đơn bán hàng</h1>
    <div class="d-flex">
        <strong>Shop: </strong> Nhóm 4
    </div>
    <div class="d-flex">
        <strong>Khách hàng: &nbsp;</strong> <?php echo $data[0]['hoTen'];?>
    </div>
    <div class="d-flex">
        <strong>SĐT: &nbsp;</strong> <?php echo $data[0]['SDT'];?>
    </div>
    <div class="d-flex">
        <strong>Email: &nbsp;</strong> <?php echo $data[0]['email'];?>
    </div>
    <div class="d-flex">
        <strong>Địa chỉ: &nbsp;</strong> <?php echo $data[0]['diaChi'];?>
    </div>
    <div class="d-flex">
        <strong>Ngày đặt hàng: &nbsp;</strong> <?php echo date('d-m-Y',strtotime($data[0]['ngayTao']));?> 
    </div>
    <div class="d-flex">
        <strong>Phương thức thanh toán: &nbsp;</strong> <?php echo $data[0]['phuongThucTT'];?>
    </div>

    <table class="table mt-5">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Tổng</th>
            </tr>
        </thead>

        <tbody>
            <?php $tong=0; foreach($data as $dt){?>
            <tr>
                <td>
                <?php echo $dt['tenSP'];?>
                <br>
                (<?php echo "{$dt['mau']}, {$dt['RAM']}GB-{$dt['boNho']}GB";?>)
                </td>
                <td class="currency"><?php echo $dt['giaBan'];?>đ</td>
                <td><?php echo $dt['SLMua'];?></td>
                <?php $tong+=$dt['SLMua']*$dt['giaBan'];?>
                <td class="currency"><?php echo $dt['SLMua']*$dt['giaBan'];?>đ</td>
            </tr>
            <?php }?>    

            <tr></tr>

            <tr>
                <td colspan="3" class="text-left"><strong>VAT</strong></td>
                <td class="currency">0</td>
            </tr>
            <tr>
                <td colspan="3" class="text-left"><strong>Tạm tính</strong></td>
                <td class="currency"><?php echo $tong;?>đ</td>
            </tr>
            <tr>
                <td colspan="3" class="text-left"><strong>Phí vận chuyển</strong></td>
                <td class="currency"><?php echo $dt['phiVC'];?>đ</td>
            </tr>
            <tr>
                <td colspan="3" class="text-left"><strong>Tổng giá trị đơn hàng</strong></td>
                <td class="currency"><?php echo $dt['phiVC']+$tong;?>đ</td>
            </tr>
        </tbody>

    </table>

    <div class="signature d-flex w-100 position-relative">
        <div class="signature-customer mt-5 position-absolute top-0 start-0 text-center" style='max-width:fit-content;'>
            Ngày ... tháng ... năm ...
            <br>
            Chữ kí khách hàng <br>
            <br>
            <br>
            <br>
            <br>
            ________________________
        </div>
        <div class="signature-store mt-5 position-absolute top-0 end-0 text-center" style='max-width:fit-content;'>
            Ngày ... tháng ... năm ...
            <br>
            Chữ kí cửa hàng <br>
            <br>
            <br>
            <br>
            <br>
            ________________________
        </div>
    </div>
</body>
<script>
    window.onload = function () {
        window.print()
    }
</script>
<script src="app\frontend\views\js\currency.js"></script>