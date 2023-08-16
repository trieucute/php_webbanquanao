<head>
<link rel="stylesheet" href="../../content/css/dk-form.css">
    
</head>
<div class="row_login_center">
<h2 class="alert alert-danger">QUÊN MẬT KHẨU</h2>
  
        <form action="quenmk.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input name="ma_kh" class="form-control">
            </div>
            <div class="form-group">
                <label>Địa chỉ email</label>
                <input name="email" class="form-control">
            </div>
            <div class="btns-login">
                <button name="btn_forgot" class="btn-login">Tìm lại mật khẩu</button>
            </div>
        </form>
        <div class="thongbao" style="text-align:center;font-family: Mergeblack;">
        <?php
            if(isset($thongbao)&& ($thongbao!=""))
            echo $thongbao;
        ?>
        </div>
</div>