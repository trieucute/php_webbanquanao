<?php
require '../../global.php';
require "../../dao/pdo.php";
require '../../dao/sanpham.php';
require '../../dao/binh-luan.php';

//-------------------------------//

extract($_REQUEST);

     $loadsp = sp_load($ma_hh);
    extract($loadsp);

// Tăng số lượt xem lên 1
    tang_lx($ma_hh); 
// binhluan
if(exist_param("noi_dung")){
        $ma_kh=$_SESSION['user']['ma_kh'];
    $ngay_bl=date_format(date_create(),'Y-m-d');
    binh_luan_insert($ma_kh,$ma_hh,$noi_dung,$ngay_bl);
  
    

}
$bl_list=binh_luan_select_by_hang_hoa($ma_hh);
$VIEW_NAME = "../hanghoa/chitietsp-ui.php";
require_once '../layout.php';?>