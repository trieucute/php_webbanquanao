

<?php
require "../../global.php";
require "../../dao/loai.php";
require "../../dao/sanpham.php";
//--------------------------------//

check_login();

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST); 

if(exist_param("themmoi")){
    $hinh= save_file("hinh","$img_path");
    if(!empty($ten_hh)&&!empty($don_gia) &&!empty($hinh)&&!empty($ngay_nhap)&&!empty($ma_loai)&&!empty($mo_ta) ){
    try {
        

        insert_sp($ten_hh,$hinh,$don_gia,$mo_ta,$luot_xem,$ngay_nhap,$giam_gia,$dac_biet,$ma_loai);
        
        unset($ten_hh,$hinh,$don_gia,$mo_ta,$ngay_nhap,$giam_gia,$dac_biet,$ma_loai);
        $thongbao = "Thêm thành công";
    }
    catch (Exception $exc) {
        $thongbao= "Thêm mới thất bại!";
    }
}else{
    $thongbao= "Thêm mới thất bại!";
}

    $VIEW_NAME = "add.php";
}

else if(exist_param("hanghoa_xoa")){
    try {
        xoa_sp($ma_hh);
        $thongbao = "Đã xoá thành công";
 } 
    catch (Exception $exc) {
        $thongbao= "Xóa thất bại!";
    }
    $listsp = sp_all();


    $VIEW_NAME = "list.php";
}
else if(exist_param("hanghoa_sua")){
    $sanpham =  sp_load($ma_hh);
    extract($sanpham);
    $thongbao = "Đã lấy thành công";
   
    $VIEW_NAME = "edit.php";
}
else if(exist_param("capnhat")){ 
    $hinh= save_file("hinh","$img_path");
   
    try {
       
        update_sp($ma_hh,$ten_hh,$hinh,$don_gia,$mo_ta,$luot_xem,$ngay_nhap,$giam_gia,$dac_biet,$ma_loai);
       $sanpham =sp_load($ma_hh);
    
        $thongbao='Cập nhật thành công';
         
    } 
    catch (Exception $exc) {
        // print_r($exc);
        $thongbao= "Cập nhật thất bại!";
    }

    $listdanhmuc = loai_select_all();
    $VIEW_NAME = "edit.php";
}
else if(exist_param("hanghoa_list")){
    // $hinh= save_file("hinh","$IMAGE_DIR/");

    $kq=sp_all();
   
    
    $VIEW_NAME = "list.php";
}
else{
    $VIEW_NAME = "add.php";
}

require "../index.php";
?>