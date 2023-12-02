<?php
$regexEmail = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
?>

<div class="wrapper">
    <div class="login">
        <h1>Đăng ký</h1>
        <form action="index.php?act=dangky" method="post" class="form-login" enctype="multipart/form-data">
            <div class="form-input">
                <p>Tài khoản</p>
                <input type="text" name="nguoidung">
            </div>
            <div class="form-input">
                <p>Email</p>
                <input type="text" name="email">
            </div>

            <p>Ảnh</p>
            <input type="file" name="img">
            <br>

            <div class="form-input">
                <p>Số điện thoại</p>
                <input type="text" name="sdt" />
            </div>
            <div class="form-input">
                <p>Nhập mật khẩu</p>
                <input type="password" id="password" name="matkhau" />
            </div>

            <div class="form-input">
                <p>Địa chỉ</p>
                <input type="text" name="diachi" />
            </div>
            
            <input type="checkbox" class="mt-2" onclick="myFunction()"> Hiện mật khẩu
            <br>



            <?php //if (isset($_POST['dangky']) && $_POST['dangky']) {
            //echo "Đăng ký tài khoản thành công";
            //} 
            ?>

            <?php
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $nguoidung = $_POST['nguoidung'];
                $matkhau = $_POST['matkhau'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $img = $_FILES['img']['name'];
                $target_dir = "../upload_file/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    //echo "Load ảnh thành công";
                } else {
                    //echo "Upload ảnh không thành công";
                }

                $id_role = 3;
                $length = strlen($matkhau);
                $checknguoidung = checknguoidung($nguoidung);
                $checkemail = checkemail($email);
                if (empty($nguoidung) || empty($email) || empty($matkhau) || empty($sdt) || empty($diachi)) {
                    echo "Hãy điền tất cả trường";
                } else if (is_array($checkemail)) {
                    echo "Email đã tồn tại";
                } else if (is_array($checknguoidung)) {
                    echo "Tài khoản đã tồn tại";
                } else if ($length < 8) {
                    echo "Mật khẩu ít nhất 8 ký tự";
                } else {
                    insert_taikhoan($nguoidung, $matkhau, $email, $img, $diachi, $sdt, $id_role);
                    echo "Đăng ký thành công";
                }

            } ?>
            
            
            
            <div class="login-btn">
                <input type="submit" name="dangky" value="Đăng Ký">
            </div>
            <div class="forget-password">
                <a href="#">Quên mật khẩu ?</a>
            </div>
            <div class="forget-password">
                <a href="index.php?act=dangnhap">Bạn đã có tài khoản! Đăng nhập</a>
            </div>
        </form>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</div>