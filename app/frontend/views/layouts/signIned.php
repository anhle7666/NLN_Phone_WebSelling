<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="https://img.icons8.com/fluency/48/000000/two-smartphones.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <title><?php echo $title;?></title>
</head>

<body>

    <!-- Header  -->
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="?module=home&active=index" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <img src="https://img.icons8.com/fluency/48/000000/two-smartphones.png" />
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <a href="?module=home&active=index" class="nav-link px-2 link-dark">Trang chủ</a>
                    </li>
                    <!-- <li>
                        <a href="?module=products&action=show" class="nav-link px-2 link-dark">Sản phẩm</a>
                    </li> -->
                    <li>
                        <a href="?module=other&action=styles" class="nav-link px-2 link-dark">Xu hướng</a>
                    </li>
                    <li>
                        <a href="?module=other&action=promotions" class="nav-link px-2 link-dark">Khuyến mãi</a>
                    </li>
                </ul>

                <form method="POST" action="?module=products&action=show" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input name="search" type="search" class="form-control" placeholder="Tìm kiếm..." aria-label="Search" value="<?php echo $search;?>"/>
                </form>

                <div class="me-3">
                    <a href="?module=cart&action=index"><img src="https://img.icons8.com/fluency/32/000000/shopping-cart.png" /></a>
                </div>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <!-- <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle" /> -->
                        <h10 style="font-size: 14px;"><?php echo Session::get('ten');?></h10>
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li>
                            <a class="dropdown-item" href="?module=account&action=updateProfile">Cập nhật thông tin</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="?module=bill&action=index">Trạng thái đơn hàng</a>
                        </li>
                        <li><a class="dropdown-item" href="?module=cart&action=index">Giỏ hàng</a></li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a class="dropdown-item" href="?module=account&action=signOut">Đăng xuất
                                <img class="ms-2"
                                    src="https://img.icons8.com/external-tanah-basah-glyph-tanah-basah/28/1A1A1A/external-sign-out-user-interface-tanah-basah-glyph-tanah-basah.png" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Main -->
    <?php echo $content; ?>

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center ms-5">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <img src="https://img.icons8.com/fluency/48/000000/two-smartphones.png" />
            </a>
            <span class="mb-3 mb-md-0 text-muted">© 2022 Team 4 (Phuc Anh, Hieu Nghia, Tuan Kiet)</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex me-5">
            <li class="ms-1"><a class="text-muted" href="#"><img
                        src="https://img.icons8.com/fluency/32/000000/twitter-circled.png" /></a></li>
            <li class="ms-1"><a class="text-muted" href="#"><img
                        src="https://img.icons8.com/fluency/32/000000/instagram-new.png" /></a></li>
            <li class="ms-1"><a class="text-muted" href="#"><img
                        src="https://img.icons8.com/fluency/32/000000/facebook-circled.png" /></a></li>
        </ul>
    </footer>
</body>

</html>