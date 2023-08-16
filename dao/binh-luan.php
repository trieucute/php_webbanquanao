<?php
require_once 'pdo.php';
//them bl
function binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_bl){
    $sql = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_bl) VALUES ('$ma_kh','$ma_hh','$noi_dung','$ngay_bl') ";
    pdo_execute($sql);
}

// function binh_luan_update($ma_bl, $ma_kh, $ma_hh, $noi_dung, $ngay_bl){
//     $sql = "UPDATE binh_luan SET ma_kh='".$ma_kh."',ma_hh='".$ma_hh."',noi_dung='".$noi_dung."',ngay_bl='".$ngay_bl."' WHERE ma_bl=".$ma_bl;
//     pdo_execute($sql);
// }
// xoá bl
function binh_luan_delete($ma_bl){
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
    if(is_array($ma_bl)){
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_bl);
    }
}
//hien tat cả bl
function binh_luan_select_all(){
    $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_bl DESC ";
    return pdo_query($sql);
}
//Truy vấn tất cả bình luận theo mã bình luận
function binh_luan_select_by_id($ma_bl){
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
    return pdo_query_one($sql, $ma_bl);
}
//kiem tra su ton tai
function binh_luan_exist($ma_bl){
    $sql = "SELECT count(*) FROM binh_luan WHERE ma_bl=?";
    return pdo_query_value($sql, $ma_bl) > 0;
}
//Truy vấn tất cả bình luận theo mã hàng hoá
function binh_luan_select_by_hang_hoa($ma_hh){
    $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hanghoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ma_bl DESC";
    return pdo_query($sql, $ma_hh);
}