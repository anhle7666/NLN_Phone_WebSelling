<link rel="stylesheet" href="app\frontend\views\css\filter.css">
<?php extract($data); ?>
<div class="view">
    <!-- <div class="view-search">
        <div class="view-search__input input-group mb-3">
            <input type="text" class="form-control" placeholder="Nhập từ khoá tìm kiếm.." aria-label="Nhập từ khoá tìm kiếm" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
        </div>
    </div> -->

    <div class="view-main">
        <div class="view-main__filter">
            <form action="?module=admin&action=index" method="post">
                <label for="ID_order">Mã đơn hàng</label>
                <input <?php if(isset($F['idHDF']))echo "value=\"{$F['idHDF']}\"";?> id="ID_order" name="idHDF" type="text" class="form-control mb-3" placeholder="Mã đơn hàng">
                <label for="ID_order">Tên khách hàng</label>
                <input <?php if(isset($F['hoTenF']))echo "value=\"{$F['hoTenF']}\"";?> id="ID_order" name="hoTenF" type="text" class="form-control mb-3" placeholder="Tên khách hàng">
                <label for="startDateFilter">Từ ngày</label>
                <input <?php if(isset($F['ngayBDF']))echo "value=\"{$F['ngayBDF']}\"";?> id="startDateFilter" name="ngayBDF" class="date" type="date">
                <label for="endDateFilter">Đến ngày</label>
                <input <?php if(isset($F['ngayKTF']))echo "value=\"{$F['ngayKTF']}\"";?> id="endDateFilter" name="ngayKTF" class="date" type="date">
                <button type="submit" name="filter" id="button__filter" class="btn btn-outline-primary px-5">Lọc</button>
            </form>
        </div>
        <div class="view-main__table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Khách hàng</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Ngày</th>
                        <th scope="col">Kênh thanh toán</th>
                        <th scope="col">Cập nhật trạng thái</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php foreach ($data as $dt) { ?>
                        <tr>
                            <th scope="row"><?php echo $dt['idHD'] ?></th>
                            <td><?php echo $dt['hoTen'] ?></td>
                            <td><?php echo $dt['trangThai'] ?></td>
                            <td class="currency"><?php echo $dt['gia'] ?>đ</td>
                            <td><?php echo date('d-m-Y', strtotime($dt['ngayTao'])) ?></td>
                            <td><?php echo $dt['phuongThucTT'] ?></td>
                            <!-- Nếu trạng thái chưa giao thì hiện -->
                            <td>
                                <form action="?module=admin&action=index" method="post">
                                    <button <?php if($dt['idTrangThai']>2)echo "hidden";?> type="submit" name="updateTrangThai" value="<?php echo $dt['idTrangThai'] + 1; ?>"><?php echo $status[$dt['idTrangThai'] + 1] ?></button>
                                    <input hidden type="text" name="idHD" value="<?php echo $dt['idHD'] ?>">
                                </form>
                            </td>
                            <td><a target="_blank" href="?module=admin&action=inHD&parameter=<?php echo $dt['idHD'];?>">In hóa đơn</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="app\frontend\views\js\currency.js"></script>
</div>