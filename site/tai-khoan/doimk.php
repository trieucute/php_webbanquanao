<?php
require '../../global.php';
require '../../dao/khach-hang.php';

check_login();

extract($_REQUEST);
$VIEW_NAME="tai-khoan/doimk-form.php";

if(exist_param("btn_change")){
    if($mat_khau2 != $mat_khau3){
        $thongbao= "Xác nhận mật khẩu mới không đúng!";
    }
    else{
        $user = khach_hang_select_by_id($ma_kh);
        if($user){
            if($user['mat_khau'] == $mat_khau){
                try {
                    khach_hang_change_password($ma_kh, $mat_khau2);
                    $thongbao= "Đổi mật khẩu thành công!";
                } 
                catch (Exception $exc) {
                    $thongbao= "Đổi mật khẩu thất bại !";
                }
            }
            else{
                $thongbao= "Sai mật khẩu!";
            }
        }
        else{
            $thongbao= "Sai mã đăng nhập!";
        }        
    }
}


require '../layout.php';?>