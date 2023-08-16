<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

$VIEW_NAME="tai-khoan/quenmk-form.php";

if(exist_param("btn_forgot")){
    $user = khach_hang_select_by_id($ma_kh);
    if($user){
        if($user['email'] != $email){
            $thongbao= "Sai địa chỉ email!";
        }
        else{
            $thongbao= "Mật khẩu của bạn là: " . $user['mat_khau'];
            $VIEW_NAME="tai-khoan/dangnhap-form.php";
            global $ma_kh, $mat_khau;
        }
    }
    else{
        $thongbao= "Sai tên đăng nhập!";
    }
}

require '../layout.php';
?>