<main class="form-signin vh-100 w-100 position-relative" >
        <form class="w-25 position-relative top-50 start-50 translate-middle" action="?module=account&action=updateProfile" method="POST">
            <div class="text-center mb-5 ">
                <a href="./index.html"><img class="mb-4"
                        src="https://img.icons8.com/fluency/48/000000/two-smartphones.png" alt="" width="72"
                        height="57"></a>
                <h1 class="h3 fw-normal">Cập nhật thông tin</h1>

            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Your number phone" name="hoTen">
                <label for="floatingInput"><?php if($data['hoTen']!=null) echo $data['hoTen']; else echo "Họ và tên";?></label>
            </div>
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="diaChi">
                <label for="floatingPassword"><?php if($data['diaChi']!=null) echo $data['diaChi']; else echo "Địa chỉ";?></label>
            </div>
            <div class="form-floating mt-2">
                <input type="text" class="form-control" id="floatingPassword" placeholder="Password" name="email">
                <label for="floatingPassword"><?php if($data['email']!=null) echo $data['email']; else echo "Email";?></label>
            </div>



            <button id="login_btn" class="mt-5 w-100 btn btn-lg btn-primary" type="submit" name="update">Cập nhật </button>
            <button id="login_btn" class="mt-1 w-100 btn btn-lg btn-outline-secondary" type="reset">Hủy</button>
        </form>
    </main>