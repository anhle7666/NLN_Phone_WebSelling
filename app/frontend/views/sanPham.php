<?php extract($data);?>
<div class="view">

    <!-- <div class="view-search">
        <div class="view-search__input input-group mb-3">
            <input type="text" class="form-control" placeholder="Nhập từ khoá tìm kiếm.." aria-label="Nhập từ khoá tìm kiếm" aria-describedby="button-addon2">
            <button class="btn btn-outline-success" type="button" id="button-addon2">Search</button>
        </div>
    </div> -->

    <div class="view-transfer mb-5" style="margin-top: 20px;">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Sản phẩm</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Hãng</a>
            </li>

        </ul>
    </div>
    <form id="sort" action="?module=admin&action=sanPham" method="post">
        <label for="ID_order">Tên sản phẩm</label>
        <input <?php if($tenSPF!=null)echo "value=\"{$tenSPF}\"";?> id="ID_order" name="tenSPF" type="text" class="form-control mb-3" placeholder="Tên sản phẩm">

        <label for="" class="label mt-3 ">Số lượng nhỏ hơn?</label>
        <input <?php if($SLF!=null)echo "value=\"{$SLF}\"";?> type="number" class="form-control w-50" min=0 value="" name="SLF">
        <div class="view-function my-3 grid">
            <button class="btn btn-primary g-col-6"><a class="text-decoration-none text-light" href="?module=add&action=addProductPage">Thêm sản phẩm</a></button>
            <button class="btn btn-success g-col-6" type="submit" name="filter" id="button__filter" class="btn btn-outline-primary px-5">Lọc</button>
            <!-- <button class="btn btn-danger g-col-6"><a class="text-decoration-none text-light" href="#">Xem biểu đồ</a></button> -->
            <select name="sort" id="filter" class="form-select d-inline w-25 "  onchange="submitForm()">
                <option <?php if($sortCond==0)echo "selected";?> value="ct.SL">Sắp xếp theo số lượng</option>
                <option <?php if($sortCond==1)echo "selected";?> value="ct.gia">Sắp xếp theo giá bán</option>
                <option <?php if($sortCond==2)echo "selected";?> value="sp.tenSP">Sắp xếp theo tên</option>
            </select>
        </div>
    </form>
    <script>
        function submitForm(){
            document.getElementById('sort').submit();
        }
    </script>
    <div class="view-table">
        <table class="table">
            <thead>
                <tr>
                    <th>Tên</th>
                    <th>Hãng</th>
                    <th>Cấu hình</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $dt) { ?>
                    <tr>
                        <td><?php echo $dt['tenSP']; ?></td>
                        <td><?php echo $dt['tenNSX']; ?></td>
                        <td><?php echo "{$dt['mau']}, {$dt['RAM']}GB-{$dt['boNho']}GB"; ?></td>
                        <td class="currency"><?php echo $dt['gia']; ?></td>
                        <td <?php if($dt['SL']<5)echo "style=\"color: red;\""; ?>><?php echo $dt['SL']; ?></td>
                        <td>
                            <a href="#" class="text-primary">Cập nhật</a>
                            <a href="#" class="text-danger">Xoá</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script src="app\frontend\views\js\currency.js"></script>