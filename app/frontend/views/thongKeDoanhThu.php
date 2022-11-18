<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="view">

    <link rel="stylesheet" href="app\frontend\views\css\filter.css">
    <?php extract($data); ?>
    <div class="view">
        

        <div class="view-main">
            <div class="view-main__filter">
                <form action="?module=admin&action=bieuDoDoanhThu" method="post">
                    <label for="startDateFilter">Từ ngày</label>
                    <input <?php if (isset($F['ngayBDF'])) echo "value=\"{$F['ngayBDF']}\""; ?> id="startDateFilter" name="ngayBDF" class="date" type="date">
                    <label for="endDateFilter">Đến ngày</label>
                    <input <?php if (isset($F['ngayKTF'])) echo "value=\"{$F['ngayKTF']}\""; ?> id="endDateFilter" name="ngayKTF" class="date" type="date">
                    <button type="submit" name="filter" id="button__filter" class="btn btn-outline-primary px-5">Lọc</button>
                    <a class="btn btn-outline-primary px-5" href="?module=admin&action=baoCao">Xem Bảng Doanh Thu</a>
                </form>
            </div>            
            <div>
                <form onchange="submitForm()" id="display" action="?module=admin&action=bieuDoDoanhThu" method="post">
                <label class="label">Thống kê theo:</label>
                    <select name="display" id="" class="form-control w-25">
                        <option <?php if ($display == 'month') echo "selected" ?> value="month">Tháng</option>
                        <option <?php if ($display == 'date') echo "selected" ?> value="date">Ngày</option>
                    </select>
                </form>
            </div>
            <!-- Thống kê -->
            <?php $lables=""; $dataChart=""; foreach ($data as $dt) { 
                            $lables.="'{$dt['thoiGian']}', ";
                            $dataChart.="{$dt['doanhThu']}, ";
            }?>
            <div class="div1">
                <nav>Thống kê doanh thu</nav>
                <canvas id="myChart" width="400" height="170"></canvas>
            </div>
            <script>
                const ctx = document.getElementById('myChart').getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: [<?php echo rtrim($lables, ", ");?>],
                        datasets: [{
                            label: '',
                            data: [<?php echo rtrim($dataChart, ", ");?>],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(54, 162, 235, 0.5)',
                                'rgba(255, 206, 86, 0.5)',
                                'rgba(75, 192, 192, 0.5)',
                                'rgba(153, 102, 255, 0.5)',
                                'rgba(255, 159, 64, 0.5)',
                                'rgba(255, 33, 6, 0.5)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>

        <script src="app\frontend\views\js\currency.js"></script>
        <script>
            function submitForm() {
                document.getElementById('display').submit();
            }
        </script>
    </div>

</div>