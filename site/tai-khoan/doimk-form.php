<head>
<link rel="stylesheet" href="../../content/css/dk-form.css">
    
</head>
<div class="row_login_center">
<h2 class="alert alert-danger">ĐỔI MẬT KHẨU</h2>
   
        <form action="doimk.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input name="ma_kh" class="form-control" value="<?= $_SESSION["user"]['ma_kh']?>" readonly>
            </div>
            <div class="form-group">
                <label>Mật khẩu cũ</label>
                <input name="mat_khau" type="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Mật khẩu mới</label>
                <input name="mat_khau2" type="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Xác nhận mật khẩu mới</label>
                <input name="mat_khau3" type="password" class="form-control">
            </div>
            <div class="btns-login">
                <button name="btn_change" class="btn-login">Đổi mật khẩu</button>
            </div>
        </form>
        <div class="thongbao" style="text-align:center;font-family: Mergeblack;">
        <?php
            if(isset($thongbao)&& ($thongbao!=""))
            echo $thongbao;
        ?>
        </div>
</div>