<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="app\frontend\views\css\dashboard.css">
</head>

<body>
    <main>
        <div class="function">
            <div class="function-personal">
                <div class="function-persional__avatar">
                    <a href="?module=admin&action=index">
                    <img src="https://www.bitrefill.com/content/cn/b_rgb%3A0db2c5%2Cc_pad%2Ch_800%2Cw_800/v1647482643/personal-paraguay.jpg" alt="avatar">
                    </a>                    
                </div>

                <div class="function-persional__name">
                    <span>Admin</span>
                </div>
                <div class="function-persional__status">
                    <span>Online</span>
                </div>
                <div class="function-persional__avatar">
                    <a href="?module=account&action=signOut">
                    Đăng xuất
                    </a>                    
                </div>
            </div>
            <div class="function-menu">
                <ul class="function-menu__list">
                    <li class="list--item"><a href="?module=admin&action=tongQuan">Tổng quan</a></li>
                    <li class="list--item active"><a href="?module=admin&action=index">Đơn hàng</a></li>
                    <li class="list--item"><a href="?module=admin&action=sanPham">Sản phẩm</a></li>
                    <!-- <li class="list--item"><a href="?module=admin&action=khachHang">Khách hàng</a></li> -->
                    <li class="list--item"><a href="?module=admin&action=baoCao">Báo cáo</a></li>
                </ul>
            </div>

        </div>
        <?php echo $content; ?>
        <footer>

        </footer>
        
    </main>
</body>

</html>