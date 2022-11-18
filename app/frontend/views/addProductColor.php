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
        display: inline;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 <?php
 echo 
"<form action=\"?module=admin&action=addProductColor&parameter=$so_mau\" method=\"POST\" style=\"margin: 20px;\">";
    echo"<h1>Upload hình ảnh sản phẩm theo màu</h1>";
    for ($i = 1; $i <= $so_mau; $i++) {
        echo "
        <label>
                <h6>Màu $i </h6>
            </label>
            <br>
            <input class=\"form-control\" type=\"text\" name=\"mau $i\">
            <br>
            <label>
                <h6>Links Ảnh </h6>
            </label>
            <br>
            <textarea class=\"form-control\" name=\"links $i\" cols=\"100\" rows=\"10\"></textarea>
            <br>
        ";
    }
    ?>
<input class="btn btn-outline-secondary" type="reset" value="Nhập lại">
<input class="btn btn-primary" type="submit" value="Thêm">
</form>