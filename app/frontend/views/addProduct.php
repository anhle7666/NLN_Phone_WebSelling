<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
    table {
        width: 100%;
        margin: 10px;
    }

    tr {
        display: block;
        margin: 10px;
    }

    td {
        width: 25%;

    }
</style>
<div class="w-100 position-relative">
    <h1 class="text-center d-block mt-3">Thêm sản phẩm</h1>
    <form action="?module=admin&action=addProduct" method="POST" autocomplete="off" class="w-75 position-relative top-50 start-50 translate-middle">
        <table>
            <tr class="d-flex justify-center-around">
                <td>
                    <label for="">
                        <h6>Danh mục</h6>
                    </label>
                    <select class="form-control w-75"  name="danh_muc">

                        <?php
                        foreach ($danh_muc as $danh_muc) {
                            echo "<option value=\"{$danh_muc['idDM']}\">{$danh_muc['tenDM']}</option>";
                        }
                        ?>

                    </select>
                </td>
                <td>
                    <label for="">
                        <h6>Nhà sản xuất</h6>
                    </label>
                    <select class="form-control w-75" name="nsx">

                        <?php
                        foreach ($nsx as $nsx) {
                            echo "<option value=\"{$nsx['idNSX']}\">{$nsx['tenNSX']}</option>";
                        }
                        ?>

                    </select>
                </td>

                <td>
                    <label for="">
                        <h6>Mạng di động</h6>
                    </label>
                    <select class="form-control w-75" name="dldd">

                        <?php
                        for ($i = 2; $i < 6; $i++) {
                            echo "<option value=\"$i\">$i","G</option>";
                        }
                        ?>
                    </select>
                </td>
                <td>
                    <label for="">
                        <h6>Hệ điều hành</h6>
                    </label>
                    <select class="form-control w-75" name="hdh">

                        <?php
                        foreach ($hdh as $hdh) {
                            echo "<option value=\"{$hdh['idHDH']}\">{$hdh['tenHDH']}</option>";
                        }
                        ?>

                    </select>
                </td>
            </tr>

            <tr class="d-flex justify-content-start">
                <td class="w-50">
                    <label for="">
                        <h6>Tên sản phẩm</h6>
                    </label>
                    <input class="form-control" type="text" name="tenSP" id="">
                </td>
            </tr>
            <tr  class="d-flex justify-content-around">
                <td>
                    <label for="">
                        <h6>CPU</h6>
                    </label>
                    <input class="form-control w-75" type="text" name="cpu" id="">
                </td>
                <td>
                    <label for="">
                        <h6>PIN</h6>
                    </label>
                    <input class="form-control w-75" type="number" name="pin" id="" step="100" min="1000" value="1000">
                </td>
                <td>
                    <label for="">
                        <h6>SIM</h6>
                    </label>
                    <input class="form-control w-75" type="text" name="SIM" id="">
                </td>
                <td>
                    <label for="">
                        <h6>Số màu</h6>
                    </label>
                    <input class="form-control w-75" type="number" name="so_mau" id="">
                </td>

            </tr>

            <tr>
                <th>Camera</th>
            </tr>

            <tr>
                <td>
                    <label for="">
                        <h6>Trước</h6>
                    </label>
                    <input class="form-control w-75" type="text" name="camTruoc" id="">

                </td>
                <td>
                    <label for="">
                        <h6>Sau</h6>
                    </label>
                    <input class="form-control w-75" type="text" name="camSau" id="">

                </td>
            </tr>

            <tr>
                <th>Màn hình</th>
            </tr>

            <tr>
                <td>
                    <label for="">
                        <h6>Kích thước</h6>
                    </label>
                    <input  class="form-control w-75" type="number" name="KTManHinh" id="" step="0.1">

                </td>
                <td>
                    <label for="">
                        <h6>Độ phân giải</h6>
                    </label>
                    <input class="form-control w-75" type="text" name="doPhanGiai" id="">

                </td>
            </tr>

            <tr >
                <td colspan="4">
                    <label for="">
                        <h6>Mô tả</h6>
                    </label>
                    <textarea class="form-control" type="area" name="moTa" id="" style="height: 200px;"></textarea>
                </td>
            </tr>
            <tr class="d-flex justify-content-center">
                <td >
                    <input class="btn btn-outline-secondary" type="reset" value="Hủy">
                    <input class="btn btn-primary ms-3" type="submit" value="Thêm" name="submit">
                </td>

            </tr>
        </table>

    </form>
</div>
<?php
