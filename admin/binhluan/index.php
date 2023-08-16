

<?php
require "../../global.php";
require "../../dao/binh-luan.php";
require "../../dao/thong-ke.php";

//--------------------------------//

// check_login();
extract($_REQUEST);
if(exist_param("ma_hh",$_REQUEST)){
    $list_bl=binh_luan_select_by_hang_hoa($ma_hh);
    // if(isset($_POST['xoa_bl'])){
    //         binh_luan_delete($ma_bl);
    // }


    $VIEW_NAME="detail.php";
       

}else {


    $list_bl=thong_ke_binh_luan();

    $VIEW_NAME="list.php";
}
if(exist_param('xoa_bl')){
    binh_luan_delete($ma_bl);
    $list_bl=thong_ke_binh_luan();

    $VIEW_NAME="list.php";
}
require "../index.php";
?>