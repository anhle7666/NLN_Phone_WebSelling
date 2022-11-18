    <main class="form-signin w-25 position-absolute top-50 start-50 translate-middle">
        <form action="?module=account&action=register" method="POST">
            <div class="text-center mb-5">
                <a href="?module=home&active=index"><img class="mb-4" src="https://img.icons8.com/fluency/48/000000/two-smartphones.png" alt="" width="72" height="57"></a>
                <h1 class="h3 fw-normal">Đăng Ký</h1>

            </div>
            <div class="form-floating mb-1">
                <input type="text" class="form-control" id="floatingInput" placeholder="Your Numberphone" required name="SDT">
                <label for="floatingInput">Số điện thoại</label>
            </div>
            <div class="form-floating mb-1">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required name="MK">
                <label for="floatingPassword">Mật khẩu</label>
            </div>
            <div class="form-floating mb-1">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required name="RMK">
                <label for="floatingPassword">Nhập lại mật khẩu</label>
            </div>


            <button class="w-100 btn btn-lg btn-primary mt-5" type="submit">Đăng Ký</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p>
        </form>
    </main>