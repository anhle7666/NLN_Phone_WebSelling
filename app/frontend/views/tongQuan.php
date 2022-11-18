<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="app\frontend\views\css\viewDashboard.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="view">
    <div class="view-search">
        <div class="view-search__input input-group mb-3">
            <input type="text" class="form-control" placeholder="Nhập từ khoá tìm kiếm.." aria-label="Nhập từ khoá tìm kiếm" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
        </div>
    </div>
    <div class="container">
        <div class="div1">
            <nav>Thống kê</nav>
            <canvas id="myChart" width="400" height="170"></canvas>
        </div>
        <div class="div2">
            <nav>Giao hàng</nav>
            <table class="table table-borderless mt-2">
                <thead>
                    <tr>
                        <th>Mã đơn</th>
                        <th>Tên</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="Row">
                        <td>1</td>
                        <td>John</td>
                        <td>Chưa giao</td>
                    </tr>
                    <tr class="Row">
                        <td>2</td>
                        <td>James</td>
                        <td>Chưa giao</td>
                    </tr>
                    <tr class="Row">
                        <td>3</td>
                        <td>Tony</td>
                        <td>Chưa giao</td>
                    </tr>
                </tbody>
            </table>
            <span><a href="./donHang.html">Xem thêm</a></span>
        </div>
        <div class="div3">
            <nav>Khách hàng mới</nav>

            <table class="table table-borderless mt-2">
                <thead>
                    <tr>
                        <th>Mã Khách hàng</th>
                        <th>Tên</th>
                        <th>Địa chỉ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="Row">
                        <td>1</td>
                        <td>John</td>
                        <td>Cần Thơ</td>
                    </tr>
                    <tr class="Row">
                        <td>2</td>
                        <td>James</td>
                        <td>HCM</td>
                    </tr>
                    <tr class="Row">
                        <td>3</td>
                        <td>Tony</td>
                        <td>Cần Thơ</td>
                    </tr>
                </tbody>
            </table>
            <span><a href="./khachHang.html">Xem thêm</a></span>
        </div>
        <div class="div4">
            <nav>Đơn hàng mới</nav>
            <table class="table table-borderless mt-2">
                <thead>
                    <tr>
                        <th>Mã đơn</th>
                        <th>Tên</th>
                        <th>Giá</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="Row">
                        <td>1</td>
                        <td>John</td>
                        <td>100.000</td>
                    </tr>
                    <tr class="Row">
                        <td>2</td>
                        <td>James</td>
                        <td>500.000</td>
                    </tr>
                    <tr class="Row">
                        <td>3</td>
                        <td>Tony</td>
                        <td>260.000</td>
                    </tr>
                </tbody>
            </table>
            <span><a href="./donHang.html">Xem thêm</a></span>
        </div>
        <div class="div5">
            <nav>Hoạt động</nav>
            <table class="table table-borderless mt-2">
                <thead>
                    <tr>
                        <th>Thời gian</th>
                        <th>Hoạt động</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="Row">
                        <td>21:09:10 24-09-2022</td>
                        <td>Đăng nhập</td>
                    </tr>
                    <tr class="Row">
                        <td>21:09:10 24-09-2022</td>
                        <td>Giao hàng</td>
                    </tr>
                    <tr class="Row">
                        <td>21:09:10 24-09-2022</td>
                        <td>Xoá đơn</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="app\frontend\views\js\thongKe.js"></script>