<main class="form-signin vh-100 w-100 position-relative">
    <form class="w-25 position-relative top-50 start-50 translate-middle" method="POST" , action="?module=account&action=signIn">
        <div class="text-center mb-5 ">
            <a href="?module=home&active=index"><img class="mb-4" src="https://img.icons8.com/fluency/48/000000/two-smartphones.png" alt="" width="72" height="57"></a>
            <h1 class="h3 fw-normal">Đăng Nhập</h1>

        </div>
        <div class="form-floating mb-1">
            <input type="text" class="form-control" id="floatingInput" placeholder="Your number phone" name="SDT" minlength="10" required>
            <label for="floatingInput">Số điện thoại</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="MK" minlength="1" required>
            <label for="floatingPassword">Mật khẩu</label>
        </div>

        <div class="checkbox mt-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <div class="mb-3 text-muted">
            <label>
                Chưa có tài khoản. Đăng kí <a rel="stylesheet" href="?module=account&action=registerPage">tại đây</a>
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Đăng Nhập</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p>
    </form>
</main>