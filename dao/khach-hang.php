<?php
require_once 'pdo.php';
// them kh trong phần đăng ký
function khachhang_insert( $ma_kh, $mat_khau, $ho_ten, $email, $hinh){
    $sql = "insert into khachhang( ma_kh,mat_khau,ho_ten,email,hinh) values ('$ma_kh','$mat_khau','$ho_ten','$email','$hinh')";
    pdo_execute($sql);
}

// kiem tra khach hang
// function checkuser($ma_kh, $mat_khau){
//     $sql = "select * from khachhang where ma_kh= ' " .$ma_kh." ' and mat_khau=' ".$mat_khau." ' ";
//     $checkusers= pdo_query($sql);
//    if(count($checkusers)>0) return $checkusers[0]['vai_tro'];
//    else return 0;
    
//  }
// kiem tra  khach hang
 function checkusers($ma_kh){
    $sql = "select * from khachhang where ma_kh= '$ma_kh'";
    pdo_execute($sql);

    
 }

// function checkuser($ma_kh, $mat_khau) {
//     $sql = "select * from khachhang where ma_kh='" . $ma_kh . "' AND  mat_khau='" . $mat_khau . "'";
//     $sp = pdo_query_one($sql);
//     return $sp;
// }
 // hiện tất cả khach hàng
 function users(){
    $sql = "select * from khachhang" ;
    return  pdo_query($sql);
 }

// Thêm khách hàng mới
function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat,$vai_tro){
    $sql = "INSERT INTO khachhang(ma_kh, mat_khau, ho_ten, email, hinh,kich_hoat,vai_tro) VALUES ('$ma_kh', '$mat_khau', '$ho_ten', '$email', '$hinh','$kich_hoat','$vai_tro')";
   pdo_execute($sql);
}
// function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat,$vai_tro){
//     $sql = "INSERT INTO khachhang(ma_kh, mat_khau, ho_ten, email, hinh,kich_hoat,vai_tro) VALUES ('?', '?', '?', '?', '?','?','?')";
//    pdo_execute($sql,$ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1,$vai_tro==1);
// }

//Cập nhật thông tin 1 khách hàng
function khach_hang_update($ma_kh,$mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
 if($hinh!=""){
   $sql = "UPDATE khachhang SET mat_khau='".$mat_khau."',ho_ten='".$ho_ten."',email='".$email."',hinh='".$hinh."',kich_hoat=$kich_hoat,vai_tro=$vai_tro WHERE ma_kh='". $ma_kh."'  ";
 }else{
   $sql = "UPDATE khachhang SET mat_khau='".$mat_khau."',ho_ten='".$ho_ten."',email='".$email."',kich_hoat=$kich_hoat,vai_tro=$vai_tro WHERE ma_kh='". $ma_kh."'  ";
 }
    pdo_execute($sql);
}

// Xóa một hoặc nhiều khách hàng
function khach_hang_delete($ma_kh){
    $sql = "DELETE FROM khachhang  WHERE ma_kh= '$ma_kh'";
    // if(is_array($ma_kh)){
    //     foreach ($ma_kh as $ma_kh) {
    //         pdo_execute($sql);
    //     }
    // }
    // else{
        pdo_execute($sql);
    // }
}

//Truy vấn một kháh hàng theo ma_kh
function khach_hang_select_by_id($ma_kh){
    $sql = "SELECT * FROM khachhang where ma_kh='$ma_kh'";
    $kh=pdo_query_one($sql);
    return $kh ;
}

//Kiểm tra sự tồn tại của một khách hang3
function khach_hang_exist($ma_kh){
    $sql = "SELECT count(*) FROM khachhang WHERE ma_kh='$ma_kh'";
    return pdo_query_value($sql) > 0;
}

// //Lấy danh sách kh theo vai trò
// function khach_hang_select_by_role($vai_tro){
//     $sql = "SELECT * FROM khachhang WHERE vai_tro=".$vai_tro;
//     return pdo_query($sql);
// }
//Cập nhật mật khẩu của 1 khách hàng
function khach_hang_change_password($ma_kh, $mat_khau_moi){
    $sql = "UPDATE khachhang SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}