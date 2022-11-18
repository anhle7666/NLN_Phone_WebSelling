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
<div class="position-relative w-100">
    <h1 class="text-center d-block">Thêm sản phẩm</h1>
    <form action="?module=admin&action=addDetailProduct" method="POST" autocomplete="off" class="position-relative w-50 top-0 start-50 translate-middle-x">
    <table >
    
        <?php //Hàng 1
        ?>
        <tr>
            <td >
                <h6>Chọn màu: </h6>
            </td>
            <?php foreach ($mau as $mau) {

            ?>
                <td>
                    <div class="d-inline-block w-100 ">
                        <label class="label" for="idMau<?php echo $mau['idMau'];?>">
                            <h6><?php echo $mau['mau']; ?></h6>
                        </label>
                        <input 
                            class="form-check-input" 
                            type="checkbox" 
                            name="<?php echo $mau['idMau'];?>" 
                            id="idMau<?php echo $mau['idMau'];?>" 
                        >
                    </div>
                </td>
            <?php } ?>
        </tr>

        <?php //Hàng 2
        ?>
        <tr>
            
            <td>
                <div  class="d-inline-block w-100">
                    <label for="">
                        <h6>RAM: </h6>
                    </label>
                    <select class="form-control w-75" name="ram" id="">
                        <?php foreach ($ram as $ram) { ?>
                            <option value="<?php echo $ram['idRam']; ?>"><?php echo $ram['RAM'] . "GB"; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </td>
            <td>
                <div class="d-inline-block w-100">
                    <label for="">
                        <h6>Bộ nhớ: </h6>
                    </label>
                    <select class="form-control w-75"  name="bo_nho" id="">
                        <?php foreach ($bo_nho as $bo_nho) { ?>
                            <option value="<?php echo $bo_nho['idBoNho']; ?>"><?php echo $bo_nho['boNho'] . "GB"; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </td>
            <td>
                <div class="d-inline-block w-100">
                    <label for="gia">
                        <h6>Đơn giá: </h6>
                    </label>
                    <input class="form-control w-75" type="number" name="gia" id="" min="0" value="0" step="100">
                </div>
            </td>
            <td>
                <div class="d-inline-block w-100">
                    <label for="SL">
                        <h6>Số lượng: </h6>
                    </label>
                    <input class="form-control w-75" type="number" name="SL" id="" min="0" value="0">
                </div>
            </td>
        </tr>
        <tr>
            <td class="d-flex w-100 justify-content-between mt-5">
                <button class="btn btn-danger">
                    <a 
                        class="text-decoration-none link-dark" 
                        href="http://localhost/Quan_Ly_Ban_Hang/?module=add&action=addProductPage">
                        Thêm sản phẩm khác
                    </a>
                </button>
 
                <div>
                    <input type="reset" value="Nhập lại" class="btn btn-secondary">
                    <input type="submit" value="Thêm" class="btn btn-primary" name="submit">
                </div>
            </td>

        </tr>
    </table>
    

</form>

</div>