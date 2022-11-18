<div class="view">

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
                <form action="?module=admin&action=baoCao" method="post">
                    <label for="startDateFilter">Từ ngày</label>
                    <input <?php if (isset($F['ngayBDF'])) echo "value=\"{$F['ngayBDF']}\""; ?> id="startDateFilter" name="ngayBDF" class="date" type="date">
                    <label for="endDateFilter">Đến ngày</label>
                    <input <?php if (isset($F['ngayKTF'])) echo "value=\"{$F['ngayKTF']}\""; ?> id="endDateFilter" name="ngayKTF" class="date" type="date">
                    <button type="submit" name="filter" id="button__filter" class="btn btn-outline-primary px-5">Lọc</button>
                    <a class="btn btn-outline-primary px-5" href="?module=admin&action=bieuDoDoanhThu">Xem Biểu Đồ Doanh Thu</a>
                </form>
            </div>
            <div class="view-main__table">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">
                                <form onchange="submitForm()" id="display" action="?module=admin&action=baoCao" method="post">
                                    <label class="label">Thống kê theo:</label>
                                    <select name="display" class="form-control  ">
                                        <option <?php if ($display == 'month') echo "selected" ?> value="month">Tháng</option>
                                        <option <?php if ($display == 'date') echo "selected" ?> value="date">Ngày</option>
                                    </select>
                                </form>
                            </th>
                            <th scope="col">Tổng số đơn</th>
                            <th scope="col">Doanh thu</th>
                            <th scope="col">Thuế</th>
                            <th scope="col">Vận chuyển</th>
                            <th scope="col">Tổng doanh thu</th>
                        </tr>
                    </thead>                    
                    <tbody class="table-group-divider">
                        <?php foreach ($data as $dt) { ?>
                            <tr>
                                <td scope="row"><?php echo $dt['thoiGian'] ?></td>
                                <td><?php echo $dt['tongDon'] ?></td>
                                <td class="currency"><?php echo $dt['doanhThu'] ?></td>
                                <td class="currency"><?php echo $dt['thue'] ?></td>
                                <td class="currency"><?php echo $dt['phiVC'] ?></td>
                                <td class="currency"><?php echo $dt['doanhThu'] + $dt['phiVC'] + $dt['thue'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            
        </div>

        <script src="app\frontend\views\js\currency.js"></script>
        <script>
            function submitForm() {
                document.getElementById('display').submit();
            }
        </script>
    </div>

</div>