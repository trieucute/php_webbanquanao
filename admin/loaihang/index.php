

<?php
require "../../global.php";
require "../../dao/loai.php";
require "../../dao/sanpham.php";
//--------------------------------//

check_login();

//phân giải các field name từ form trong form thành cách biến
extract($_REQUEST); 


if(exist_param("themmoi")){
    if(!empty($ten_loai)){
        try {
                loai_insert($ten_loai);
                unset($ten_loai, $ma_loai);
                $thongbao = "Thêm thành công";
            }
            catch (Exception $exc) {
                // $thongbao= "Thêm mới thất bại!";
            }
           
    }else{
        // $thongbao= "Thêm mới thất bại!";
    }
    $VIEW_NAME = "add.php";
}

else if(exist_param("loaihang_xoa")){
    try {
        loai_delete($ma_loai);
        $thongbao = "Đã xoá thành công";
 } 
    catch (Exception $exc) {
        $thongbao= "Xóa thất bại!";
    }
    $listdanhmuc = loai_select_all();

    $VIEW_NAME = "list.php";
}
else if(exist_param("loaihang_sua")){
    $capnhatdm= loai_select_by_id($ma_loai);
    extract($capnhatdm);
    $thongbao = "Đã lấy thành công";
    $VIEW_NAME = "edit.php";
}
else if(exist_param("capnhat")){ 

    try {
      
        loai_update($ma_loai, $ten_loai);
      
        $thongbao='Cập nhật thành công';
         
    } 
    catch (Exception $exc) {
        $thongbao= "Cập nhật thất bại!";
    }

   
    $VIEW_NAME = "edit.php";
}
// else if(exist_param("loaihang_list")){
//     $listdanhmuc = loai_select_all();
//     $VIEW_NAME = "list.php";
// }
else{
    $listdanhmuc = loai_select_all();
    $VIEW_NAME = "list.php";
}

require "../index.php";
?>