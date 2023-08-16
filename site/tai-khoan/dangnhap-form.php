
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../content/css/dk-form.css">

    </head>
    <body>

    <div class="row_login_center">
    <?php  

            // if(isset($MESSAGE)){
            //     echo "<h5 class='alert alert-warning'>$MESSAGE</h5>";
            // }
           
        ?>
    
            <h2 class="alert alert-danger">ĐĂNG NHẬP</h2>
        <form action="dangnhap.php" method="post" name="login">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input name="ma_kh" class="form-control" value="<?=$ma_kh ;?>" >
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input name="mat_khau" type="password" class="form-control" value="<?= $mat_khau ;?>">
            </div>
            <div class="form-group">
               
                    <input name="ghi_nho" type="checkbox" >
                    Ghi nhớ tài khoản?
                 
            </div>
            
            <div class="btns-login">
                <!-- <input type="text" name="id" hidden> -->
                <p><input name="dang-nhap" class="btn-login" value="Đăng nhập" type="submit"></p>
                
                    <a type="" name="btn_forgot" id="" style="text-align: left; cursor: pointer;" href="../tai-khoan/quenmk.php">Quên mật khẩu</a>
            </div>
        </form>
        
       
        <div class="thongbao" style="text-align:center;font-family: Mergeblack; ">
             
        <?php
   if(isset($thongbao)&& ($thongbao!=""))
   echo $thongbao;

        //  require_once "../../dao/khach-hang.php";
        //  require_once "../../dao/pdo.php";
        // //  require_once "../../dao/connect.php";
         
        //  // print_r($_POST);
        //        if (isset($_POST['dang-nhap']) && ($_POST['dang-nhap'])) {
        //          $ma_kh = $_POST['ma_kh'];
        //          $mat_khau = $_POST['mat_khau'];
        //          $stmt= checkusers($ma_kh);
                           
        //         $user = khach_hang_select_by_id($ma_kh);
        //         if($user){
        //              $_SESSION['login-users']=$user['ma_kh'];
        //              $_SESSION['login-mk']=$user['mat_khau'];
        //              $_SESSION['login-hoten']=$user['ho_ten'];
        //              $_SESSION['login-hinh']=$user['hinh'];

        //              $_SESSION['login-vai_tro']=$user['vai_tro'];  
                 
        //               if($user['mat_khau']==$mat_khau ){
        //                 if(isset($_POST['ghi_nho'])){
        //                     add_cookie("ma_kh", $ma_kh, 30);
        //                     add_cookie("mat_khau", $mat_khau, 30);
        //                 }
        //                 else{
        //                     delete_cookie("ma_kh");
        //                     delete_cookie("mat_khau");
        //                 }
        //                  header('Location: ../../index.php');
        //               }else{
                     
        //                 echo"Bạn vui lòng nhập lại mật khẩu";
        //               }
                      
        //               }
        //          else {
                

              
        //                 echo"    <span> <a href='../tai-khoan/dangky.php'> Đăng ký </a>nếu bạn chưa có tài khoản</span> <br/>  ";
        //             }
        //           if ($ma_kh == "" && $mat_khau == "") {
        //                 echo"Bạn vui lòng nhập đăng nhập <br/>";
        //             }
        
                   
                  
                
         
        //         }
            ?></div>
    </div>

    