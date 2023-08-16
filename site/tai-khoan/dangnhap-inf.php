
<head>
    <link rel="stylesheet" href="../../content/css/taikhoan.css">
    <style>
        .panel {
            width: 35%;
        }
    </style>
</head>
<div class="panel panel-default nn-panel-login">
            <div class="panel-heading">TÀI KHOẢN</div>
            <div class="panel-body">
                <div class="text-center">
                    <?php   
                    
         
        // $user=$_SESSION['login-users'];
        //                $_SESSION['login-hinh']=$user['hinh'];
        //        $urlHinhpath="../../content/uploads/".$_SESSION['login-hinh']; // đường dẫn hình
        //        if(is_file($urlHinhpath)){
        //            $urlHinhs ="<img src=' ".$urlHinhpath." ' height='100'>";
        //        }else{
        //            $urlHinhs="NO PHOTO";
        //        }
                  
                    ?>
                    
                    <img src="<?=$img_path?><?=$_SESSION['user']['hinh'] ?>" width='400' height='250' style="  object-fit: cover; ">
                    <br>
                    Tên đăng nhập: <?=$_SESSION['user']['ma_kh']?>
                    <br>
                    Họ và tên: <?=$_SESSION['user']['ho_ten']?>

                </div>
                <li><a href="../tai-khoan/dangnhap.php?btn_logoff">Đăng xuất</a></li>
                <li><a href="../tai-khoan/doimk.php">Đổi mật khẩu</a></li>
                <li><a href="../tai-khoan/capnhat-tk.php">Cập nhật tài khoản</a></li>
                <?php
                    if($_SESSION['user']['vai_tro'] == TRUE){
                        echo "<li><a href='../../admin/trangchinh'>Quản trị website</a></li>";
                    }
                ?>
            </div>
        </div>        
