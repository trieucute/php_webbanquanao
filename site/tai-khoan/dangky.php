  
<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

if(exist_param("dang-ky")){
    if(empty($ma_kh) && empty($mat_khau)&&empty($email) &&empty($ho_ten) ){
        $thongbao = "Vui lòng nhập đầy đủ thông tin";
    }
    else if(empty($ma_kh) ){
        $thongbao = "Mời nhập tên đăng nhập";
    }
 
    else if(empty($mat_khau) ){
        $thongbao= "Mời nhập mật khẩu";
    }else if($mat_khau != $mat_khau2){
        $thongbao = "Xác nhận mật khẩu không đúng!";
    }
    else if(empty($ho_ten) ){
        $thongbao = "Mời nhập họ và tên";
    }
    else if(empty($email) ){
        $thongbao = "Mời nhập email";
    }
   
    else if(khach_hang_exist($ma_kh)){
        $thongbao= "Tên đăng nhập này đã được sử dụng!";
    }
    else{
        $file_name = save_file("hinh", "$IMAGE_DIR/");
        $hinh = $file_name?$file_name:"user.png";
     
        try {
            khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            $thongbao= "Đăng ký thành viên thành công!";
        } 
        catch (Exception $exc) {
            $thongbao= "Đăng ký thành viên thất bại!";
        }
    }
}
else{
    global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $mat_khau2;
}

$VIEW_NAME="tai-khoan/dangky-form.php";
require '../layout.php';?>
   
                            <!-- "ma_kh":{
                                required:"Mời nhập tên đăng nhâp",
                                maxlength:"Hãy nhập tối đa 13 ký tự"
                            },
                            "ma_kh":{
                                required:"Mời nhập mật khẩu",
                                maxlength:"Hãy nhập tối thiểu 8 ký tự"
                            },
                            "mat_khau2":{
                                equalTo:"Xác nhận mật khẩu sai",
                                maxlength:"Hãy nhập tối đa 13 ký tự"
                            },
                            "email":{
                                required:"Mời nhập email",
                                maxlength:"Hãy nhập đúng định dạng email"
                        -->
 
  