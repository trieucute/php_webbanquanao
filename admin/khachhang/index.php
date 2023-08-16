

<?php
require "../../global.php";
// require "../../dao/connect.php";
require "../../dao/khach-hang.php";
//--------------------------------//

check_login();

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST); 

if(exist_param("themmoi")){
    $hinh= save_file("hinh","$img_path");
    if(!empty($ma_kh)&&!empty($mat_khau) &&!empty($ho_ten)&&!empty($email)){
    try {
    
        khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat,$vai_tro);
        
        unset($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat,$vai_tro);
        $thongbao = "Thêm thành công";
    }
    catch (Exception $exc) {
        $thongbao= "Thêm mới thất bại!";
    }
}else if($mat_khau!=$mat_khau2){
    $thongbao= "Thêm mới thất bại!";
}
else{
    $thongbao= "Thêm mới thất bại!";
}

    $VIEW_NAME = "add.php";
}

else if(exist_param("kh_xoa")){
    try {   

        khach_hang_delete($ma_kh);
        $kh= khach_hang_select_by_id($ma_kh);

       
        $thongbao = "Đã xoá thành công";
 } 
    catch (Exception $exc) {
        // print_r($exc);
        $thongbao= "Xóa thất bại!";
    }
    $listkh = users();
 


    $VIEW_NAME = "list.php";
}
else if(exist_param("kh_sua")){
    $kh= khach_hang_select_by_id($ma_kh);
    
   extract($kh);
    $listkh = users();

    $thongbao = "Đã lấy thành công";
   
    $VIEW_NAME = "edit.php";
}
else if(exist_param("capnhat")){ 
    $hinh= save_file("hinh","$img_path");
   
    try {
    
        khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
     
         $listkh = users();
    //   print_r( $hinh);
        $thongbao='Cập nhật thành công';
         
    } 
    catch (Exception $exc) {
        print_r($exc);
        $thongbao= "Cập nhật thất bại!";
    }


    $VIEW_NAME = "edit.php";
}
else if(exist_param("kh_list")){
    // $hinh= save_file("hinh","$IMAGE_DIR/");

    $listkh = users();
 
    $VIEW_NAME = "list.php";
}
else{
    $VIEW_NAME = "add.php";
}

require "../index.php";
?>