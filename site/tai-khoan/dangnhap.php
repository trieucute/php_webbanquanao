<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);


if(exist_param("dang-nhap")){

    $user = khach_hang_select_by_id($ma_kh);
   
    if($user){
       
        if($user['mat_khau'] == $mat_khau){
            $thongbao= "Đăng nhập thành công!";
            header('Location:../trang-chinh');
            if(exist_param("ghi_nho")){
                add_cookie("ma_kh", $ma_kh, 30);
                add_cookie("mat_khau", $mat_khau, 30);
            }
            else{
                delete_cookie("ma_kh");
                delete_cookie("mat_khau");
            }
            $_SESSION["user"] = $user;
            
            if(isset($_SESSION['request_uri'])){
                header("location: " . $_SESSION['request_uri']);
            }
         
        }
        else{
            $thongbao= "Sai mật khẩu!";
        }
    }
    else{
        if(empty($ma_kh) && empty($mat_khau)){
            $thongbao= "Vui lòng nhập thông tin";
        }else if(empty($ma_kh)){
            $thongbao= "Vui lòng nhập tên đăng nhập";
        }else if(empty($mat_khau)){
            $thongbao= "Vui lòng nhập mật khẩu";
        }else{
             $thongbao= "Sai mã đăng nhập!";
        }
       
    }
}

else{

    if(exist_param("btn_logoff")){
    
            session_unset();
            
            // $VIEW_NAME="../trang-chinh/";

        
        
    }
    $ma_kh = get_cookie("ma_kh");
    $mat_khau = get_cookie("mat_khau");
    

}



$VIEW_NAME="tai-khoan/dangnhap-form.php";
if(exist_param('infor')){
    $VIEW_NAME="tai-khoan/dangnhap-inf.php";
    
    }
require_once "../layout.php";